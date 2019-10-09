<?php

namespace App\Repositories;

use App\Models\horario;
use App\Repositories\BaseRepository;

/**
 * Class horarioRepository
 * @package App\Repositories
 * @version October 8, 2019, 7:50 am UTC
*/

class horarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dia',
        'hora_inicio',
        'hora_fin'
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
        return horario::class;
    }
}
