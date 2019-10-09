<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class odontologo
 * @package App\Models
 * @version October 8, 2019, 6:46 am UTC
 *
 * @property string nombre
 * @property string apellido_paterno
 * @property string apellido_materno
 * @property string correo
 * @property string direccion
 */
class odontologo extends Model
{
    use SoftDeletes;

    public $table = 'odontologos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'correo' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido_paterno' => 'required',
        'apellido_materno' => 'required',
        'correo' => 'email'
    ];

   public function citas()
   {
       return $this->hasMany('App\Models\cita');
   } 
}
