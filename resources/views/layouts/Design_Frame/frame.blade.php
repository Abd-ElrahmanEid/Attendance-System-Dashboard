<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('../vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('../vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <title>@yield('title')</title>
</head>


<style>
    .shad:hover{
        background-color: snow;
    }
</style>



<body >



<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <p class="navbar-brand brand-logo" >  Attendance System</p>
    </div>

<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="ti-view-list"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">


        <li class="nav-item nav-profile dropdown">
            <div class="ava" style="width: 25px; height: 25px; margin-right: 13px; border-radius: 50px; display: flex; justify-content: center; align-items: center ">
                <img src="{{asset('../img/avatar.png')}}" style="height: 100%; width: 100%">
            </div>
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="profileDropdown">
                <div style="cursor: pointer; margin-right: 30px; color: black">Hello, {{ Auth::user()->name }}<i class="fa-solid fa-chevron-down text-primary" style="padding-left: 10px; padding-bottom: 4px; font-size: 14px"></i></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right  navbar-dropdown" aria-labelledby="profileDropdown">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{route('logout')}}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                        <i class="ti-power-off text-primary"></i>
                        Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="ti-view-list"></span>
    </button>
</div>
</nav>
<!-- partial -->
<!-- partial -->

<div class="container-fluid page-body-wrapper">
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item shad">
            <a class="nav-link" href="{{route('dashboard.index')}}">
                <i class="ti-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link shad" href="{{route('add_employee.create')}}">
                <i class="ti-plus menu-icon"></i>
                <span class="menu-title">Add Employee</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link shad" href="{{route('add_employee.index')}}">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Employees Information</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link shad" href="{{route('add_department.create')}}">
                <i class="ti-ruler-pencil menu-icon"></i>
                <span class="menu-title">Add Department</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link shad" href="{{route('add_department.index')}}">
                <i class="ti-archive menu-icon"></i>
                <span class="menu-title">Departments</span>
            </a>
        </li>



        <li class="nav-item">
            <a class="nav-link shad" href="{{route('add_attendance.index')}}">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Attendance Report</span>
            </a>
        </li>


    </ul>
</nav>



{{-----------------------------------------------------------------------------------------------------------------}}


@yield('content')


{{-----------------------------------------------------------------------------------------------------------------}}







</div>
</div>
</div>





<script src="{{asset('../vendors/base/vendor.bundle.base.js')}}"></script>
<script src="{{asset('../js/off-canvas.js')}}"></script>
<script src="{{asset('../s/hoverable-collapse.js')}}"></script>
<script src="{{asset('../js/template.js')}}"></script>
<script src="{{asset('../js/todolist.js')}}"></script>

</body>
</html>
