<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRelacionColegioRequest;
use App\Http\Requests\UpdateRelacionColegioRequest;
use App\Repositories\RelacionColegioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RelacionColegioController extends AppBaseController
{
    /** @var  RelacionColegioRepository */
    private $relacionColegioRepository;

    public function __construct(RelacionColegioRepository $relacionColegioRepo)
    {
        $this->relacionColegioRepository = $relacionColegioRepo;
    }

    /**
     * Display a listing of the RelacionColegio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $relacionColegios = $this->relacionColegioRepository->paginate(10);

        return view('relacion_colegios.index')
            ->with('relacionColegios', $relacionColegios);
    }

    /**
     * Show the form for creating a new RelacionColegio.
     *
     * @return Response
     */
    public function create()
    {
        return view('relacion_colegios.create');
    }

    /**
     * Store a newly created RelacionColegio in storage.
     *
     * @param CreateRelacionColegioRequest $request
     *
     * @return Response
     */
    public function store(CreateRelacionColegioRequest $request)
    {
        $input = $request->all();

        $relacionColegio = $this->relacionColegioRepository->create($input);

        Flash::success('Relacion Colegio saved successfully.');

        return redirect(route('relacionColegios.index'));
    }

    /**
     * Display the specified RelacionColegio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relacionColegio = $this->relacionColegioRepository->find($id);

        if (empty($relacionColegio)) {
            Flash::error('Relacion Colegio not found');

            return redirect(route('relacionColegios.index'));
        }

        return view('relacion_colegios.show')->with('relacionColegio', $relacionColegio);
    }

    /**
     * Show the form for editing the specified RelacionColegio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relacionColegio = $this->relacionColegioRepository->find($id);

        if (empty($relacionColegio)) {
            Flash::error('Relacion Colegio not found');

            return redirect(route('relacionColegios.index'));
        }

        return view('relacion_colegios.edit')->with('relacionColegio', $relacionColegio);
    }

    /**
     * Update the specified RelacionColegio in storage.
     *
     * @param int $id
     * @param UpdateRelacionColegioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelacionColegioRequest $request)
    {
        $relacionColegio = $this->relacionColegioRepository->find($id);

        if (empty($relacionColegio)) {
            Flash::error('Relacion Colegio not found');

            return redirect(route('relacionColegios.index'));
        }

        $relacionColegio = $this->relacionColegioRepository->update($request->all(), $id);

        Flash::success('Relacion Colegio updated successfully.');

        return redirect(route('relacionColegios.index'));
    }

    /**
     * Remove the specified RelacionColegio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relacionColegio = $this->relacionColegioRepository->find($id);

        if (empty($relacionColegio)) {
            Flash::error('Relacion Colegio not found');

            return redirect(route('relacionColegios.index'));
        }

        $this->relacionColegioRepository->delete($id);

        Flash::success('Relacion Colegio deleted successfully.');

        return redirect(route('relacionColegios.index'));
    }
}
