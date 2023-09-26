<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'employee_name',
        'address',
        'birthdate',
        'phone',
        'national_number',
        'gender',
        'department',
        'position',
        'salary',
        'available',
        'image',
        'identity',
        'criminal_record',
        'department_id'

    ];

    public function employee(){
        return $this->belongsTo(Department::class);
    }


    public function employees(){
        return $this->belongsToMany(Attendance::class);
    }



}
