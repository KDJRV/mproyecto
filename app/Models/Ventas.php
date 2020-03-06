<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Ventas
 * @package App\Models
 * @version March 5, 2020, 11:43 pm UTC
 *
 * @property \App\Models\Prueba prueba
 * @property \Illuminate\Database\Eloquent\Collection productos
 * @property \Illuminate\Database\Eloquent\Collection servicios
 * @property integer id_p
 * @property integer id_producto
 * @property integer id_servicio
 */
class Ventas extends Model
{

    public $table = 'ventas';
    



    public $fillable = [
        'id_p',
        'id_producto',
        'id_servicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_v' => 'integer',
        'id_p' => 'integer',
        'id_producto' => 'integer',
        'id_servicio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function prueba()
    {
        return $this->hasOne(\App\Models\Prueba::class, 'id_p', 'id_p');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productos()
    {
        return $this->hasMany(\App\Models\Productos::class, 'id_producto', 'id_producto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicios::class, 'id_servicio', 'id_servicio');
    }
}
