<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class recepcionista
 * @package App\Models
 * @version October 8, 2019, 6:02 am UTC
 *
 * @property integer ci
 * @property string nombre
 * @property string apellido_paterno
 * @property string apellido_materno
 * @property string correo
 * @property string direccion
 * @property integer telefono
 */
class recepcionista extends Model
{
    use SoftDeletes;

    public $table = 'recepcionistas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ci',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'direccion',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ci' => 'integer',
        'nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'correo' => 'string',
        'direccion' => 'string',
        'telefono' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ci' => 'required',
        'nombre' => 'required',
        'apellido_paterno' => 'required',
        'apellido_materno' => 'required'
    ];

    
}
