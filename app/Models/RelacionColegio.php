<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RelacionColegio
 * @package App\Models
 * @version August 31, 2019, 7:13 am UTC
 *
 * @property integer historia_academicas_id
 * @property string grado
 * @property string ano
 * @property string nombre_colegios
 * @property string ciudad
 * @property string motivo_retiro
 * @property string tipo_intitucion
 */
class RelacionColegio extends Model
{
    use SoftDeletes;

    public $table = 'relacion_colegios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'historia_academicas_id',
        'grado',
        'ano',
        'nombre_colegios',
        'ciudad',
        'motivo_retiro',
        'tipo_intitucion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'historia_academicas_id' => 'integer',
        'grado' => 'string',
        'ano' => 'string',
        'nombre_colegios' => 'string',
        'ciudad' => 'string',
        'motivo_retiro' => 'string',
        'tipo_intitucion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function historiaAcademica()
    {
        return $this->belongsTo('App\Models\HistoriaAcademica','historia_academicas_id','id');
    }

    
}
