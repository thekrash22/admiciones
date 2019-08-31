<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hermanos
 * @package App\Models
 * @version August 31, 2019, 7:00 am UTC
 *
 * @property string aspirantes_id
 * @property string primer_nombre
 * @property string segundo_nombre
 * @property string primer_apellido
 * @property string segundo_apellido
 * @property string grado
 */
class Hermanos extends Model
{
    use SoftDeletes;

    public $table = 'hermanos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'aspirantes_id',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'grado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aspirantes_id' => 'string',
        'primer_nombre' => 'string',
        'segundo_nombre' => 'string',
        'primer_apellido' => 'string',
        'segundo_apellido' => 'string',
        'grado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
