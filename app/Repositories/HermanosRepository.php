<?php

namespace App\Repositories;

use App\Models\Hermanos;
use App\Repositories\BaseRepository;

/**
 * Class HermanosRepository
 * @package App\Repositories
 * @version August 31, 2019, 7:00 am UTC
*/

class HermanosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aspirantes_id',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'grado'
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
        return Hermanos::class;
    }
}
