<?php

namespace App\Repositories;

use App\Models\odontologo;
use App\Repositories\BaseRepository;

/**
 * Class odontologoRepository
 * @package App\Repositories
 * @version October 8, 2019, 6:46 am UTC
*/

class odontologoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'direccion'
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
        return odontologo::class;
    }
}
