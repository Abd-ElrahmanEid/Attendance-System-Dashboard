<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('../vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('../vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <title>Profile 00{{$employee->id}}</title>
</head>


<style>
    @media print {

        .btn{
            display: none;
        }


    }

    @page {
        margin: 0;
    }
</style>


<body>

{{-------------------------------------Logo-----------------------------------}}
<div style="display: flex; justify-content: center; margin-top: 40px; margin-bottom: 40px">
    <img src="{{asset('../img/logo2.png')}}" style="width: 250px">
</div>



{{-------------------------------------Content-----------------------------------}}

<div class="row d-flex justify-content-center align-items-center h-100 mb-3" >
    <div class="col col-lg-10 mb-4 mb-lg-0">
        <div class="card mb-3" style="box-shadow: none">



            <div class="row g-0">
                <div class="col-md-4 text-center text-white" >


                    <img src="{{asset('/storage/'.$employee->image)}}"
                         class="rounded-circle img-fluid mb-3 " style="width: 160px; height: 160px; margin-top: 90px" />
                    <p class="text-muted">{{$employee->employee_name}}</p>
                    <p class="text-muted mb-3">{{$employee->birthdate}}</p>


                </div>
                <div class="col-md-8">
                    <div class="card-body">

                        <div class="row ">
                            <div class="col-6">
                                <h6>ID</h6>
                                <p class="text-muted">00{{$employee->id}}</p>
                            </div>

                            <div class="col-6 ">
                                <h6>Address</h6>
                                <p class="text-muted">{{$employee->address}}</p>
                            </div>
                        </div>
                        <hr class="mt-0 mb-4">

                        <div class="row ">
                            <div class="col-6">
                                <h6>Phone</h6>
                                <p class="text-muted">{{$employee->phone}}</p>
                            </div>

                            <div class="col-6 ">
                                <h6>National Number</h6>
                                <p class="text-muted">{{$employee->national_number}}</p>
                            </div>
                        </div>
                        <hr class="mt-0 mb-4">

                        <div class="row">
                            <div class="col-6">
                                <h6>Gender</h6>
                                <p class="text-muted">{{$employee->gender}}</p>
                            </div>

                            <div class="col-6 ">
                                <h6>Department</h6>
                                <p class="text-muted">{{$employee->department}}</p>
                            </div>
                        </div>
                        <hr class="mt-0 mb-4">

                        <div class="row ">
                            <div class="col-6">
                                <h6>Position</h6>
                                <p class="text-muted">{{$employee->position}}</p>
                            </div>

                            <div class="col-6 ">
                                <h6>Salary</h6>
                                <p class="text-muted">{{$employee->salary}} EGP</p>
                            </div>
                        </div>
                        <hr class="mt-0 mb-4">

                        <div class="row ">
                            <div class="col-6 ">
                                <h6>Available Days</h6>
                                <p class="text-muted">{{$employee->available}} D</p>
                            </div>
                        </div>


                    </div>
                </div>

            </div>


        </div>
    </div>
</div>



<div class="container d-flex justify-content-around mb-5">

    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5" style="box-shadow: none; height: 250px;" >
        <h5 class="text-center">Copy of Identity</h5>
        <img src="{{asset('/storage/'.$employee->identity)}}" style="width: 100%; height: 100%;" >

    </div>


    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5"  style="box-shadow: none; ">
        <h5 class="text-center">Criminal Record Certificate</h5>
        <img src="{{asset('/storage/'.$employee->criminal_record)}}" style="width: 100%; height: 100%;" >

    </div>
</div>





{{-------------------------------------Print button-----------------------------------}}

<div class="container" style="display: flex; justify-content:center; margin-top: 30px; margin-bottom: 30px" >
    <button onclick="printme()" class="btn btn-inverse-primary" style="width: 200px" ><i class="fa-solid fa-print"></i></button>
</div>






<script src="{{asset('../js/print.js')}}"></script>
<script src="{{asset('../vendors/base/vendor.bundle.base.js')}}"></script>
<script src="{{asset('../js/off-canvas.js')}}"></script>
<script src="{{asset('../s/hoverable-collapse.js')}}"></script>
<script src="{{asset('../js/template.js')}}"></script>
<script src="{{asset('../js/todolist.js')}}"></script>
</body>
</html>
