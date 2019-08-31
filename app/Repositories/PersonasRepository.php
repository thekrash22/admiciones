<?php

namespace App\Repositories;

use App\Models\Personas;
use App\Repositories\BaseRepository;

/**
 * Class PersonasRepository
 * @package App\Repositories
 * @version August 31, 2019, 6:09 am UTC
*/

class PersonasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'tipo_documento',
        'numero_documento',
        'lugar_expedicion_documento',
        'fecha_nacimiento',
        'lugar_nacimiento'
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
        return Personas::class;
    }
}
