@extends('layouts.Design_Frame.frame')

@section('title')
    Add Employees
@endsection


@section('content')

{{--    success message--}}

<div class="modal-body mt-1" >
    <div class="modal-header">
        <h4 class="modal-title">Add Employees</h4>
    </div>
    @if(session()->has('success'))
        <div class="container alert alert-success mt-3 text-center">
            {{session()->get('success')}}
        </div>

    @elseif(session()->has('error'))
        <div class="container alert alert-warning mt-3 text-center">
            {{session()->get('error')}}
        </div>
    @endif


    <form action="{{route('add_employee.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf

        <div class="card-body">
            <div class="row">

                  <div class="form-group col-md-4">
                      <label for="employee_name">Employee Name</label>
                      <input type="text" class="form-control" id="employee)_ame" name="employee_name" placeholder="Employee Name">
                      @error('employee_name')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>

                  <div class="form-group col-md-4">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                      @error('address')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>

                  <div class="form-group col-md-4">
                      <label for="birthdate">Birth-Date</label>
                      <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Birth-Date">
                      @error('birthdate')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>

                  <div class="form-group col-md-4">
                      <label for="phone">Phone</label>
                      <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone">
                      @error('phone')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>

                  <div class="form-group col-md-4">
                      <label for="national_number">National Number</label>
                      <input type="number" class="form-control" id="national_number" name="national_number" placeholder="National Number">
                      @error('national_number')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>

                  <div class="form-group col-md-4">
                      <label for="gender">Gender</label>
                      <select class="form-control" id="gender" name="gender">
                          <option value="" disabled selected hidden>-Select-</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                      </select>
                      @error('gender')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>


                  <div class="form-group col-md-4">
                      <label for="department">Department</label>
                      <input type="text" class="form-control" id="department" name="department" placeholder="Your Department">
                      @error('department')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>


                  <div class="form-group col-md-4">
                      <label for="position">Position</label>
                      <input type="text" class="form-control" id="position" name="position" placeholder="Your Position">
                      @error('position')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>

                  <div class="form-group col-md-4">
                      <label for="salary">Salary</label>
                      <input type="number" class="form-control" id="salary" name="salary" placeholder="EGP">
                      @error('salary')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>

                  <div class="form-group col-md-4">
                      <label for="salary">4 Days or More</label>
                      <input type="number" class="form-control" id="available" name="available" placeholder="Available Days">
                      @error('available')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>

                <div class="form-group col-md-4 ">
                    <label for="image">Personal Image</label>
                    <input type="file" class="form-control" id="image" name="image" >
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group col-md-4 ">
                    <label for="identity">Copy of Identity</label>
                    <input type="file" class="form-control" id="identity" name="identity" >
                    @error('identity')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group col-md-4 ">
                    <label for="criminal_record">Criminal Record Certificate</label>
                    <input type="file" class="form-control" id="criminal_record" name="criminal_record" >
                    @error('criminal_record')
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
