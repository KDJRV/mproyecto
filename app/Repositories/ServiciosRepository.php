<?php

namespace App\Repositories;

use App\Models\Servicios;
use App\Repositories\BaseRepository;

/**
 * Class ServiciosRepository
 * @package App\Repositories
 * @version March 5, 2020, 11:31 pm UTC
*/

class ServiciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'precio'
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
        return Servicios::class;
    }
}
