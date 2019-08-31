<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHistoriaAcademicaRequest;
use App\Http\Requests\UpdateHistoriaAcademicaRequest;
use App\Repositories\HistoriaAcademicaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HistoriaAcademicaController extends AppBaseController
{
    /** @var  HistoriaAcademicaRepository */
    private $historiaAcademicaRepository;

    public function __construct(HistoriaAcademicaRepository $historiaAcademicaRepo)
    {
        $this->historiaAcademicaRepository = $historiaAcademicaRepo;
    }

    /**
     * Display a listing of the HistoriaAcademica.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $historiaAcademicas = $this->historiaAcademicaRepository->paginate(10);

        return view('historia_academicas.index')
            ->with('historiaAcademicas', $historiaAcademicas);
    }

    /**
     * Show the form for creating a new HistoriaAcademica.
     *
     * @return Response
     */
    public function create()
    {
        return view('historia_academicas.create');
    }

    /**
     * Store a newly created HistoriaAcademica in storage.
     *
     * @param CreateHistoriaAcademicaRequest $request
     *
     * @return Response
     */
    public function store(CreateHistoriaAcademicaRequest $request)
    {
        $input = $request->all();

        $historiaAcademica = $this->historiaAcademicaRepository->create($input);

        Flash::success('Historia Academica saved successfully.');

        return redirect(route('historiaAcademicas.index'));
    }

    /**
     * Display the specified HistoriaAcademica.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $historiaAcademica = $this->historiaAcademicaRepository->find($id);

        if (empty($historiaAcademica)) {
            Flash::error('Historia Academica not found');

            return redirect(route('historiaAcademicas.index'));
        }

        return view('historia_academicas.show')->with('historiaAcademica', $historiaAcademica);
    }

    /**
     * Show the form for editing the specified HistoriaAcademica.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $historiaAcademica = $this->historiaAcademicaRepository->find($id);

        if (empty($historiaAcademica)) {
            Flash::error('Historia Academica not found');

            return redirect(route('historiaAcademicas.index'));
        }

        return view('historia_academicas.edit')->with('historiaAcademica', $historiaAcademica);
    }

    /**
     * Update the specified HistoriaAcademica in storage.
     *
     * @param int $id
     * @param UpdateHistoriaAcademicaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHistoriaAcademicaRequest $request)
    {
        $historiaAcademica = $this->historiaAcademicaRepository->find($id);

        if (empty($historiaAcademica)) {
            Flash::error('Historia Academica not found');

            return redirect(route('historiaAcademicas.index'));
        }

        $historiaAcademica = $this->historiaAcademicaRepository->update($request->all(), $id);

        Flash::success('Historia Academica updated successfully.');

        return redirect(route('historiaAcademicas.index'));
    }

    /**
     * Remove the specified HistoriaAcademica from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $historiaAcademica = $this->historiaAcademicaRepository->find($id);

        if (empty($historiaAcademica)) {
            Flash::error('Historia Academica not found');

            return redirect(route('historiaAcademicas.index'));
        }

        $this->historiaAcademicaRepository->delete($id);

        Flash::success('Historia Academica deleted successfully.');

        return redirect(route('historiaAcademicas.index'));
    }
}
