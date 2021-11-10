<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Student
 * @package App\Models
 * @version October 28, 2021, 3:18 am UTC
 *
 * @property string $student_name
 * @property string $student_address
 * @property string $seat_no
 * @property string $seat_position
 */
class Student extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'student';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_name',
        'student_address',
        'seat_no',
        'seat_position'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_name' => 'string',
        'student_address' => 'string',
        'seat_no' => 'string',
        'seat_position' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_name' => 'required|string|max:255',
        'student_address' => 'required|string|max:255',
        'seat_no' => 'required|string|max:255',
        'seat_position' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
