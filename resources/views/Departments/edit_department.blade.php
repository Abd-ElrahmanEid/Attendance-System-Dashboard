@extends('layouts.Design_Frame.frame')

@section('title')
    Edit Department
@endsection


@section('content')



<div class="container mt-4">

<!-------------------------------------------------------------------------------------------------------------------->

    <div class="col-xl-12 mt-5">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Department</h4>
            </div>



            <div class="modal-body">

                <form action="{{route('add_department.update' , $departments->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="department_name">Department Name</label>
                                <select class="form-control" id="department_name" name="department_name">
                                    <option value="" disabled selected hidden>-Select-</option>
                                    <option value="finance">Finance</option>
                                    <option value="HR">HR</option>
                                </select>
                                @error('department_name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>



                            <div class="form-group col-md-6" >
                                <label for="capacity">Capacity</label>
                                <input type="number" class="form-control" id="capacity" name="capacity" placeholder="capacity" value="{{old('capacity' , $departments->capacity)}}">
                                @error('capacity')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>


                            <div class="form-group col-md-4" >
                                <label class="col-md-12"></label>
                                <button type="submit" class="btn btn-primary" >Edit</button>
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
