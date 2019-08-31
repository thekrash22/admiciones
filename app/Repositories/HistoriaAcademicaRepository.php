<?php

namespace App\Repositories;

use App\Models\HistoriaAcademica;
use App\Repositories\BaseRepository;

/**
 * Class HistoriaAcademicaRepository
 * @package App\Repositories
 * @version August 31, 2019, 7:08 am UTC
*/

class HistoriaAcademicaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aspirantes_id',
        'colegio_procedencia',
        'grados_repetidos'
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
        return HistoriaAcademica::class;
    }
}
