<html>
<head>
    <style>
footer {
    background:#0277bc;
    color:#d3d3d3;
    height:400px;
    position: relative;;
    margin-top:20px;

}
footer .footer-bottom{
    background:#343a40;
    color:#686868;
    height:60px;
    text-align:center;
    position:absolute;
    bottom: 0px;
    left:0px;
    padding-top: 20px;
    width:100%;

}
a:not([href]) {
    color: #ffffff;
    text-decoration: none;
}
html, body {
    max-width: 100% !important;
    overflow-x: hidden !important;
}
footer .footer-content{

    height:340px;

    display: flex;



}
footer .footer-content .footer-section{
    flex:1;

    padding: 25px;
}
footer .footer-content .footer-section h1,footer .footer-content .footer-section h2{
    color:white;

}
footer .footer-content .about .contacts span{
    display: block;
    font-size: 1.1em;
    margin: 8px;
}
footer .footer-content .about  p{
margin:2px;
margin-top: 12px;

}
footer .footer-content .about .socials span{

    font-size: 1.1em;
    margin: 8px;
    text-align: center;

}
footer .footer-content .about .socials i{
border: 1px solid gray;
width: 45px;
height: 41px;
padding-top: 10px;
margin-right: 5px;
text-align: center;
display: inline-block;
font-size:1.3em;
border-radius:5px;
transition: all 0.3s;

}
footer .footer-content .about .socials i:hover{
    color: white;
    border: 1px solid white;
    transition: all 0.3s;
}
footer .footer-content .link ul a{
    display: block;
    margin-bottom: 10px;
    font-size: 1.2em;
    transition: all 0.3s;
}
footer .footer-content .link ul a:hover{
    color:white;
    margin-left: 1px;
    transition: all 0.3s;
}
@media screen and (max-width: 600px) {
    footer{
height:700px;

 }
 footer .footer-content .about .socials i{
    width: 30px;
    height: 35px;
    margin-left: 5px;
 }
 footer .footer-content .about .socials span{

    font-size: 0.8em;
    margin: 2px;
    text-align: center;

}
footer .footer-content .link h2{
margin-left:22px;

}
footer .footer-content .thiscontact{

    margin-top: -12px;
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
@media screen and (max-width: 500px) {

 footer {

height:800px;





}
footer .footer-content .about .socials .fa-twitter{

    margin-left: 5px;
    margin-top: 5px;
 }
footer .footer-content .about .socials span{

font-size: 0.6em;
margin: 2px;
text-align: center;

}
.mobile-break { display: none; }



}
@media screen and (max-width: 395px) {

footer {

height:1200px;





}
footer .footer-section{
        display: block;
        float: none;

}
footer .footer-bottom{
height: 90px;
}
footer .footer-content .link h2{

margin-left: 0px;
}
footer .footer-content .thiscontact h2{

margin-left: 0px;
}

}
    }    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
       <body>

        <footer style="margin-top:30px">
            <div class="container-fluid">


                   <div class="footer-content">
                    <div class="row">

                    <div class="footer-section col-12 about ">
                        <a class="" href="#">
                            <img class="logoimg" src="https://www.travluu.com/images/logo.png" alt="">
                          </a>
                          <p style="color:#ffffff" class="">

                            Comfortable Pick and Drop Services at Cheapest rates from City to Airports, Stations and Places.
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                          </p>


                          <div class="contacts">
                        <span style="color:#ffffff"><i style="color:#ffffff" class="fa fa-phone" aria-hidden="true"></i>&nbsp;+442039830130</span>

                        <span style="color:#ffffff"><i style="color:#ffffff" class="fa fa-envelope" aria-hidden="true"></i>&nbsp;  info@travluu.com</span>
                        </div>
                        <div class="socials">
                          <a href="https://www.facebook.com/Travluu-103926517898509" style="text-decoration:none !important; color:#ffffff;">  <span style="text-decoration:none !important; color:inherit;"><i style="text-decoration:none !important;" class="fab fa-facebook" aria-hidden="true"></i> </span></a>


                            <span><i class="fab fa-instagram" aria-hidden="true"></i></span>
                            <span><i class="fab fa-youtube" aria-hidden="true"></i></span>
                            <span><i class="fab fa-twitter" aria-hidden="true"></i></span>


                        </div>
                </div>
                <br class="mobile-break">
                    <div class="footer-section col-12  link ">
                        <h2>Quick Links</h2>
                    <ul>
                    <a href="{{route('main_home')}}" style="text-decoration:none !important; color:#ffffff;"><li>Home</li> </a>
                    <a href="{{route('home')}}" style="text-decoration:none !important; color:#ffffff;"><li>Ride with us?</li> </a>
                    <a href="{{route('profile')}}" style="text-decoration:none !important; color:#ffffff;"><li>Personal Info</li></a>
                    <a href="{{route('docs')}}" style="text-decoration:none !important; color:#ffffff;"><li>Documents Upload</li> </a>
                    <a href="{{route('add_driver')}}" style="text-decoration:none !important; color:#ffffff;"><li>Add a Motor</li> </a>
                    <a href="{{route('slider')}}" style="text-decoration:none !important; color:#ffffff;"><li>Motor Categories</li> </a>

                    </ul>
                    </div>

                    <div class="footer-section">
                        <div class="container-fluid">
                            <div class="row" style="margin-top:-5px;">
                                <div class="col-12 ">
                        <h2>Contacts</h2>
                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                        <form action="" method="post">
                            <input type="text" class="form-control" placeholder="Your email address">
                            <br>
                            <textarea type="text" class="form-control" placeholder="Your Message"></textarea>
                            <div style="text-align:center; margin-top:13px;">
                            <button type="submit" class="btn btn-success">
                             <i class="fa fa-envelope" aria-hidden="true"></i>
                             Send
                            </button>
                        </div>

                        </form>
                    </div>
                    </div>
                    </div>
                </div>

                </div>

                   </div>
                   <div class="footer-bottom">
                       <p class="text-light">Copyright © 2020 Travluu Pvt Ltd. All rights reserved. </p>
                </div>
            </div>
        </footer>

       </body>


       <html>
