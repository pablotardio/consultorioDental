<?php

namespace App\Repositories;

use App\Models\pruebatest;
use App\Repositories\BaseRepository;

/**
 * Class pruebatestRepository
 * @package App\Repositories
 * @version October 8, 2019, 6:36 am UTC
*/

class pruebatestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'llave'
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
        return pruebatest::class;
    }
}
