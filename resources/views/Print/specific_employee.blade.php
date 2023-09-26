<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('../vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('../vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <title>{{$information->employee_name}} Report</title>
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


<div style="display: flex; justify-content: center; margin-top: 40px; margin-bottom: 40px">
    <img src="{{asset('../img/logo2.png')}}" style="width: 250px">
</div>



<div class="container col-xl-10 text-center" >
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-4 ">
                <h6>Employee Name</h6>
                <p class="text-muted"> {{$information->employee_name}} </p>
            </div>

            <div class="col-4 ">
                <h6>National Number</h6>
                <p class="text-muted"> {{$information->national_number}} </p>
            </div>

            <div class="col-4 ">
                <h6>Department</h6>
                <p class="text-muted"> {{$information->department}} </p>
            </div>
        </div>
        <hr class="mt-0 mb-4">



        <div class="row mb-2">
            <div class="col-4">
                <h6>Position</h6>
                <p class="text-muted"> {{$information->position}} </p>
            </div>

            <div class="col-4 ">
                <h6>Salary</h6>
                <p class="text-muted"> {{$information->salary}} EGP</p>
            </div>

            <div class="col-4 ">
                <h6>Available Days</h6>
                <p class="text-muted"> {{$information->available}} D</p>
            </div>
        </div>
        <hr class="mt-0 mb-4">



        <div class="row mb-2">
            <div class="col-4">
                <h6>Attendance Days</h6>
                <p class="text-muted"> {{$all_days}} D</p>
            </div>

            <div class="col-4 ">
                <h6>Absence Days</h6>
                <p class="text-muted"> {{$absent_days}} D</p>
            </div>

            <div class="col-4 ">
                <h6>Net Salary</h6>
                <p class="text-muted"> {{$net_salary}} EGP</p>
            </div>

        </div>
        <hr class="mt-0 mb-4">


    </div>
</div>

<div class="container">
    <ol style="margin-left: 85px">
        @foreach($notes as $note)
            <li><span style="font-weight: bold">Notes: </span>{{$note ?? ' '}}</li>
        @endforeach
    </ol>
</div>

<div class="container d-flex justify-content-end">
    <div class="row mb-2" style="margin-top: 30px">
        <div style="margin-right: 50px" >
            <h6>Date</h6>
            <p class="text-muted"> {{now()->format('Y-m-d')}} </p>
        </div>

        <div style="margin-right: 115px">
            <h6>Time</h6>
            <p class="text-muted"> {{now()->format('H:i:s')}} </p>
        </div>
    </div>
</div>



<div class="container" style="display: flex; justify-content:center;" >
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
