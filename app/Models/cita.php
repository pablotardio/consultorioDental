<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class cita
 * @package App\Models
 * @version October 8, 2019, 8:00 am UTC
 *
 * @property string fecha
 * @property string hora_inicio
 * @property string hora_fin
 * @property integer Odontologo
 * @property integer Paciente
 */
class cita extends Model
{
    use SoftDeletes;

    public $table = 'citas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha',
        'hora_inicio',
        'hora_fin',
        'Odontologo',
        'Paciente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'string',
        'hora_inicio' => 'string',
        'hora_fin' => 'string',
        'Odontologo' => 'integer',
        'Paciente' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha' => 'required',
        'hora_inicio' => 'required',
        'hora_fin' => 'required',
        'Odontologo' => 'required',
        'Paciente' => 'required'
    ];

    public function odontologo()
    {
        return $this->belongsTo('App\Models\odontologo','odontologo');
    }

    public function paciente()
    {
        return $this->belongsTo('App\Models\paciente','paciente');
    }
}
