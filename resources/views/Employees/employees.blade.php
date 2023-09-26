@extends('layouts.Design_Frame.frame')

@section('title')
    Employees
@endsection



@section('content')

    <!----------------------------------------------------------------------------------------------------------------------->


<div class="container-fluid py-3 h-100 mt-3">
    {{---------------------search input-------------}}
    <form action="{{route('search.create')}}" method="get" class="mt-3 mb-3" style="display: flex; justify-content: center; height: 35px ">
        @csrf
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" name="search" placeholder="Search"  style="border-radius: 10px 0 0 10px; height: 35px"/>
        </div>
        <button type="submit" class="btn btn-dark btn-sm" style="border-radius: 0 10px 10px 0 ">
            <i class="fas fa-search"></i>
        </button>
    </form> <br>


    @if(session()->has('success'))
        <div class="container alert alert-danger mt-3 text-center">
            {{session()->get('success')}}
        </div>
    @elseif(session()->has('edited'))
        <div class="container alert alert-success mt-3 text-center">
            {{session()->get('edited')}}
        </div>
    @endif

@forelse($employees as $employee)

    <div class="row d-flex justify-content-center align-items-center h-100 mb-3">
        <div class="col col-lg-10 mb-4 mb-lg-0">
            <div class="card mb-3" >

                <div style="display: flex; justify-content: end;" >
                    <a href="{{route('print.edit' , $employee->id)}}" class="btn btn-inverse-secondary" style="width: 100px" ><i class="fa-solid fa-id-card"></i></a>
                </div>

                <div class="row g-0">
                    <div class="col-md-4 text-center text-white" >

                        <img src="{{asset('/storage/'.$employee->image)}}"
                             class="rounded-circle img-fluid mt-3 mb-2 " style="width: 160px; height: 160px" />
                        <p class="text-muted">{{$employee->employee_name}}</p>
                        <p class="text-muted mb-3">{{$employee->birthdate}}</p>

                        <div class="d-flex justify-content-around">
                            <a href="{{route('add_employee.edit' , $employee->id)}}" class="btn btn-inverse-primary"><i class="fa-solid fa-pen-to-square" ></i></a>

                            <a href="{{route('add_attendance.show' , $employee->id)}}" class="btn btn-inverse-success"><i class="fa-solid fa-clipboard-user"></i></a>

                            <form action="{{route('add_employee.destroy' , $employee->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-inverse-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>

                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-6 ">
                                    <h6>Address</h6>
                                    <p class="text-muted">{{$employee->address}}</p>
                                </div>
                                <div class="col-6">
                                    <h6>Phone</h6>
                                    <p class="text-muted">{{$employee->phone}}</p>
                                </div>
                            </div>
                            <hr class="mt-0 mb-4">
                            <div class="row ">
                                <div class="col-6 ">
                                    <h6>National Number</h6>
                                    <p class="text-muted">{{$employee->national_number}}</p>
                                </div>
                                <div class="col-6">
                                    <h6>Gender</h6>
                                    <p class="text-muted">{{$employee->gender}}</p>
                                </div>
                            </div>

                            <hr class="mt-0 mb-4">
                            <div class="row">
                                <div class="col-6 ">
                                    <h6>Department</h6>
                                    <p class="text-muted">{{$employee->department}}</p>
                                </div>
                                <div class="col-6">
                                    <h6>Position</h6>
                                    <p class="text-muted">{{$employee->position}}</p>
                                </div>
                            </div>

                            <hr class="mt-0 mb-4">
                            <div class="row ">
                                <div class="col-6 ">
                                    <h6>Salary</h6>
                                    <p class="text-muted">{{$employee->salary}} EGP</p>
                                </div>
                                <div class="col-6 ">
                                    <h6>Available Days</h6>
                                    <p class="text-muted">{{$employee->available}} D</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div style="display: flex; justify-content: end;" >
                    <a href="{{route('print.show' , $employee->id)}}" class="btn btn-inverse-warning" style="width: 200px" ><i class="fa-solid fa-print"></i></a>
                </div>

            </div>
        </div>
    </div>

    @empty
        <div class="d-flex justify-content-center">
            <img src="{{asset('../img/error.jpg')}}" width="35%" height="35%" >
        </div>


@endforelse


</div>


@endsection
