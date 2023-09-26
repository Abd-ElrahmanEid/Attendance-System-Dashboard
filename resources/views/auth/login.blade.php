<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('../vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('../vendors/base/vendor.bundle.base.css')}}">

    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <title>Login</title>
</head>


{{-----------------------------------------------------------------------------------------------}}

<body>
<div class="container-scroller" >
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-center py-5 px-4 px-sm-5">
                        <h4 >ATTENDANCE SYSTEM</h4>
                        <h6 class="font-weight-light">Please, Sign in to continue.</h6>


                        <form class="pt-3" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="E-Mail" :value="old('email')" required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" style="list-style-type: none; color: red" />

                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password"   required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                            </div>

                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register</a>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-----------------------------------------------------------------------------------------------}}


<script src="{{asset('../vendors/base/vendor.bundle.base.js')}}"></script>
<script src="{{asset('../js/off-canvas.js')}}"></script>
<script src="{{'../js/hoverable-collapse.js'}}"></script>
<script src="{{asset('../js/template.js')}}"></script>
<script src="{{asset('../js/todolist.js')}}"></script>
</body>
</html>
