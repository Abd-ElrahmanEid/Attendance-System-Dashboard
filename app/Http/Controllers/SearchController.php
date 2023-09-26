<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        //     search about specific employee in attendance report
        $att_data = Attendance::where('employee_name' , 'LIKE' , '%' . $request->search . '%')
            ->orwhere('department' , 'LIKE' , '%' . $request->search . '%')
            ->orwhere('position' , 'LIKE' , '%' . $request->search . '%')
            ->get();
        return view('Attendance.attendance_report' , compact('att_data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create( Request $request )
    {
        //     search about specific employee
        $employees = Employee::where('employee_name' , 'LIKE' , '%' . $request->search . '%')
            ->orwhere('department' , 'LIKE' , '%' . $request->search . '%')
            ->orwhere('position' , 'LIKE' , '%' . $request->search . '%')
            ->get();
        return view('Employees.employees' , compact('employees'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
