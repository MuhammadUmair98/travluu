<!doctype html>
<html>
@extends('layouts.app')

@section('content')
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBUD-udhrnP-UYqQIzXeq0rZ6GjRZ4KCi0"></script>

</head>
<body>




<script>

    $(document).ready(function(){
  $(".dropdown-menu a").click(function(){
    var selText = $(this).text();
    if(selText==="Route"){
        $( "#some-menu" ).load( "form", function() {
            var searchInput = 'autocomplete';
            var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
    types: ['geocode'],
});
var destination='destination'
var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(destination)), {
    types: ['geocode'],
});
});
    }
    else{

        $( "#some-menu" ).load( "foo", function() {


});

    }


  });
});

$(document).ready(function(){


    $( "#some-menu" ).load( "form", function() {
        var searchInput = 'autocomplete';
            var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
    types: ['geocode'],
});
var destination='destination'
var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(destination)), {
    types: ['geocode'],
});

});

});




    </script>

</body>
@endsection
</html>
<style>

   .jumbotron{
       width: 100%;
       margin-top: -24px;
       border-radius: 0 !important;
       height:420

   }


   .well {
   background-color: rgba(245, 245, 245, 0.4);
   height:250px;
}
   .img-jmbo{
background-image: url('images/back.jpg');
background-size: cover;

   }


</style>

