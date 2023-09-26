@extends('layouts.Design_Frame.frame')
@section('title')
    Edit Employee
@endsection


@section('content')



    {{--    success message--}}

<div class="modal-body mt-3">
    <div class="modal-header">
        <h4 class="modal-title">Edit Employee</h4>
    </div>


    @if(session()->has('success'))
        <div class="container alert alert-success mt-3 text-center">
            {{session()->get('success')}}
        </div>
    @endif



    <form action="{{route('add_employee.update' , $employees->id)}}" method="post">

        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row">

                <div class="form-group col-md-4">
                    <label for="employee_name">Employee Name</label>
                    <input type="text" class="form-control" id="employee)_ame" name="employee_name" placeholder="Employee Name" value="{{old('employee_name', $employees->employee_name)}}">
                    @error('employee_name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{old('address', $employees->address)}}">
                    @error('address')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="birthdate">Birth-Date</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Birth-Date" value="{{old('birthdate', $employees->birthdate)}}">
                    @error('birthdate')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{old('phone', $employees->phone)}}">
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="national_number">National Number</label>
                    <input type="number" class="form-control" id="national_number" name="national_number" placeholder="National Number" value="{{old('national_number', $employees->national_number)}}">
                    @error('national_number')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="{{old('gender', $employees->gender)}}">

                    @error('gender')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group col-md-4">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Your Department" value="{{old('department', $employees->department)}}">
                    @error('department')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group col-md-4">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Your Position" value="{{old('position', $employees->position)}}">
                    @error('position')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="salary">Salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" placeholder="EGP" value="{{old('salary', $employees->salary)}}">
                    @error('salary')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="salary">4 Days or More</label>
                    <input type="number" class="form-control" id="available" name="available" placeholder="Available Days" value="{{old('available', $employees->available)}}">
                    @error('available')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>



                <div class="form-group col-md-4 mt-4">
                    <button type="submit" class="btn btn-primary col-xl-9 col-lg-12 col-md-10 col-sm-12">Submit</button>
                </div>

            </div>
        </div>
    </form>

</div>





@endsection
