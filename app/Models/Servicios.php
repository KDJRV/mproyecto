<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Servicios
 * @package App\Models
 * @version March 5, 2020, 11:31 pm UTC
 *
 * @property string descripcion
 * @property string precio
 */
class Servicios extends Model
{

    public $table = 'servicios';
    



    public $fillable = [
        'descripcion',
        'precio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_servicio' => 'integer',
        'precio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
