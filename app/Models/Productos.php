<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Productos
 * @package App\Models
 * @version March 5, 2020, 10:34 pm UTC
 *
 * @property string descripcion
 * @property integer existencias
 */
class Productos extends Model
{

    public $table = 'productos';
    



    public $fillable = [
        'descripcion',
        'existencias'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_producto' => 'integer',
        'descripcion' => 'string',
        'existencias' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
