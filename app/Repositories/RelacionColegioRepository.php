<?php

namespace App\Repositories;

use App\Models\RelacionColegio;
use App\Repositories\BaseRepository;

/**
 * Class RelacionColegioRepository
 * @package App\Repositories
 * @version August 31, 2019, 7:13 am UTC
*/

class RelacionColegioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'historia_academicas_id',
        'grado',
        'ano',
        'nombre_colegios',
        'ciudad',
        'motivo_retiro',
        'tipo_intitucion'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelacionColegio::class;
    }
}
