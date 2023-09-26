<?php

namespace App\Http\Controllers;

use App\Http\Requests\Add_EmployeeRequest;
use App\Http\Requests\Edit_EmployeeRequest;
use App\Models\Department;
use App\Models\Employee;
use Exception;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('Employees.employees', compact('employees'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Employees.add_employee');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Add_EmployeeRequest $request)
    {
        try{
            $path_image = $request->file('image')->store('images','public');
            $path_identity = $request->file('identity')->store('copy_of_identity','public');
            $path_criminal = $request->file('criminal_record')->store('criminal_record','public');

            Employee::create([
                'employee_name'=> $request['employee_name'],
                'address'=> $request['address'],
                'birthdate'=> $request['birthdate'],
                'phone'=> $request['phone'],
                'national_number'=> $request['national_number'],
                'gender'=> $request['gender'],
                'department'=> $request['department'],
                'position'=> $request['position'],
                'salary'=> $request['salary'],
                'available'=> $request['available'],
                'image'=> $path_image,
                'identity' => $path_identity,
                'criminal_record' => $path_criminal,



                $data = Department::select('id')->where([
                    ['department_name' , $request['department']],
                ])->get(),
                $plucked = $data->pluck('id'),
                $pure = $plucked,

                'department_id' => $pure[0],
            ]);
        } catch ( Exception ){

            return redirect()->route('add_employee.create')->with('error', 'You Should Select Department Already Exist');
        }


        return redirect()->route('add_employee.create')->with('success', 'Employee Added Successfully');
    }



    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $employees = Employee::where('id',$id)->first();
        return view('Employees.edit_employee' , compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Edit_EmployeeRequest $request, int $id )
    {
        $employees = Employee::where('id',$id)->first();
        $employees->update($request->all());

        return redirect()->route('add_employee.index')->with('edited' , 'Employee Edited Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Employee::where('id' , $id)->delete();
        return redirect()->route('add_employee.index')->with('success', 'Employee Deleted Successfully');

    }
}
