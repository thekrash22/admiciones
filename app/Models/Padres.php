<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Padres
 * @package App\Models
 * @version August 31, 2019, 6:42 am UTC
 *
 * @property integer personas_id
 * @property string direccion
 * @property string barrio
 * @property integer telefono
 * @property integer celular
 * @property string correo
 * @property string profesion
 * @property string nombre_empresa
 * @property integer telefono_empresa
 * @property string direccion_empresa
 * @property boolean es_acudiente
 */
class Padres extends Model
{
    use SoftDeletes;

    public $table = 'padres';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'personas_id' => 'integer',
        'direccion' => 'string',
        'barrio' => 'string',
        'telefono' => 'integer',
        'celular' => 'integer',
        'correo' => 'string',
        'profesion' => 'string',
        'nombre_empresa' => 'string',
        'telefono_empresa' => 'integer',
        'direccion_empresa' => 'string',
        'es_acudiente' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
