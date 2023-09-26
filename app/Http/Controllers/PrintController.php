<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $information = Employee::where('id' , $id)->first();
        $name = $information->employee_name;

        $attended_days = DB::table('attendances')->where('employee_name' , $name)->where('attended' , 'attended')->count();
        $vacation_days = DB::table('attendances')->where('employee_name' , $name)->where('vacation' , 'vacation')->count();
        $all_days = $attended_days + $vacation_days;
        $absent_days = DB::table('attendances')->where('employee_name' , $name)->where('absent' , 'absent')->count();


        // calculate "Net_Salary" where.....( salary / 30 * attended_D + vacation_D ) + bonus - rival
        $salary = Employee::where('employee_name' ,  $name)->pluck('salary')[0];
        $att_days = DB::table('attendances')->where('employee_name' , $name)->where('attended' , 'attended')->count();
        $vac_days = DB::table('attendances')->where('employee_name' , $name)->where('vacation' , 'vacation')->count();
        $bonus = DB::table('attendances')->where('employee_name' , $name)->sum('bonus');
        $rival = DB::table('attendances')->where('employee_name' , $name)->sum('rival');

        $net_salary = ( $salary / 30 * ( $att_days + $vac_days ) + $bonus - $rival );

        // show notes in blade
        $notes = DB::table('attendances')->where('employee_name' , $name)->whereNotNull('notes')->get(['notes'])->pluck('notes');


        return view('Print.specific_employee' , compact('information' , 'all_days', 'absent_days' , 'net_salary', 'notes' ));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $employee = Employee::where('id' , $id)->first();
        return view('Print.profile_employee' , compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
