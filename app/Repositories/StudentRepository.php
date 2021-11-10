<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\BaseRepository;

/**
 * Class StudentRepository
 * @package App\Repositories
 * @version October 28, 2021, 3:18 am UTC
*/

class StudentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_name',
        'student_address',
        'seat_no',
        'seat_position'
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
        return Student::class;
    }
}
