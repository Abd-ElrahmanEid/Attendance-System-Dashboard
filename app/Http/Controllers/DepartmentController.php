<?php

namespace App\Http\Controllers;

use App\Http\Requests\Add_DepartmentRequest;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('Departments.departments' , compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Departments.add_department');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Add_DepartmentRequest $request)
    {

        Department::create([

            'department_name'=>$request['department_name'],
            'capacity'=>$request['capacity'],

        ]);

        return redirect()->route('add_department.create')->with('success', 'Department Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $departments = Department::where('id',$id)->first();
        return view('Departments.edit_department' , compact('departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Add_DepartmentRequest $request, int $id)
    {
        $departments = Department::where('id',$id)->first();
        $departments->update($request->all());
        return redirect()->route('add_department.index')->with('edited' , 'Employee Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Department::where('id' , $id)->delete();
        return redirect()->route('add_department.index')->with('success', 'Employee Deleted Successfully');
    }
}
