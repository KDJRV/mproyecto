<?php

namespace App\Repositories;

use App\Models\Ventas;
use App\Repositories\BaseRepository;

/**
 * Class VentasRepository
 * @package App\Repositories
 * @version March 5, 2020, 11:43 pm UTC
*/

class VentasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_p',
        'id_producto',
        'id_servicio'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ventas::class;
    }
}
