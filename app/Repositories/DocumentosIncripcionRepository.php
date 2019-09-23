<?php

namespace App\Repositories;

use App\Models\DocumentosIncripcion;
use App\Repositories\BaseRepository;

/**
 * Class DocumentosIncripcionRepository
 * @package App\Repositories
 * @version September 21, 2019, 6:45 pm UTC
*/

class DocumentosIncripcionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'solicitud_admision',
        'procedencia',
        'certificado_registro_civil',
        'informe_academico',
        'paz_salvo',
        'recibo_inscripcion',
        'aspirantes_id'
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
        return DocumentosIncripcion::class;
    }
}
