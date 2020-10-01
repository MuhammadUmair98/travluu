<!doctype html>
<html>
@include('layouts.app')


<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Travluu</title>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBUD-udhrnP-UYqQIzXeq0rZ6GjRZ4KCi0"></script>
<style>
    .mycars{
        margin-top: -48px;
    }
    .myimg{

height:500px;
    }

    .blue {
    background: #347fd0;
}
.clicked:hover{
    text-shadow: 2px 2px 4px #000000;
    -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
}

.news {
      box-shadow: inset 0 -15px 30px rgba(0,0,0,0.4), 0 5px 10px rgba(0,0,0,0.5);
       width: 100%;
       margin-top:px;
    margin: 20px auto;
    overflow: hidden;
    border-radius: 4px;
    padding: 1px;
    -webkit-user-select: none;
}

.news span {
    float: left;
    color: #fff;
    padding: 9px;
    position: relative;
    top: 1%;
    box-shadow: inset 0 -15px 30px rgba(0,0,0,0.4);
    font: 16px 'Raleway', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -webkit-user-select: none;
    cursor: pointer;
}


.text1{

 box-shadow:none !important;
    width: 92%;
}
.textview {
    font-size: 25px;

}
.button {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 30px;

  margin-top: 20px;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}
.carousel-caption {
    top: 40px;
    bottom: auto;
}
@media screen and (max-width: 400px) {
.button{
    font-size: 15px;

}
.textview {
    font-size: 15px;

}
#ok{
    text-align: center;
}
}
@media screen and (max-width: 600px){
    .carousel-control-next-icon {
    display:block;
    width: 0px;
    height: 0px;
    background: no-repeat 50%/100% 100%;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
    display:block;
    width: 0px;
    height: 0px;
    background: no-repeat 50%/100% 100%;
}
.carousel-indicators{
    height:0px !important;
    width:0px !important;
}
.myimg{
	height:200px;
}
h1{

    font-size:1rem;
}
.carousel-caption {
    top: -15px;
    bottom: auto;
}

}
</style>
</head>
<body>

    <div id="carouselExampleIndicators" class="carousel slide mycars" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner align-top">
          <div class="carousel-item active">
            <div style="" class="carousel-caption  ">

                <h3 style="font: bold"> </h3>
                <br>
                   <h1> The most Reasonable Rides Booking Service in UK</h1>

              </div>
            <img class="d-block w-100 myimg" src="{{asset('/images/slider_1.jpg')}}" alt="First slide">


          </div>
          <div class="carousel-item">
            <div style="" class="carousel-caption ">

                <h3 style="font: bold"> </h3>
                <br>
                   <h1>We assure our Customers Safe and Comfortable Traveling</h1>

              </div>
            <img class="d-block w-100 myimg" src="{{asset('/images/slider_2.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <div style="" class="carousel-caption ">

                <h3 style="font: bold"> </h3>
                <br>
                   <h1>Driver Registrations Open, Join Travluu Now</h1>

              </div>
            <img class="d-block w-100 myimg" src="{{asset('/images/slider_3.jpg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container-fluid">
          <div class="row">
      <div style="margin-top:0px" class="news blue">
        <span>Latest News</span><span class="text1"><marquee>Travluu's Ride Booking Services are Expected to be Launched on 15 April 2020</marquee></span>
        </div>
    </div>
</div>
        <div class="container">
            <div class="row align-items-center">
                <div style="text-align:center" class="col-md-6">

      <a href="{{route('profile')}}">  <button type="submit" class="button" href="">Driver Registrations Open Now </button></a>
    </div>

        <div class="col-md-6 vertical-center">
        <p class="textview" style=";margin-top:29px;">To Register Yourself with Travluu as a
            Driver <a id="ok" href="{{route('profile')}}" style="font-size: 25px; color:white; background-color:#0277bc;" class="badge badge-info clicked">Click Here</a></p>
    </div>

    </div>

@include('Sliders.our_fleet')
    </div>

</body>

</html>
@include('layouts.footer')

