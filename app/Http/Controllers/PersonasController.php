<?php

namespace App\Http\Controllers;

use App\DataTables\PersonasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePersonasRequest;
use App\Http\Requests\UpdatePersonasRequest;
use App\Repositories\PersonasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Mail;


class PersonasController extends AppBaseController
{
    /** @var  PersonasRepository */
    private $personasRepository;

    public function __construct(PersonasRepository $personasRepo)
    {
        $this->personasRepository = $personasRepo;
    }

    /**
     * Display a listing of the Personas.
     *
     * @param PersonasDataTable $personasDataTable
     * @return Response
     */
    public function index(PersonasDataTable $personasDataTable)
    {
        return $personasDataTable->render('personas.index');
    }

    /**
     * Show the form for creating a new Personas.
     *
     * @return Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created Personas in storage.
     *
     * @param CreatePersonasRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonasRequest $request)
    {
        $input = $request->all();

        $personas = $this->personasRepository->create($input);

        Flash::success('Personas saved successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Display the specified Personas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personas = $this->personasRepository->find($id);

        if (empty($personas)) {
            Flash::error('Personas not found');

            return redirect(route('personas.index'));
        }

        return view('personas.show')->with('personas', $personas);
    }

    /**
     * Show the form for editing the specified Personas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $personas = $this->personasRepository->find($id);

        if (empty($personas)) {
            Flash::error('Personas not found');

            return redirect(route('personas.index'));
        }

        return view('personas.edit')->with('personas', $personas);
    }

    /**
     * Update the specified Personas in storage.
     *
     * @param  int              $id
     * @param UpdatePersonasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonasRequest $request)
    {
        $personas = $this->personasRepository->find($id);

        if (empty($personas)) {
            Flash::error('Personas not found');

            return redirect(route('personas.index'));
        }

        $personas = $this->personasRepository->update($request->all(), $id);

        Flash::success('Personas updated successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Remove the specified Personas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $personas = $this->personasRepository->find($id);

        if (empty($personas)) {
            Flash::error('Personas not found');

            return redirect(route('personas.index'));
        }

        $this->personasRepository->delete($id);

        Flash::success('Personas deleted successfully.');

        return redirect(route('personas.index'));
    }
    public function correo()
    {
        $to_name = 'Oswaldo Gonzalez';
        $to_email = 'thekrash22@gmail.com';
        $data = array('name'=>"Oswaldo Gonzalez", "body" => "A test mail");
        /*Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Laravel Test Mail');
            $message->from('formulario@institutolamilagrosa.com','Test Mail');
        });*/
       $user ='thekrash22@gmail.com';
        Mail::send('emails.mail', $data, function ($message) use ($user){

            $message->subject('Continuación proceso admisiones.');
            $message->to('thekrash22@gmail.com');
            //$message->cc('jcanas@institutolamilagrosa.com');

        });

    }
}
