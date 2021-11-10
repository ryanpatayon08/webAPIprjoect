<?php

namespace App\Repositories;

use App\Models\AirPlaneFlight;
use App\Repositories\BaseRepository;

/**
 * Class AirPlaneFlightRepository
 * @package App\Repositories
 * @version October 25, 2021, 11:32 am UTC
*/

class AirPlaneFlightRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'plane_name',
        'destination',
        'date_time_of_arrival',
        'date_time_of_departure',
        'ticket_price'
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
        return AirPlaneFlight::class;
    }
}
