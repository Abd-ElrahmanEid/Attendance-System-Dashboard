<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="{{asset('../vendors/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://unpkg.com/aos@next/dist/aos.css')}}" />

    <link href="{{asset('../css/main_dashboard.css')}}" rel="stylesheet">
    <title>Welcome</title>
</head>

<body>

{{--Hero Section--}}
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <img data-aos="fade-up" src="{{asset('../img/logo.png')}}" style="width: 90%; height: 35%" >
                <blockquote data-aos="fade-up" data-aos-delay="100" style="text-align: justify;">
                    <p>Clinica Egypt is one of the first companies to work directly with hotel clinics in tourist attractions (Hurghada, Sharm El-Sheikh, Marsa Alam, Luxor, and Cairo). We aim to provide the first primary care to all guests of who require medical assistance whilst abroad or remaining within their hotel.</p>
                </blockquote>
                @if (Route::has('login'))
                <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('login') }}" class="btn-clicker">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-clicker">Register</a>
                    @endif
                </div>
                @endif

            </div>
        </div>
    </div>
</section>








<script src="{{asset('https://unpkg.com/aos@next/dist/aos.js')}}"></script>
<script>
    AOS.init();
</script>
</body>
</html>
