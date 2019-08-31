<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDocumentosAPIRequest;
use App\Http\Requests\API\UpdateDocumentosAPIRequest;
use App\Models\Documentos;
use App\Repositories\DocumentosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DocumentosController
 * @package App\Http\Controllers\API
 */

class DocumentosAPIController extends AppBaseController
{
    /** @var  DocumentosRepository */
    private $documentosRepository;

    public function __construct(DocumentosRepository $documentosRepo)
    {
        $this->documentosRepository = $documentosRepo;
    }

    /**
     * Display a listing of the Documentos.
     * GET|HEAD /documentos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $documentos = $this->documentosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($documentos->toArray(), 'Documentos retrieved successfully');
    }

    /**
     * Store a newly created Documentos in storage.
     * POST /documentos
     *
     * @param CreateDocumentosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentosAPIRequest $request)
    {
        $input = $request->all();

        $documentos = $this->documentosRepository->create($input);

        return $this->sendResponse($documentos->toArray(), 'Documentos saved successfully');
    }

    /**
     * Display the specified Documentos.
     * GET|HEAD /documentos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Documentos $documentos */
        $documentos = $this->documentosRepository->find($id);

        if (empty($documentos)) {
            return $this->sendError('Documentos not found');
        }

        return $this->sendResponse($documentos->toArray(), 'Documentos retrieved successfully');
    }

    /**
     * Update the specified Documentos in storage.
     * PUT/PATCH /documentos/{id}
     *
     * @param int $id
     * @param UpdateDocumentosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentosAPIRequest $request)
    {
        $input = $request->all();

        /** @var Documentos $documentos */
        $documentos = $this->documentosRepository->find($id);

        if (empty($documentos)) {
            return $this->sendError('Documentos not found');
        }

        $documentos = $this->documentosRepository->update($input, $id);

        return $this->sendResponse($documentos->toArray(), 'Documentos updated successfully');
    }

    /**
     * Remove the specified Documentos from storage.
     * DELETE /documentos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Documentos $documentos */
        $documentos = $this->documentosRepository->find($id);

        if (empty($documentos)) {
            return $this->sendError('Documentos not found');
        }

        $documentos->delete();

        return $this->sendResponse($id, 'Documentos deleted successfully');
    }
}
