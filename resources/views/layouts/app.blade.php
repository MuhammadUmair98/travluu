<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css"  href="{{asset('css/navbar.css')}}"/>


    <title> Travluu - The Cheapest Airport Pick and Drop</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/images/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#01579b">
    <meta name="msapplication-TileImage" content="{{asset('/images/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#01579b">

    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('/images/logo.png') }}">
    <link rel="manifest" href="{{ URL::asset('/images/logo.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .nav{
            background-color: #01579b;


        }
        .imgdesign{
            width:px;
            height:50px;
        }

        .btn-secondary {
    color: #fff;
    background-color: #0277bc;
    border-color: #0277bc;
}
.btn-secondary:hover {
    color:#0277bc ;
    background-color: #ffffff;
    border-color: #ffffff;
}
        .navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255) !important;
}
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0) !important;
}
.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show > .btn-secondary.dropdown-toggle {
    color: #0277bc;
    background-color: #ffffff;
    border-color: #ffffff;
}

.logoimg{
width: 115px;
height: 80px;

}

@media screen and (max-width: 600px) {
  .logoimg {
width:72px;
height:50px;

  }
}
    </style>

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark static-top nav" >
            <div class="container-fluid">

                <a class="navbar-brand" href="{{route('main_home')}}">
 <img class="logoimg" src="{{asset('/images/logo.png')}}"  alt="">
                  </a>

                <button class="navbar-toggler" style="" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item  chc{{ Route::currentRouteNamed('main_home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('main_home')}}" >Home</a>
                          </li>
                          <li class="nav-item  chc{{ Route::currentRouteNamed('homee') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('home')}}" >Drive with Us</a>
                          </li>
                          <li class="nav-item  chc{{ Route::currentRouteNamed('homee') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('slider')}}" >Motor Categories</a>
                          </li>

                        @guest
                            <li class="nav-item chc{{ Route::currentRouteNamed('login') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('login') }}" >{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item chc{{ Route::currentRouteNamed('register') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                <li>
                                    <div class="dropdown">

                                        <button style="background-color:" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Route
                                        </button>
                                        <div class="dropdown-menu" id="ok" aria-labelledby="dropdownMenuButton">

                                          <a class="dropdown-item" href="#">Per Hour Rent</a>
                                          <a class="dropdown-item" href="#">Route</a>

                                        </div>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown  {{ Route::currentRouteNamed('home') ? 'active' : '' }}">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('myhome') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                            <li>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>



<script>

$(document).ready(function(){
  $(".dropdown-menu a").click(function(){
    $('#dropdownMenuButton').text($(this).text());
  });
});
</script>
</body>

</html>
