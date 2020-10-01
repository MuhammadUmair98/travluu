<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <title>Admin Area | Dashboard</title>
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
                <?php $check=0;
                      $check1=0;
                      $check2=0;
                      $check3=0;
                  ?>
              <li class=""><a href="#">Dashboard</a></li>
              @foreach($viewingdata as $viewingdatas)
              <?php $check++;?>
              @if($check==1)
             <li class="{{ Route::currentRouteNamed('Pr_info') ? 'active' : '' }}"><a href="{{route('Pr_info',['id'=>$viewingdatas->id,'email'=>$viewingdatas->email])}}">Personal Info</a></li>
             @endif
             @endforeach
              @foreach($viewingdata as $viewingdatas)
              <?php $check1++;?>
              @if($check1==1)
             <li class="{{ Route::currentRouteNamed('Pr_docs') ? 'active' : '' }}"><a href="{{route('Pr_docs',['id'=>$viewingdatas->id,'email'=>$viewingdatas->email])}}">Documents</a></li>
            @endif
             @endforeach
             @foreach($viewingdata as $viewingdatas)
             <?php $check2++;?>
              @if($check2==1)
             <li class="{{ Route::currentRouteNamed('getVehicles') ? 'active' : '' }}"><a href="{{route('getVehicles',['id'=>$viewingdatas->id,'email'=>$viewingdatas->email])}}">Vehicles</a></li>
             @endif
             @endforeach
             @foreach($viewingdata as $viewingdatas)
             <?php $check3++;?>
              @if($check3==1)
             <li class="{{ Route::currentRouteNamed('referral') ? 'active' : '' }}"><a href="{{route('referral',['email'=>$viewingdatas->email])}}">Referral Code</a></li>
             @endif
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
            <li>
            <a href="#">Dashboard</a>
            </li>
            </ol>
</body>
</html>
