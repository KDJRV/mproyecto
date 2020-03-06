<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Prueba
 * @package App\Models
 * @version March 5, 2020, 8:53 pm UTC
 *
 * @property string nombre
 * @property string direccion
 */
class Prueba extends Model
{

    public $table = 'prueba';
    



    public $fillable = [
        'nombre',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_p' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
