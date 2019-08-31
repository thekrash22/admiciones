<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateHermanosAPIRequest;
use App\Http\Requests\API\UpdateHermanosAPIRequest;
use App\Models\Hermanos;
use App\Repositories\HermanosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class HermanosController
 * @package App\Http\Controllers\API
 */

class HermanosAPIController extends AppBaseController
{
    /** @var  HermanosRepository */
    private $hermanosRepository;

    public function __construct(HermanosRepository $hermanosRepo)
    {
        $this->hermanosRepository = $hermanosRepo;
    }

    /**
     * Display a listing of the Hermanos.
     * GET|HEAD /hermanos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $hermanos = $this->hermanosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($hermanos->toArray(), 'Hermanos retrieved successfully');
    }

    /**
     * Store a newly created Hermanos in storage.
     * POST /hermanos
     *
     * @param CreateHermanosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateHermanosAPIRequest $request)
    {
        $input = $request->all();

        $hermanos = $this->hermanosRepository->create($input);

        return $this->sendResponse($hermanos->toArray(), 'Hermanos saved successfully');
    }

    /**
     * Display the specified Hermanos.
     * GET|HEAD /hermanos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Hermanos $hermanos */
        $hermanos = $this->hermanosRepository->find($id);

        if (empty($hermanos)) {
            return $this->sendError('Hermanos not found');
        }

        return $this->sendResponse($hermanos->toArray(), 'Hermanos retrieved successfully');
    }

    /**
     * Update the specified Hermanos in storage.
     * PUT/PATCH /hermanos/{id}
     *
     * @param int $id
     * @param UpdateHermanosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHermanosAPIRequest $request)
    {
        $input = $request->all();

        /** @var Hermanos $hermanos */
        $hermanos = $this->hermanosRepository->find($id);

        if (empty($hermanos)) {
            return $this->sendError('Hermanos not found');
        }

        $hermanos = $this->hermanosRepository->update($input, $id);

        return $this->sendResponse($hermanos->toArray(), 'Hermanos updated successfully');
    }

    /**
     * Remove the specified Hermanos from storage.
     * DELETE /hermanos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Hermanos $hermanos */
        $hermanos = $this->hermanosRepository->find($id);

        if (empty($hermanos)) {
            return $this->sendError('Hermanos not found');
        }

        $hermanos->delete();

        return $this->sendResponse($id, 'Hermanos deleted successfully');
    }
}
