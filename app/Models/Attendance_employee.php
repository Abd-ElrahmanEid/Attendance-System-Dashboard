<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance_employee extends Model
{
    use HasFactory;

    protected $table = 'attendance_employees';

    protected $fillable =[

        'employee_id',
        'attendance_id',

    ];
}
