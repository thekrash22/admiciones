<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HistoriaAcademica
 * @package App\Models
 * @version August 31, 2019, 7:08 am UTC
 *
 * @property integer aspirantes_id
 * @property string colegio_procedencia
 * @property string grados_repetidos
 */
class HistoriaAcademica extends Model
{
    use SoftDeletes;

    public $table = 'historia_academicas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'aspirantes_id',
        'colegio_procedencia',
        'grados_repetidos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aspirantes_id' => 'integer',
        'colegio_procedencia' => 'string',
        'grados_repetidos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
