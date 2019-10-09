<?php

namespace App\Repositories;

use App\Models\paciente;
use App\Repositories\BaseRepository;

/**
 * Class pacienteRepository
 * @package App\Repositories
 * @version October 8, 2019, 5:44 am UTC
*/

class pacienteRepository extends BaseRepository
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
        return paciente::class;
    }
}
