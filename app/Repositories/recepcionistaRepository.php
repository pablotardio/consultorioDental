<?php

namespace App\Repositories;

use App\Models\recepcionista;
use App\Repositories\BaseRepository;

/**
 * Class recepcionistaRepository
 * @package App\Repositories
 * @version October 8, 2019, 6:02 am UTC
*/

class recepcionistaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ci',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'direccion',
        'telefono'
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
        return recepcionista::class;
    }
}
