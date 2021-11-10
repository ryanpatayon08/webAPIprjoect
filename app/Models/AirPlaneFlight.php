<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class AirPlaneFlight
 * @package App\Models
 * @version October 25, 2021, 11:32 am UTC
 *
 * @property string $plane_name
 * @property string $destination
 * @property string|\Carbon\Carbon $date_time_of_arrival
 * @property string|\Carbon\Carbon $date_time_of_departure
 * @property number $ticket_price
 */
class AirPlaneFlight extends Model
{

    use HasFactory;

    public $table = 'airplane_flights';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'plane_name',
        'destination',
        'date_time_of_arrival',
        'date_time_of_departure',
        'ticket_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'plane_name' => 'string',
        'destination' => 'string',
        'date_time_of_arrival' => 'datetime',
        'date_time_of_departure' => 'datetime',
        'ticket_price' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'plane_name' => 'required|string|max:255',
        'destination' => 'required|string|max:255',
        'date_time_of_arrival' => 'required',
        'date_time_of_departure' => 'required',
        'ticket_price' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
