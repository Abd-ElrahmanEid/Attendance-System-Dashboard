@extends('layouts.Design_Frame.frame')

@section('title')
    Attendance Report
@endsection


@section('content')



<div class="main-panel mt-4">

    {{---------------------search input---------------------}}
    <form action="{{route('search.index')}}" method="get" class="mt-3 mb-3" style="display: flex; justify-content: center; height: 35px ">
        @csrf
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" placeholder="Search" name="search" style="border-radius: 10px 0 0 10px; height: 35px"/>
        </div>
        <button type="submit" class="btn btn-dark btn-sm" style="border-radius: 0 10px 10px 0 ">
            <i class="fas fa-search"></i>
        </button>
    </form> <br>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Attendance Report</p>

                        @if(session()->has('success'))
                            <div class="container alert alert-success mt-3 text-center">
                                {{session()->get('success')}}
                            </div>
                        @elseif(session()->has('deleted'))
                            <div class="container alert alert-danger mt-3 text-center">
                                {{session()->get('deleted')}}
                            </div>
                        @endif

                        <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <table id="example1" class="table table-hover" >
                                <thead class="thead-dark" style="font-size:10px">
                                <tr>
                                    <th>Employee Name</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Date Recorded</th>
                                    <th>Time Recorded</th>
                                    <th>Attendance</th>
                                    <th>Absence</th>
                                    <th>Vacations</th>
                                    <th>Bonus</th>
                                    <th>Rival</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                @forelse($att_data as $data)
                                <tr>
                                    <td>{{$data->employee_name}}</td>
                                    <td>{{$data->department}}</td>
                                    <td>{{$data->position}}</td>
                                    <td>{{$data->date_recorded}}</td>
                                    <td>{{$data->time_recorded}}</td>
                                    <td>{{$data->attended ?? '_______'}}</td>
                                    <td>{{$data->absent ?? '_______'  }}</td>
                                    <td>{{$data->vacation ?? '_______'}}</td>
                                    <td style="text-align: center">{{$data->bonus ?? '_______ '  }}</td>
                                    <td style="text-align: center">{{$data->rival ?? '_______ '  }}</td>
                                    <td>
                                        <form action="{{route('add_attendance.destroy' , $data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-inverse-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>

                                @empty
                                    <div class="alert alert-danger text-center d-flex justify-content-center align-items-center" role="alert" style="height: 40px">
                                        <p style="font-size: 16px; padding-top: 10px"> Sorry, Not Found Any Attendances Information</p>
                                    </div>
                                @endforelse

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>



<!-------------------------------------------------------------------------------------------------------------------------------->
@endsection
