<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAspirantesRequest;
use App\Http\Requests\UpdateAspirantesRequest;
use App\Repositories\AspirantesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AspirantesController extends AppBaseController
{
    /** @var  AspirantesRepository */
    private $aspirantesRepository;

    public function __construct(AspirantesRepository $aspirantesRepo)
    {
        $this->aspirantesRepository = $aspirantesRepo;
    }

    /**
     * Display a listing of the Aspirantes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $aspirantes = $this->aspirantesRepository->paginate(10);

        return view('aspirantes.index')
            ->with('aspirantes', $aspirantes);
    }

    /**
     * Show the form for creating a new Aspirantes.
     *
     * @return Response
     */
    public function create()
    {
        return view('aspirantes.create');
    }

    /**
     * Store a newly created Aspirantes in storage.
     *
     * @param CreateAspirantesRequest $request
     *
     * @return Response
     */
    public function store(CreateAspirantesRequest $request)
    {
        $input = $request->all();

        $aspirantes = $this->aspirantesRepository->create($input);

        Flash::success('Aspirantes saved successfully.');

        return redirect(route('aspirantes.index'));
    }

    /**
     * Display the specified Aspirantes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aspirantes = $this->aspirantesRepository->find($id);

        if (empty($aspirantes)) {
            Flash::error('Aspirantes not found');

            return redirect(route('aspirantes.index'));
        }

        return view('aspirantes.show')->with('aspirantes', $aspirantes);
    }

    /**
     * Show the form for editing the specified Aspirantes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aspirantes = $this->aspirantesRepository->find($id);

        if (empty($aspirantes)) {
            Flash::error('Aspirantes not found');

            return redirect(route('aspirantes.index'));
        }

        return view('aspirantes.edit')->with('aspirantes', $aspirantes);
    }

    /**
     * Update the specified Aspirantes in storage.
     *
     * @param int $id
     * @param UpdateAspirantesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAspirantesRequest $request)
    {
        $aspirantes = $this->aspirantesRepository->find($id);

        if (empty($aspirantes)) {
            Flash::error('Aspirantes not found');

            return redirect(route('aspirantes.index'));
        }

        $aspirantes = $this->aspirantesRepository->update($request->all(), $id);

        Flash::success('Aspirantes updated successfully.');

        return redirect(route('aspirantes.index'));
    }

    /**
     * Remove the specified Aspirantes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aspirantes = $this->aspirantesRepository->find($id);

        if (empty($aspirantes)) {
            Flash::error('Aspirantes not found');

            return redirect(route('aspirantes.index'));
        }

        $this->aspirantesRepository->delete($id);

        Flash::success('Aspirantes deleted successfully.');

        return redirect(route('aspirantes.index'));
    }



   
    public function ad()
    {
        $aspirantes = $this->aspirantesRepository->find(10);
        //dd($aspirantes->persona);
        //dd($aspirantes->padres[0]->personas);
        //dd($aspirantes->padres[1]->personas->primer_nombre);
        //dd($aspirantes->religion);
        //dd($aspirantes->persona->lugar_nacimiento);
        dd($aspirantes->persona->lugar_nacimiento);
        //dd($aspirantes->persona->tipo_documento);
        //dd($aspirantes->estrato);
    }

    

  



}
