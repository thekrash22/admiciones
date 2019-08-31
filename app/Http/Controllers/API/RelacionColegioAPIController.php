<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRelacionColegioAPIRequest;
use App\Http\Requests\API\UpdateRelacionColegioAPIRequest;
use App\Models\RelacionColegio;
use App\Repositories\RelacionColegioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class RelacionColegioController
 * @package App\Http\Controllers\API
 */

class RelacionColegioAPIController extends AppBaseController
{
    /** @var  RelacionColegioRepository */
    private $relacionColegioRepository;

    public function __construct(RelacionColegioRepository $relacionColegioRepo)
    {
        $this->relacionColegioRepository = $relacionColegioRepo;
    }

    /**
     * Display a listing of the RelacionColegio.
     * GET|HEAD /relacionColegios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $relacionColegios = $this->relacionColegioRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($relacionColegios->toArray(), 'Relacion Colegios retrieved successfully');
    }

    /**
     * Store a newly created RelacionColegio in storage.
     * POST /relacionColegios
     *
     * @param CreateRelacionColegioAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRelacionColegioAPIRequest $request)
    {
        $input = $request->all();

        $relacionColegio = $this->relacionColegioRepository->create($input);

        return $this->sendResponse($relacionColegio->toArray(), 'Relacion Colegio saved successfully');
    }

    /**
     * Display the specified RelacionColegio.
     * GET|HEAD /relacionColegios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var RelacionColegio $relacionColegio */
        $relacionColegio = $this->relacionColegioRepository->find($id);

        if (empty($relacionColegio)) {
            return $this->sendError('Relacion Colegio not found');
        }

        return $this->sendResponse($relacionColegio->toArray(), 'Relacion Colegio retrieved successfully');
    }

    /**
     * Update the specified RelacionColegio in storage.
     * PUT/PATCH /relacionColegios/{id}
     *
     * @param int $id
     * @param UpdateRelacionColegioAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelacionColegioAPIRequest $request)
    {
        $input = $request->all();

        /** @var RelacionColegio $relacionColegio */
        $relacionColegio = $this->relacionColegioRepository->find($id);

        if (empty($relacionColegio)) {
            return $this->sendError('Relacion Colegio not found');
        }

        $relacionColegio = $this->relacionColegioRepository->update($input, $id);

        return $this->sendResponse($relacionColegio->toArray(), 'RelacionColegio updated successfully');
    }

    /**
     * Remove the specified RelacionColegio from storage.
     * DELETE /relacionColegios/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var RelacionColegio $relacionColegio */
        $relacionColegio = $this->relacionColegioRepository->find($id);

        if (empty($relacionColegio)) {
            return $this->sendError('Relacion Colegio not found');
        }

        $relacionColegio->delete();

        return $this->sendResponse($id, 'Relacion Colegio deleted successfully');
    }
}
