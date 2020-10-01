@extends('layouts.app')
@section('content')
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBUD-udhrnP-UYqQIzXeq0rZ6GjRZ4KCi0"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('/css/main_driver.css')}}">

    </head>
    <style>


@media screen and (max-width: 600px) {
    .btn-sm {

      margin-top:12px;
      margin-left:-2px;

    }
    .btn-lg {

  margin-top:12px;
  margin-left:-2px;

  }
    .center{
        text-align:center;
    }
  }


    </style>

<body>
<div class="container testimonial-group">
<div class="row justify-content-center">

    <div style="text-align:center" class="col-md-12 center">

        <a type="button" style="" href="{{route('profile')}}" class=" btn {{Route::currentRouteNamed('profile') ? 'btn-black' : 'btn-yellow' }} btn-lg btne "><i class="fa fa-user-circle"></i> &nbsp&nbspMy Profile  &nbsp </a>



        <a type="button" style="" class="btn {{Route::currentRouteNamed('vehicles') ? 'btn-black' : 'btn-yellow' }} btn-lg btne buttons " href="{{route('vehicles')}}"><i class="fa fa-shuttle-van"></i> &nbsp&nbspMy Motors  &nbsp </a>



        <a type="button" style="" class="btn btn-yellow btn-lg btne"><i class="fa fa-file-alt"></i> &nbsp&nbspTravluu's Guide  &nbsp </a>




        <a type="button" style="" class="btn btn-yellow btn-lg btne "><i class="fa fa-tasks"></i> &nbsp&nbspTours   &nbsp </a>



        <a type="button" style="" class="btn btn-yellow btn-lg btne "><i class="fa fa-pound-sign"></i> &nbsp Bids   &nbsp </a>

    </div>

</div>


</div>

</body>
@endsection
    </html>
