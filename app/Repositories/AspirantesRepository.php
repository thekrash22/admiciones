<?php

namespace App\Repositories;

use App\Models\Aspirantes;
use App\Repositories\BaseRepository;

/**
 * Class AspirantesRepository
 * @package App\Repositories
 * @version August 31, 2019, 6:57 am UTC
*/

class AspirantesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'personas_id',
        'grado',
        'numero_formulario',
        'fecha_inscripcion',
        'direccion',
        'barrio',
        'telefono',
        'municipio',
        'zona',
        'estrato',
        'eps',
        'Foto',
        'reponsable',
        'religion',
        'observacion'
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
        return Aspirantes::class;
    }
}
