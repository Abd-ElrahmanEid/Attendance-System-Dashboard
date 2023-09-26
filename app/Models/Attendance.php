<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';

    protected $fillable =[
        'employee_name',
        'department',
        'position',
        'date_recorded',
        'time_recorded',
        'attended',
        'absent',
        'vacation',
        'bonus',
        'rival',
        'notes'
    ];

    public function attendance(){
        return $this->belongsToMany(Employee::class);
    }

}

