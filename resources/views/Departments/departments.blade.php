@extends('layouts.Design_Frame.frame')

@section('title')
    Departments
@endsection


@section('content')

<div class="main-panel ">

    @if(session()->has('success'))
        <div class="container alert alert-danger mt-3 text-center">
            {{session()->get('success')}}
        </div>
    @elseif(session()->has('edited'))
        <div class="container alert alert-success mt-3 text-center">
            {{session()->get('edited')}}
        </div>
    @endif


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left" style="margin-top: 30px;" >Departments</p>
                    <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <table id="example1" class="table table-hover" >
                            <thead class="thead-dark" style="font-size:10px">
                            <tr>
                                <th>Department Name</th>
                                <th>Capacity</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>

                            <tbody>
                            @forelse($departments as $department)
                            <tr>
                                <td>{{$department->department_name}}</td>
                                <td>{{$department->capacity}}</td>

                                <td>
                                    <form>
                                        <a href="{{route('add_department.edit' , $department->id)}}" class="btn btn-inverse-primary btn-sm"><i class="fa-solid fa-pen-to-square" ></i></a>
                                    </form>

                                </td>
                                <td>
                                    <form action="{{route('add_department.destroy' , $department->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-inverse-danger btn-sm" ><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>

                            @empty
                                <div class="alert alert-danger text-center d-flex justify-content-center align-items-center" role="alert" style="height: 40px">
                                    <p style="font-size: 16px; padding-top: 10px"> Sorry, Not Found Any Departments Information</p>
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
