<?php

namespace App\Repositories;

use App\Models\Padres;
use App\Repositories\BaseRepository;

/**
 * Class PadresRepository
 * @package App\Repositories
 * @version August 31, 2019, 6:42 am UTC
*/

class PadresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'personas_id',
        'direccion',
        'barrio',
        'telefono',
        'celular',
        'correo',
        'profesion',
        'nombre_empresa',
        'telefono_empresa',
        'direccion_empresa',
        'es_acudiente'
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
        return Padres::class;
    }
}
