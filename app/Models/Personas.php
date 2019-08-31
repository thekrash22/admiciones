<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Personas
 * @package App\Models
 * @version August 31, 2019, 6:09 am UTC
 *
 * @property string primer_nombre
 * @property string segundo_nombre
 * @property string primer_apellido
 * @property string segundo_apellido
 * @property string tipo_documento
 * @property string numero_documento
 * @property string lugar_expedicion_documento
 * @property string fecha_nacimiento
 * @property string lugar_nacimiento
 */
class Personas extends Model
{
    use SoftDeletes;

    public $table = 'personas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'primer_nombre' => 'string',
        'segundo_nombre' => 'string',
        'primer_apellido' => 'string',
        'segundo_apellido' => 'string',
        'tipo_documento' => 'string',
        'numero_documento' => 'string',
        'lugar_expedicion_documento' => 'string',
        'fecha_nacimiento' => 'date',
        'lugar_nacimiento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
