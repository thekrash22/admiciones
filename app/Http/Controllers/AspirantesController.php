<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAspirantesRequest;
use App\Http\Requests\UpdateAspirantesRequest;
use App\Repositories\AspirantesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Padres;
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
        $aspirantes = $this->aspirantesRepository->find(7);
        //dd($aspirantes->persona);
        //dd($aspirantes->padres[0]->personas);
        //dd($aspirantes->padres[1]->personas->primer_nombre);
        //dd($aspirantes->religion);
        //dd($aspirantes->persona->lugar_nacimiento);
        //dd($aspirantes->persona->lugar_nacimiento);
        //dd($aspirantes->persona->tipo_documento);
        //dd($aspirantes->estrato);
        //dd($aspirantes->persona->primer_nombre);
        //dd($aspirantes->persona->fecha_nacimiento->format('d-m-Y'));
        //dd($aspirantes->persona->fecha_nacimiento->format('Y'));
        
        //$date = $carbon->createFromDate($aspirantes->persona->fecha_nacimiento->format('Y'),$aspirantes->persona->fecha_nacimiento->format('d'),$aspirantes->persona->fecha_nacimiento->format('m'))->age;
        /*$carbon = new \Carbon\Carbon();
        $date = $carbon->createFromDate($aspirantes->persona->fecha_nacimiento->format('d-m-Y'));
        dd($date);*/
        //Carbon::now();
        //dd($aspirantes->nformulario());
        //$date = Carbon::createFromDate(1970,19,12)->age; // 43
        //dd(date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)));
        //dd($aspirantes->persona->numero_documento);
        //dd($aspirantes->direccion);
        //dd($aspirantes->formulario());
        //dd($aspirantes->hermanos[0]->primer_nombre);
        //dd($aspirantes->hermanos;
        //dd($hermanos->hna());
        //dd($aspirantes->historia_academicas);
        //dd($aspirantes->acudientes());
        //dd($aspirantes->acudientes()->primer_nombre);
       // dd($aspirantes->padres->count());
       
        /*if ($aspirantes->padres->count() == 2)
        {
           // dd($aspirantes->padres);

           $papa_nuevo = new Padres();
           $aspirantes->padres->push($papa_nuevo);
           dd($aspirantes->padres);

       
        }
        */
        //dd($aspirantes->acudientes());
        //dd($aspirantes->zour());
        //dd($aspirantes->zoru());
        /*switch ($aspirantes->zona) {
            case 'Rural' :
                $respuesta = 'X';
                break;
            case 'Urbana' :
                $respuesta = ''; 
                break;
        }*/
        dd($aspirantes->historiaAcademica[0]->relacionColegios);

    }
}
