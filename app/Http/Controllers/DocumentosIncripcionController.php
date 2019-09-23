<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocumentosIncripcionRequest;
use App\Http\Requests\UpdateDocumentosIncripcionRequest;
use App\Repositories\DocumentosIncripcionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DocumentosIncripcionController extends AppBaseController
{
    /** @var  DocumentosIncripcionRepository */
    private $documentosIncripcionRepository;

    public function __construct(DocumentosIncripcionRepository $documentosIncripcionRepo)
    {
        $this->documentosIncripcionRepository = $documentosIncripcionRepo;
    }

    /**
     * Display a listing of the DocumentosIncripcion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $documentosIncripcions = $this->documentosIncripcionRepository->paginate(10);

        return view('documentos_incripcions.index')
            ->with('documentosIncripcions', $documentosIncripcions);
    }

    /**
     * Show the form for creating a new DocumentosIncripcion.
     *
     * @return Response
     */
    public function create()
    {
        return view('documentos_incripcions.create');
    }

    /**
     * Store a newly created DocumentosIncripcion in storage.
     *
     * @param CreateDocumentosIncripcionRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentosIncripcionRequest $request)
    {
        $input = $request->all();

        $documentosIncripcion = $this->documentosIncripcionRepository->create($input);

        Flash::success('Documentos Incripcion saved successfully.');

        return redirect(route('documentosIncripcions.index'));
    }

    /**
     * Display the specified DocumentosIncripcion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentosIncripcion = $this->documentosIncripcionRepository->find($id);

        if (empty($documentosIncripcion)) {
            Flash::error('Documentos Incripcion not found');

            return redirect(route('documentosIncripcions.index'));
        }

        return view('documentos_incripcions.show')->with('documentosIncripcion', $documentosIncripcion);
    }

    /**
     * Show the form for editing the specified DocumentosIncripcion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentosIncripcion = $this->documentosIncripcionRepository->find($id);

        if (empty($documentosIncripcion)) {
            Flash::error('Documentos Incripcion not found');

            return redirect(route('documentosIncripcions.index'));
        }

        return view('documentos_incripcions.edit')->with('documentosIncripcion', $documentosIncripcion);
    }

    /**
     * Update the specified DocumentosIncripcion in storage.
     *
     * @param int $id
     * @param UpdateDocumentosIncripcionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentosIncripcionRequest $request)
    {
        $documentosIncripcion = $this->documentosIncripcionRepository->find($id);

        if (empty($documentosIncripcion)) {
            Flash::error('Documentos Incripcion not found');

            return redirect(route('documentosIncripcions.index'));
        }

        $documentosIncripcion = $this->documentosIncripcionRepository->update($request->all(), $id);

        Flash::success('Documentos Incripcion updated successfully.');

        return redirect(route('documentosIncripcions.index'));
    }

    /**
     * Remove the specified DocumentosIncripcion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documentosIncripcion = $this->documentosIncripcionRepository->find($id);

        if (empty($documentosIncripcion)) {
            Flash::error('Documentos Incripcion not found');

            return redirect(route('documentosIncripcions.index'));
        }

        $this->documentosIncripcionRepository->delete($id);

        Flash::success('Documentos Incripcion deleted successfully.');

        return redirect(route('documentosIncripcions.index'));
    }
}
