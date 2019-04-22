
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        .hero-image {
            background-image: url(https://campus.campus-star.com/app/uploads/2018/09/logistics-02.jpg);
            background-color: #cccccc ;
            background-position: center;
            background-repeat: no-repeat;
            position: relative ;
        }

    </style>
</head>
<body >
<div class="site-blocks-cover overlay hero-image" >

<nav class="navbar navbar-expand-mdm" >
    <header class="site-navbar py-3" role="banner" style="margin-top: 30px; margin-left: -100px; " >

        <div class="container">
            <div class=" align-items-center" style="margin-top: -200px;margin-right: -400px;">
                <div class="col-11 col-xl-2">

                    <h1 class="mb-0"  style="margin-top: 200px;"><a href="/index" class="text-white h2 mb-0">Logistics</a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block "  style="margin-top: -60px;">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block ">
                            <li><a href="/index">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="has-children">
                                <a href="services.html">Services</a>
                                <ul class="dropdown">
                                    <li><a href="#">Air Freight</a></li>
                                    <li><a href="#">Ocean Freight</a></li>
                                    <li><a href="#">Ground Shipping</a></li>
                                    <li><a href="#">Warehousing</a></li>
                                    <li><a href="#">Storage</a></li>
                                </ul>
                            </li>
                            <li><a href="industries.html">Industries</a></li>

                            <li><a href="contact.html">Contact</a></li>

                                <!-- Authentication Links -->
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li >
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else

                                    <li class="has-children">
                                        <a  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown">

                                           <li> <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                               </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form></li>
                                    </li>
                                    </ul>
                                @endguest
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

            </div>

        </div>

    </header>
</nav>

  <main class ="py-4 " style="margin-top: 60px;">

     @yield('content')

  </main>

</div>
</body>

</html>
