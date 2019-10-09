<?php

namespace App\Repositories;

use App\Models\cita;
use App\Repositories\BaseRepository;

/**
 * Class citaRepository
 * @package App\Repositories
 * @version October 8, 2019, 8:00 am UTC
*/

class citaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'hora_inicio',
        'hora_fin',
        'Odontologo',
        'Paciente'
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
        return cita::class;
    }
}
