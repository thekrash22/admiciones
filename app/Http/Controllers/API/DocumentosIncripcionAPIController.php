<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDocumentosIncripcionAPIRequest;
use App\Http\Requests\API\UpdateDocumentosIncripcionAPIRequest;
use App\Models\DocumentosIncripcion;
use App\Repositories\DocumentosIncripcionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DocumentosIncripcionController
 * @package App\Http\Controllers\API
 */

class DocumentosIncripcionAPIController extends AppBaseController
{
    /** @var  DocumentosIncripcionRepository */
    private $documentosIncripcionRepository;

    public function __construct(DocumentosIncripcionRepository $documentosIncripcionRepo)
    {
        $this->documentosIncripcionRepository = $documentosIncripcionRepo;
    }

    /**
     * Display a listing of the DocumentosIncripcion.
     * GET|HEAD /documentosIncripcions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $documentosIncripcions = $this->documentosIncripcionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($documentosIncripcions->toArray(), 'Documentos Incripcions retrieved successfully');
    }

    /**
     * Store a newly created DocumentosIncripcion in storage.
     * POST /documentosIncripcions
     *
     * @param CreateDocumentosIncripcionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentosIncripcionAPIRequest $request)
    {
        $input = $request->all();

        $documentosIncripcion = $this->documentosIncripcionRepository->create($input);

        return $this->sendResponse($documentosIncripcion->toArray(), 'Documentos Incripcion saved successfully');
    }

    /**
     * Display the specified DocumentosIncripcion.
     * GET|HEAD /documentosIncripcions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var DocumentosIncripcion $documentosIncripcion */
        $documentosIncripcion = $this->documentosIncripcionRepository->find($id);

        if (empty($documentosIncripcion)) {
            return $this->sendError('Documentos Incripcion not found');
        }

        return $this->sendResponse($documentosIncripcion->toArray(), 'Documentos Incripcion retrieved successfully');
    }

    /**
     * Update the specified DocumentosIncripcion in storage.
     * PUT/PATCH /documentosIncripcions/{id}
     *
     * @param int $id
     * @param UpdateDocumentosIncripcionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentosIncripcionAPIRequest $request)
    {
        $input = $request->all();

        /** @var DocumentosIncripcion $documentosIncripcion */
        $documentosIncripcion = $this->documentosIncripcionRepository->find($id);

        if (empty($documentosIncripcion)) {
            return $this->sendError('Documentos Incripcion not found');
        }

        $documentosIncripcion = $this->documentosIncripcionRepository->update($input, $id);

        return $this->sendResponse($documentosIncripcion->toArray(), 'DocumentosIncripcion updated successfully');
    }

    /**
     * Remove the specified DocumentosIncripcion from storage.
     * DELETE /documentosIncripcions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var DocumentosIncripcion $documentosIncripcion */
        $documentosIncripcion = $this->documentosIncripcionRepository->find($id);

        if (empty($documentosIncripcion)) {
            return $this->sendError('Documentos Incripcion not found');
        }

        $documentosIncripcion->delete();

        return $this->sendResponse($id, 'Documentos Incripcion deleted successfully');
    }
}
