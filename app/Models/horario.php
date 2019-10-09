<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class horario
 * @package App\Models
 * @version October 8, 2019, 7:50 am UTC
 *
 * @property string dia
 * @property string hora_inicio
 * @property string hora_fin
 */
class horario extends Model
{
    use SoftDeletes;

    public $table = 'horarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'dia',
        'hora_inicio',
        'hora_fin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dia' => 'string',
        'hora_inicio' => 'string',
        'hora_fin' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dia' => 'required',
        'hora_inicio' => 'required',
        'hora_fin' => 'required'
    ];

    
}
