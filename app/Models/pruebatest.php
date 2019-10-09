<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pruebatest
 * @package App\Models
 * @version October 8, 2019, 6:36 am UTC
 *
 * @property integer llave
 */
class pruebatest extends Model
{
    use SoftDeletes;

    public $table = 'pruebatests';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'llave'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'llave' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
