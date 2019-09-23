<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DocumentosIncripcion
 * @package App\Models
 * @version September 21, 2019, 6:45 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection ids
 * @property string solicitud_admision
 * @property string procedencia
 * @property string certificado_registro_civil
 * @property string informe_academico
 * @property string paz_salvo
 * @property string recibo_inscripcion
 * @property integer aspirantes_id
 */
class DocumentosIncripcion extends Model
{

    public $table = 'documentos_incripcions';
    


    public $fillable = [
        'solicitud_admision',
        'procedencia',
        'certificado_registro_civil',
        'informe_academico',
        'paz_salvo',
        'recibo_inscripcion',
        'aspirantes_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'solicitud_admision' => 'string',
        'procedencia' => 'string',
        'certificado_registro_civil' => 'string',
        'informe_academico' => 'string',
        'paz_salvo' => 'string',
        'recibo_inscripcion' => 'string',
        'aspirantes_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ids()
    {
        return $this->hasMany(\App\Models\Aspirantes::class, 'id', 'aspirantes_id');
    }
}
