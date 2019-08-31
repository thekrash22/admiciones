<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateHistoriaAcademicaAPIRequest;
use App\Http\Requests\API\UpdateHistoriaAcademicaAPIRequest;
use App\Models\HistoriaAcademica;
use App\Repositories\HistoriaAcademicaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class HistoriaAcademicaController
 * @package App\Http\Controllers\API
 */

class HistoriaAcademicaAPIController extends AppBaseController
{
    /** @var  HistoriaAcademicaRepository */
    private $historiaAcademicaRepository;

    public function __construct(HistoriaAcademicaRepository $historiaAcademicaRepo)
    {
        $this->historiaAcademicaRepository = $historiaAcademicaRepo;
    }

    /**
     * Display a listing of the HistoriaAcademica.
     * GET|HEAD /historiaAcademicas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $historiaAcademicas = $this->historiaAcademicaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($historiaAcademicas->toArray(), 'Historia Academicas retrieved successfully');
    }

    /**
     * Store a newly created HistoriaAcademica in storage.
     * POST /historiaAcademicas
     *
     * @param CreateHistoriaAcademicaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateHistoriaAcademicaAPIRequest $request)
    {
        $input = $request->all();

        $historiaAcademica = $this->historiaAcademicaRepository->create($input);

        return $this->sendResponse($historiaAcademica->toArray(), 'Historia Academica saved successfully');
    }

    /**
     * Display the specified HistoriaAcademica.
     * GET|HEAD /historiaAcademicas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var HistoriaAcademica $historiaAcademica */
        $historiaAcademica = $this->historiaAcademicaRepository->find($id);

        if (empty($historiaAcademica)) {
            return $this->sendError('Historia Academica not found');
        }

        return $this->sendResponse($historiaAcademica->toArray(), 'Historia Academica retrieved successfully');
    }

    /**
     * Update the specified HistoriaAcademica in storage.
     * PUT/PATCH /historiaAcademicas/{id}
     *
     * @param int $id
     * @param UpdateHistoriaAcademicaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHistoriaAcademicaAPIRequest $request)
    {
        $input = $request->all();

        /** @var HistoriaAcademica $historiaAcademica */
        $historiaAcademica = $this->historiaAcademicaRepository->find($id);

        if (empty($historiaAcademica)) {
            return $this->sendError('Historia Academica not found');
        }

        $historiaAcademica = $this->historiaAcademicaRepository->update($input, $id);

        return $this->sendResponse($historiaAcademica->toArray(), 'HistoriaAcademica updated successfully');
    }

    /**
     * Remove the specified HistoriaAcademica from storage.
     * DELETE /historiaAcademicas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var HistoriaAcademica $historiaAcademica */
        $historiaAcademica = $this->historiaAcademicaRepository->find($id);

        if (empty($historiaAcademica)) {
            return $this->sendError('Historia Academica not found');
        }

        $historiaAcademica->delete();

        return $this->sendResponse($id, 'Historia Academica deleted successfully');
    }
}
