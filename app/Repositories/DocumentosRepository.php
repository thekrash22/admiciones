<?php

namespace App\Repositories;

use App\Models\Documentos;
use App\Repositories\BaseRepository;

/**
 * Class DocumentosRepository
 * @package App\Repositories
 * @version August 31, 2019, 7:21 am UTC
*/

class DocumentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aspirantes_id',
        'tarjeta_identidad',
        'costancia_comportamiento',
        'certificado_medico',
        'afiliacion_salud',
        'cedula_papas',
        'carnet_vacunacion',
        'examen_aud_vis',
        'paz_salvo',
        'informe_final',
        'certificado_notas',
        'simat'
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
        return Documentos::class;
    }
}
