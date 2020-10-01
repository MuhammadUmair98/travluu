<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <title>Admin Area | Dashboard</title>
    <style>
          @media screen and (max-width: 600px) {
    table {
        display: inline-block;
    overflow-x: auto;
    white-space: nowrap;

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
                      <li class="active"><a href="#">Dashboard</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                            <li class=""><a href="#">Welcome <b> {{ Auth::user()->name }}</b></a></li>


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
                    <a class="my" href="#">Dashboard</a>
                    </li>
                    </ol>
                  </div>

            </section>
            <Section id="side">
                <div class="container">
                   <div class="row">

                      <div class="col-md-12">
                            <div class="panel panel-default">
                                    <div class="panel-heading main-color-bg ">
                                      <h3 style="color: #01579b" class="panel-title">Website Overview</h3>
                                    </div>
                                    <div class="panel-body">
                                      <div class="col-md-3">
                                       <div class="well dash-box">
                                           <h2 style="text-align: center"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 12</h2>
                                           <h4 style="text-align: center">Users</h4>
                                       </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="well dash-box">
                                                <h2 style="text-align: center"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 20</h2>
                                                <h4 style="text-align: center">Requests</h4>
                                            </div>
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="well dash-box">
                                                        <h2 style="text-align: center"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 23</h2>
                                                        <h4 style="text-align: center">Completed</h4>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                            <div class="well dash-box">
                                                                <h2 style="text-align: center"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 11</h2>
                                                                <h4 style="text-align: center">Stats</h4>
                                                            </div>
                                                            </div>

                                    </div>

                                  </div>
                                  <div class="panel panel-default ">
                                        <div class="panel-heading main-color-bg">
                                          <h3 style="color:#01579b" class="panel-title">Latest Users</h3>
                                        </div>
                                        <div class="panel-body">
                                                <table class="table table-striped table-hover" style="">
                                                        <tr>
                                                          <th>Name</th>
                                                          <th>Email</th>
                                                          <th>Phone Number</th>
                                                          <th>Referred by</th>
                                                          <th>Referral Code</th>
                                                          <th>Joined Date</th>
                                                        </tr>

                                                        @foreach($registered as $registereds)
                                                        <tr>

                                                        <td><a href="{{route('specific_user',['user_id'=>$registereds->id,'email_id'=>$registereds->email])}}">{{$registereds->name}}</a></td>
                                                        <td>{{$registereds->email}}</td>
                                                        <td>{{$registereds->Phone_Number}}</td>
                                                        <td>{{$registereds->referred_by}}</td>
                                                        <td>{{$registereds->generated_referral_code}}</td>
                                                        <td>{{$registereds->created_at->format('Y/m/d')}}</td>
                                                    </tr>
                                                        <tr>
                                                      @endforeach

                                                      </table>
                                        </div>
                                      </div>

                      </div>


                   </div>
                </div>
                <div class="ft">
                <footer class="footer">
                        <div class="container">
                          <p style="text-align: center; padding-top:20px ;color: #ffffff;" class="text-muted">Copyright Muhammad Umair &copy; 2019</p>
                        </div>
                      </footer>
                    </div>
            </Section>
















              <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

             <script src="../../dist/js/bootstrap.min.js"></script>



  </body>
</html>
