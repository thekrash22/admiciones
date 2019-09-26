<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Aspirantes
 * @package App\Models
 * @version August 31, 2019, 6:57 am UTC
 *
 * @property integer personas_id
 * @property string grado
 * @property string numero_formulario
 * @property string fecha_inscripcion
 * @property string direccion
 * @property string barrio
 * @property string telefono
 * @property string municipio
 * @property string zona
 * @property string estrato
 * @property string eps
 * @property string Foto
 * @property string reponsable
 * @property string religion
 * @property string observacion
 */
class Aspirantes extends Model
{
    use SoftDeletes;

    public $table = 'aspirantes';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
        'observacion',
        'contacto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'personas_id' => 'integer',
        'grado' => 'string',
        'numero_formulario' => 'string',
        'fecha_inscripcion' => 'date',
        'direccion' => 'string',
        'barrio' => 'string',
        'telefono' => 'string',
        'municipio' => 'string',
        'zona' => 'string',
        'estrato' => 'string',
        'eps' => 'string',
        'Foto' => 'string',
        'reponsable' => 'string',
        'religion' => 'string',
        'observacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public function persona()
    {
        return $this->belongsTo('App\Models\Personas','personas_id','id');
    }
    public function padres()
    {
        return $this->hasMany('App\Models\Padres','aspirantes_id','id');
    }
    public  function hermanos()
    {
        return $this->hasMany('App\Models\Hermanos','aspirantes_id','id');
    }
    public function documentos()
    {
        return $this->hasMany('App\Models\Hermanos','aspirantes_id','id');
    }
    public function docs()
    {
        return $this->hasMany('App\Models\DocumentosIncripcion','aspirantes_id','id');
    }

    public function zoru()
    {
        switch ($this->zona) {
            case 'Rural' :
                $respuesta = 'X';
                break;
            case 'Urbana' :
                $respuesta = ''; 
                break;

               
        }
        return $respuesta;
    }
    public function zour()
    {
        switch ($this->zona) {
            case 'Rural' :
                $respuesta = '';
                break;
            case 'Urbana' :
                $respuesta = 'X'; 
                break;

               
        }
        return $respuesta;
    }
    public function formulario()
    {
        if($this->id<100){
            return 'SI';
        }else{
            return 'NO';
        }
    }
    
}
