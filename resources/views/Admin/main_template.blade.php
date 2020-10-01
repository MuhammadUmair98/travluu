<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <title>Admin Area | Dashboard</title>
    <style>
 @media screen and (max-width: 600px) {
.ok{

display: inline-block;
margin-top: 15px;

}
    }
    </style>
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('Admin_Layout')}}">Travluu</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">


             @foreach($viewingdata as $viewingdatas)
             <li class="{{ Route::currentRouteNamed('Pr_vehics') ? 'active' : '' }}"><a href="{{route('Pr_vehics',['id'=>$viewingdatas->id,'email'=>$viewingdatas->email])}}">Vehicle Pics</a></li>
             @endforeach
             @foreach($viewingdata as $viewingdatas)
             <li class="{{ Route::currentRouteNamed('validation') ? 'active' : '' }}"><a href="{{route('validation',['id'=>$viewingdatas->id,'email'=>$viewingdatas->email])}}">Validation</a></li>
            @endforeach
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#">Welcome    <b> {{ Auth::user()->name }}</b></a></li>


                  </ul>
          </div>
        </div>
      </nav>
      <header id="header">
      <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard<small>  Manage Your Site</small></h1>
            </div>

        </div>
      </div>
    </header>
    <section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">

            <a class="ok" href="#">Dashboard</a>





            </ol>
</body>
</html>
