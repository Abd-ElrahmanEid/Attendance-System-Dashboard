@extends('layouts.Design_Frame.frame')

@section('title')
    Add Attendance
@endsection


@section('content')


<div class="main-panel mt-3">

<!-------------------------------------------------------------------------------------------------------------------->
    <div class="container">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Attendance</h4>
            </div>


            <div class="modal-body">

                @if(session()->has('error'))
                    <div class="container alert alert-warning mt-3 text-center">
                        {{session()->get('error')}}
                    </div>
                @endif
                <form action="{{route('add_attendance.store' , $information->id)}}" method="post">
                    @csrf

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-xl-4 col-md-6" >
                                <label for="employee_name">Employee Name</label>
                                <input type="text" class="form-control" @readonly('readonly') id="employee_name" name="employee_name" placeholder="Employee Name" value="{{old('employee_name' , $information->employee_name)}}">
                            </div>

                            <div class="form-group col-xl-4 col-md-6">
                                <label for="department">Department</label>
                                <input type="text" class="form-control" @readonly('readonly') id="department" name="department" value="{{old('department' , $information->department)}}">
                            </div>

                            <div class="form-group col-xl-4 col-md-6">
                                <label for="position">Position</label>
                                <input type="text" class="form-control" @readonly('readonly') id="position" name="position" value="{{old('position' , $information->position)}}">

                            </div>

                            <div class="form-group col-xl-4 col-md-6" >
                                <label for="date_recorded">Date Recorded</label>
                                <input type="date" class="form-control" @readonly('readonly') id="date_recorded" name="date_recorded" placeholder="Date Recorded" value="{{now()->format('Y-m-d')}}">
                            </div>

                            <div class="form-group col-xl-4 col-md-6" >
                                <label for="time_recorded">Time Recorded</label>
                                <input type="time" class="form-control" id="time_recorded" name="time_recorded" placeholder="Time Recorded">
                                @error('time_recorded')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group col-xl-4 col-md-6" >
                                <label for="attended">Attendance</label>
                                <select class="form-control" id="attended" name="attended">
                                    <option value="" selected>-Select-</option>
                                    <option value="Attended">Attended</option>
                                </select>
                                @error('attended')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>


                            <div class="form-group col-xl-4 col-md-6">
                                <label for="absent">Absence</label>
                                <select class="form-control" id="absent" name="absent">
                                    <option value="" selected>-Select-</option>
                                    <option value="Absent">Absent</option>
                                </select>
                                @error('absent')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group col-xl-4 col-md-6">
                                <label for="vacation">Vacations</label>
                                <select class="form-control" id="vacation" name="vacation">
                                    <option value="" selected>-Select-</option>
                                    <option value="Vacation">Vacation</option>
                                </select>
                                @error('vacation')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group col-xl-4 col-md-6">
                                <label for="bonus">Bonus</label>
                                <input type="number" class="form-control" id="bonus" name="bonus" placeholder="If you have a bonus">
                                @error('bonus')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group col-xl-4 col-md-6">
                                <label for="rival">Rival</label>
                                <input type="number" class="form-control" id="rival" name="rival" placeholder="If you have a rival">
                                @error('rival')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                <label for="notes">Notes</label>
                                <input type="text" class="form-control" id="notes" name="notes" placeholder="Explain, Why you got a Bonus or Rival ?!">
                                @error('notes')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>


                            <div class="form-group col-xl-12 col-md-4" >
                                <button type="submit" class="btn btn-primary" >Submit</button>
                            </div>
                        </div>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>

<!-------------------------------------------------------------------------------------------------------------------------------->
@endsection
