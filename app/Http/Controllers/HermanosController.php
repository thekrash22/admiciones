<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHermanosRequest;
use App\Http\Requests\UpdateHermanosRequest;
use App\Repositories\HermanosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HermanosController extends AppBaseController
{
    /** @var  HermanosRepository */
    private $hermanosRepository;

    public function __construct(HermanosRepository $hermanosRepo)
    {
        $this->hermanosRepository = $hermanosRepo;
    }

    /**
     * Display a listing of the Hermanos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hermanos = $this->hermanosRepository->paginate(10);

        return view('hermanos.index')
            ->with('hermanos', $hermanos);
    }

    /**
     * Show the form for creating a new Hermanos.
     *
     * @return Response
     */
    public function create()
    {
        return view('hermanos.create');
    }

    /**
     * Store a newly created Hermanos in storage.
     *
     * @param CreateHermanosRequest $request
     *
     * @return Response
     */
    public function store(CreateHermanosRequest $request)
    {
        $input = $request->all();

        $hermanos = $this->hermanosRepository->create($input);

        Flash::success('Hermanos saved successfully.');

        return redirect(route('hermanos.index'));
    }

    /**
     * Display the specified Hermanos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hermanos = $this->hermanosRepository->find($id);

        if (empty($hermanos)) {
            Flash::error('Hermanos not found');

            return redirect(route('hermanos.index'));
        }

        return view('hermanos.show')->with('hermanos', $hermanos);
    }

    /**
     * Show the form for editing the specified Hermanos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hermanos = $this->hermanosRepository->find($id);

        if (empty($hermanos)) {
            Flash::error('Hermanos not found');

            return redirect(route('hermanos.index'));
        }

        return view('hermanos.edit')->with('hermanos', $hermanos);
    }

    /**
     * Update the specified Hermanos in storage.
     *
     * @param int $id
     * @param UpdateHermanosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHermanosRequest $request)
    {
        $hermanos = $this->hermanosRepository->find($id);

        if (empty($hermanos)) {
            Flash::error('Hermanos not found');

            return redirect(route('hermanos.index'));
        }

        $hermanos = $this->hermanosRepository->update($request->all(), $id);

        Flash::success('Hermanos updated successfully.');

        return redirect(route('hermanos.index'));
    }

    /**
     * Remove the specified Hermanos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hermanos = $this->hermanosRepository->find($id);

        if (empty($hermanos)) {
            Flash::error('Hermanos not found');

            return redirect(route('hermanos.index'));
        }

        $this->hermanosRepository->delete($id);

        Flash::success('Hermanos deleted successfully.');

        return redirect(route('hermanos.index'));
    }
}
