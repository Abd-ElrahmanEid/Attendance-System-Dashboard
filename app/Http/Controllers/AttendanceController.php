<?php

namespace App\Http\Controllers;

use App\Http\Requests\Add_AttendanceRequest;
use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( )
    {
        $att_data = Attendance::all();
        return view('Attendance.attendance_report' , compact('att_data'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create( )
    {

    }



    /**
     * Store a newly created resource in storage.
     */

    public function store(Add_AttendanceRequest $request )
    {

        //  check on available days for each employee ( == 0 or not )
        $days = Employee::where('employee_name' ,  $request['employee_name'])->pluck('available');
        if( $days[0] == 0){
            return redirect()->back()->with('error' , 'This Employee don´t have available days');
        }

        //  Can't fill all inputs( attended, absent, vacation ) together :)
        if( strlen($request['attended']) > 0 && strlen($request['absent']) > 0 && strlen($request['vacation']) > 0 ){
            return redirect()->back()->with('error' , 'You Must fill at least one input between..."Attended , Absent , Vacation"');
        }elseif ( strlen($request['attended']) > 0 && strlen($request['absent']) > 0 ){
            return redirect()->back()->with('error' , 'You Must fill at least one input between..."Attended , Absent , Vacation"');
        }elseif ( strlen($request['attended']) > 0 && strlen($request['vacation']) > 0){
            return redirect()->back()->with('error' , 'You Must fill at least one input between..."Attended , Absent , Vacation"');
        }elseif ( strlen($request['absent']) > 0 && strlen($request['attended']) > 0){
            return redirect()->back()->with('error' , 'You Must fill at least one input between..."Attended , Absent , Vacation"');
        }elseif ( strlen($request['absent']) > 0 && strlen($request['vacation']) > 0){
            return redirect()->back()->with('error' , 'You Must fill at least one input between..."Attended , Absent , Vacation"');
        }elseif ( strlen($request['vacation']) > 0 && strlen($request['attended']) > 0){
            return redirect()->back()->with('error' , 'You Must fill at least one input between..."Attended , Absent , Vacation"');
        }elseif ( strlen($request['vacation']) > 0 && strlen($request['absent']) > 0){
            return redirect()->back()->with('error' , 'You Must fill at least one input between..."Attended , Absent , Vacation"');
        }elseif( strlen($request['attended']) == 0 && strlen($request['absent']) == 0 && strlen($request['vacation']) == 0 ){
        return redirect()->back()->with('error' , 'You Must fill at least one input between..."Attended , Absent , Vacation"');
    }        //  Can't fill all inputs( attended, absent, vacation ) together :)



        Attendance::create([
            'employee_name' => $request['employee_name'],
            'department' => $request['department'],
            'position' => $request['position'],
            'date_recorded' => $request['date_recorded'],
            'time_recorded' => $request['time_recorded'],
            'attended' => $request['attended'],
            'absent' => $request['absent'],
            'vacation' => $request['vacation'],
            'bonus' => $request['bonus'],
            'rival' => $request['rival'],
            'notes' => $request['notes'],
        ]);

        // calculate available days - vacations
        if( $request['vacation']){
           DB::table('employees')->where('employee_name' ,  $request['employee_name'])->update(['available' => $days[0] - 1]);
        }

        return redirect()->route('add_attendance.index')->with('success' , 'Attendance Submitted');
    }



    /**
     * Display the specified resource.
     */
    public function show( int $id )
    {
        $information = Employee::where('id' , $id)->first();

        return view('Attendance.add_attendance' , compact('information'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( int $id)
    {
        Attendance::where('id' , $id)->delete();
        return redirect()->back()->with('deleted', 'Employee Deleted Successfully');
    }
}
