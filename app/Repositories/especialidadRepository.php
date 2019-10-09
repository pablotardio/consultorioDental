<?php

namespace App\Repositories;

use App\Models\especialidad;
use App\Repositories\BaseRepository;

/**
 * Class especialidadRepository
 * @package App\Repositories
 * @version October 8, 2019, 5:14 am UTC
*/

class especialidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
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
        return especialidad::class;
    }
}
