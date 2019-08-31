<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Documentos
 * @package App\Models
 * @version August 31, 2019, 7:21 am UTC
 *
 * @property integer aspirantes_id
 * @property string tarjeta_identidad
 * @property string costancia_comportamiento
 * @property string certificado_medico
 * @property string afiliacion_salud
 * @property string cedula_papas
 * @property string carnet_vacunacion
 * @property string examen_aud_vis
 * @property string paz_salvo
 * @property string informe_final
 * @property string certificado_notas
 * @property string simat
 */
class Documentos extends Model
{
    use SoftDeletes;

    public $table = 'documentos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aspirantes_id' => 'integer',
        'tarjeta_identidad' => 'string',
        'costancia_comportamiento' => 'string',
        'certificado_medico' => 'string',
        'afiliacion_salud' => 'string',
        'cedula_papas' => 'string',
        'carnet_vacunacion' => 'string',
        'examen_aud_vis' => 'string',
        'paz_salvo' => 'string',
        'informe_final' => 'string',
        'certificado_notas' => 'string',
        'simat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
