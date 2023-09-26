@extends('layouts.Design_Frame.frame')

@section('title')
    Add Department
@endsection


@section('content')



<div class="container mt-4">

    @if(session()->has('success'))
        <div class="container alert alert-success mt-3 text-center">
            {{session()->get('success')}}
        </div>
    @elseif(session()->has('error'))
        <div class="container alert alert-warning mt-3 text-center">
            {{session()->get('error')}}
        </div>
    @endif
<!-------------------------------------------------------------------------------------------------------------------->

<div class="col-xl-12 mt-5">
    <div class="modal-content ">
        <div class="modal-header">
            <h4 class="modal-title">Add Department</h4>
        </div>



        <div class="modal-body">

            <form action="{{route('add_department.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="department_name">Department Name</label>
                            <select class="form-control" id="department_name" name="department_name">
                                <option value="" disabled selected hidden>-Select-</option>
                                <option value="Finance">Finance</option>
                                <option value="HR">HR</option>
                            </select>
                            @error('department_name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>



                        <div class="form-group col-md-6" >
                            <label for="capacity">Capacity</label>
                            <input type="number" class="form-control" id="capacity" name="capacity" placeholder="capacity">
                            @error('capacity')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="form-group col-md-4" >
                            <label class="col-md-12"></label>
                            <button type="submit" class="btn btn-primary" >Submit</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


<!-------------------------------------------------------------------------------------------------------------------------------->
</div>

@endsection
