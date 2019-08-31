<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAspirantesAPIRequest;
use App\Http\Requests\API\UpdateAspirantesAPIRequest;
use App\Models\Aspirantes;
use App\Repositories\AspirantesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AspirantesController
 * @package App\Http\Controllers\API
 */

class AspirantesAPIController extends AppBaseController
{
    /** @var  AspirantesRepository */
    private $aspirantesRepository;

    public function __construct(AspirantesRepository $aspirantesRepo)
    {
        $this->aspirantesRepository = $aspirantesRepo;
    }

    /**
     * Display a listing of the Aspirantes.
     * GET|HEAD /aspirantes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $aspirantes = $this->aspirantesRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($aspirantes->toArray(), 'Aspirantes retrieved successfully');
    }

    /**
     * Store a newly created Aspirantes in storage.
     * POST /aspirantes
     *
     * @param CreateAspirantesAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAspirantesAPIRequest $request)
    {
        $input = $request->all();

        $aspirantes = $this->aspirantesRepository->create($input);

        return $this->sendResponse($aspirantes->toArray(), 'Aspirantes saved successfully');
    }

    /**
     * Display the specified Aspirantes.
     * GET|HEAD /aspirantes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Aspirantes $aspirantes */
        $aspirantes = $this->aspirantesRepository->find($id);

        if (empty($aspirantes)) {
            return $this->sendError('Aspirantes not found');
        }

        return $this->sendResponse($aspirantes->toArray(), 'Aspirantes retrieved successfully');
    }

    /**
     * Update the specified Aspirantes in storage.
     * PUT/PATCH /aspirantes/{id}
     *
     * @param int $id
     * @param UpdateAspirantesAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAspirantesAPIRequest $request)
    {
        $input = $request->all();

        /** @var Aspirantes $aspirantes */
        $aspirantes = $this->aspirantesRepository->find($id);

        if (empty($aspirantes)) {
            return $this->sendError('Aspirantes not found');
        }

        $aspirantes = $this->aspirantesRepository->update($input, $id);

        return $this->sendResponse($aspirantes->toArray(), 'Aspirantes updated successfully');
    }

    /**
     * Remove the specified Aspirantes from storage.
     * DELETE /aspirantes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Aspirantes $aspirantes */
        $aspirantes = $this->aspirantesRepository->find($id);

        if (empty($aspirantes)) {
            return $this->sendError('Aspirantes not found');
        }

        $aspirantes->delete();

        return $this->sendResponse($id, 'Aspirantes deleted successfully');
    }
}
