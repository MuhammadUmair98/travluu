@include('driver_layouts.main_driver_layout')
<html>
    <head>
<style>
    select:invalid { color: gray; }
.buttons {
    background-color: #0277bc;
    color: #ffffff !important;

}
.buttons:hover {
    background-color: #01579b;
    color: #ffffff;

}
input[type="file" i] {
    -webkit-appearance: initial;
    background-color: initial;
    cursor: default;
    align-items: baseline;
    color: inherit;
    text-align: start !important;
    padding: initial;
    border: initial;
}
}
.dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

select.form-control {

    text-indent: px;
}

.on{
    margin-left: 16px;
}
body {
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
@media screen and (max-width: 600px) {
  .this {

    margin-top:20px;
    margin-left:15px;

  }

}
.thumbnail{
    height:220px !important;
    width:220px !important;
}
.img-thumbnail{
    height:200px !important;
    width:200px !important;
    overflow: hidden !important;
}

</style>
    </head>
    <body>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6">
                    <div class="card on">
                        <div class="card-header">{{ __('Add a New Vehicle') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('save_new_driver') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" disabled id="brand" name="brand" placeholder="Enter the Brand" required autocomplete="brand">
                                             @foreach ($vehicle_data as $datas)



                                            <option>{{$datas->Brand}} &nbsp;</option>
                                            @endforeach

                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" disabled id="model" disabled name="model"  required autocomplete="model">

                                            @foreach ($vehicle_data as $datas)



                                            <option>{{$datas->Model}} &nbsp;</option>
                                            @endforeach

                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" disabled id="year"  name="year"  required autocomplete="year">
                                            @foreach ($vehicle_data as $datas)



                                            <option>{{$datas->Year}} &nbsp;</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('License Plate') }}</label>
                                    <div class="col-md-6">
                                        @foreach ($vehicle_data as $datas)
                                    <input id="License" type="text" class="form-control" value={{$datas->License_plate}} disabled name="License" required autocomplete="License">
                                @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Transport Type') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control"  name="type" disabled placeholder="Transport Type" required autocomplete="type">

                                        @foreach ($vehicle_data as $datas)



                                        <option>{{$datas->transport_type}} &nbsp;</option>
                                        @endforeach>


                                      </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Passenger Seats" class="col-md-4 col-form-label text-md-right">{{ __('No of Passenger Seats') }}</label>
                                <div class="col-md-6">
                                    @foreach ($vehicle_data as $datas)
                                <input id="Passenger" type="text" class="form-control" disabled name="Passenger" value="{{$datas->pass_seats}}" required autocomplete="Passenger">
                            @endforeach
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Luggage" class="col-md-4 col-form-label text-md-right">{{ __('No of Luggage Places') }}</label>
                            <div class="col-md-6">
                                @foreach ($vehicle_data as $datas)
                            <input id="Luggage" disabled type="text" class="form-control" value="{{$datas->lugg_places}}" name="Luggage" required autocomplete="Luggage">
                       @endforeach
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Colour') }}</label>
                        <div class="col-md-6">
                            <select class="form-control" disabled id="color"  name="color"  required autocomplete="color">

                                @foreach ($vehicle_data as $datas)



                                <option>{{$datas->color}} &nbsp;</option>
                                @endforeach>

                            </select>



                        </div>
                    </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button disabled type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                             </div>

                        </div>
                    </div>


                 <div class="col-md-6 col-12 this">
<h4>Please save your Vehicle to add photos</h4>
<div data-v-05935515="" class="media"><div data-v-05935515="" class="media-left"><img data-v-05935515="" src="" class="media-object"></div> <div data-v-05935515="" class="media-body"><div data-v-05935515="" class="bold">Offers with your vehicle photos are more likely to be chosen by passengers</div> <i data-v-05935515="">Carefully read the rules for posting photos below.</i></div></div> <hr data-v-05935515=""> <b data-v-05935515="">Vehicle and photos should meet the following requirements:</b> <ul data-v-05935515=""><li data-v-05935515="">
    information you specified about the vehicle should be authentic
</li><li data-v-05935515="">
    car in the photos must be oriented horizontally
</li><li data-v-05935515="">
    you should have all rights to use and distribute the photo you want to upload to our website
</li></ul> <b data-v-05935515="">Photos should not contain:</b> <ul data-v-05935515=""><li data-v-05935515="">
    people
</li><li data-v-05935515="">
    animals
</li><li data-v-05935515="">
    other vehicles
</li><li data-v-05935515="">
    impurity
</li><li data-v-05935515="">
    personal belongings
</li><li data-v-05935515="">
    added graphics
</li><li data-v-05935515="">
    inscriptions
</li><li data-v-05935515="">
    images
</li></ul> <p data-v-05935515="">Your photo will appear to passengers after verification process (1 to 5 days).</p>
<li>
<input type="checkbox" class="form-check-input" id="CheckBox1" onclick="terms_changed(this)">
&nbsp; <label class="form-check-label" style="font-style:italic" for="exampleCheck1">I have read the rules for posting photos</label>
</li>
<hr>
&nbsp;

@foreach ($vehicle_data as $datas)
<form method="POST" action="{{route('save_images',['this_id'=>$datas->id])}}" id="target" enctype="multipart/form-data">
  @csrf
    <label style="color:white; margin-left:-5px;"  id="rmadd" style="align-text:center"  type="submit"  class="btn btn-info btne disabled">
    Add Photo
     <input type="file" id="file" name={{$name}} accept="image/jpg, image/jpeg, image/png, application/pdf" onchange="readURL()" disabled hidden>
    </label>
</form>
@endforeach
<br/>
<div style="margin-left:-15px" class="row">
    <div id="change" class="col-md-6 col-6">
<div class="thumbnail1" style="margin-top:10px">
@isset($images_data)
@foreach ($images_data as $image_datas)

@isset($image_datas->image1)

<a href="" class="image-link" data-toggle="modal" data-target="#myModal"><img id="sampleImage" class="img-thumbnail"  src="\public\image\{{$image_datas->image1}}"></a>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block;margin-left: auto; height:350px !important; width:350px !important;  margin-right: auto; " src="\public\image\{{$image_datas->image1}}" class="img-thumbnail">
          </div>
      </div>
    </div>
  </div>   
@endisset
    @endforeach
@endisset
</div>
    </div>


<div id="change" class="col-md-6 col-6">
    <div  class="thumbnail1" style="margin-top:10px">
        @isset($images_data)
@foreach ($images_data as $image_datas)
@isset($image_datas->image2)
<a href="" class="image-link" data-toggle="modal" data-target="#myModal2"><img id="sampleImage1" class="img-thumbnail"  src="\public\image\{{$image_datas->image2}}"></a>
<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block;margin-left: auto; height:350px !important; width:350px !important;  margin-right: auto; " src="\public\image\{{$image_datas->image2}}" class="img-thumbnail">
          </div>
      </div>
    </div>
  </div>    
@endisset
    @endforeach
    @endisset

</div>
   </div>
   <div id="change" class="col-md-6 col-6">
    <div  class="thumbnail2" style="margin-top:10px">
        @isset($images_data)
@foreach ($images_data as $image_datas)
@isset($image_datas->image3)
<a href="" class="image-link" data-toggle="modal" data-target="#myModal3">  <img id="sampleImage2" class="img-thumbnail"  src="\public\image\{{$image_datas->image3}}"></a>
<div id="myModal3" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block;margin-left: auto; height:350px !important; width:350px !important;  margin-right: auto; " src="\public\image\{{$image_datas->image3}}" class="img-thumbnail">
          </div>
      </div>
    </div>
  </div> 
@endisset
    @endforeach
    @endisset

</div>
   </div>
   <div id="change" class="col-md-6 col-6">
    <div  class="thumbnail2" style="margin-top:10px">
        @isset($images_data)
@foreach ($images_data as $image_datas)
@isset($image_datas->image4)
<a href="" class="image-link" data-toggle="modal" data-target="#myModal4"><img id="sampleImage3" class="img-thumbnail"  src="\public\image\{{$image_datas->image4}}"></a>
<div id="myModal4" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block;margin-left: auto; height:350px !important; width:350px !important;  margin-right: auto; " src="\public\image\{{$image_datas->image4}}" class="img-thumbnail">
          </div>
      </div>
    </div>
  </div> 
@endisset
    @endforeach
    @endisset

</div>

   </div>
   <div id="change" class="col-md-6 col-6">
    <div  class="thumbnail2" style="margin-top:10px">
        @isset($images_data)
@foreach ($images_data as $image_datas)
@isset($image_datas->image5)
<a href="" class="image-link" data-toggle="modal" data-target="#myModal5"> <img id="sampleImage4" class="img-thumbnail"  src="\public\image\{{$image_datas->image5}}"></a>
<div id="myModal5" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block;margin-left: auto; height:350px !important; width:350px !important;  margin-right: auto; " src="\public\image\{{$image_datas->image5}}" class="img-thumbnail">
          </div>
      </div>
    </div>
  </div>
@endisset
    @endforeach
    @endisset

</div>

   </div>
   <div id="change" class="col-md-6 col-6">
    <div  class="thumbnail2" style="margin-top:10px">
        @isset($images_data)
@foreach ($images_data as $image_datas)
@isset($image_datas->image6)
<a href="" class="image-link" data-toggle="modal" data-target="#myModal6">  <img id="sampleImage4" class="img-thumbnail"  src="\public\image\{{$image_datas->image6}}"></a>
<div id="myModal6" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block;margin-left: auto; height:350px !important; width:350px !important;  margin-right: auto; " src="\public\image\{{$image_datas->image6}}" class="img-thumbnail">
          </div>
      </div>
    </div>
  </div>
@endisset
    @endforeach
    @endisset

</div>

   </div>
   <div id="change" class="col-md-6 col-6">
    <div  class="thumbnail2" style="margin-top:10px">
        @isset($images_data)
@foreach ($images_data as $image_datas)
@isset($image_datas->image7)
<a href="" class="image-link" data-toggle="modal" data-target="#myModal7"><img id="sampleImage4" class="img-thumbnail"  src="\public\image\{{$image_datas->image7}}"></a>
<div id="myModal7" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block;margin-left: auto; height:350px !important; width:350px !important;  margin-right: auto; " src="\public\image\{{$image_datas->image7}}" class="img-thumbnail">
          </div>
      </div>
    </div>
  </div>
@endisset
    @endforeach
    @endisset

</div>

   </div>
   <div id="change" class="col-md-6 col-6">
    <div  class="thumbnail2" style="margin-top:10px">
        @isset($images_data)
@foreach ($images_data as $image_datas)
@isset($image_datas->image8)
<a href="" class="image-link" data-toggle="modal" data-target="#myModal8"> <img id="sampleImage4" class="img-thumbnail"  src="\public\image\{{$image_datas->image8}}"></a>
<div id="myModal8" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block;margin-left: auto; height:350px !important; width:350px !important;  margin-right: auto; " src="\public\image\{{$image_datas->image8}}" class="img-thumbnail">
          </div>
      </div>
    </div>
  </div>
@endisset
    @endforeach
    @endisset
</div>
   </div>
   <div id="change" class="col-md-6 col-6">
    <div  class="thumbnail2" style="margin-top:10px">
        @isset($images_data)
@foreach ($images_data as $image_datas)
@isset($image_datas->image9)
<a href="" class="image-link" data-toggle="modal" data-target="#myModal9"><img id="sampleImage4" class="img-thumbnail"  src="\public\image\{{$image_datas->image9}}"></a>
<div id="myModal9" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block; height:350px !important; width:350px !important; margin-left: auto; margin-right: auto; " src="\public\image\{{$image_datas->image9}}" class="img-thumbnail">
          </div>
      </div>
    </div>
  </div>
@endisset
    @endforeach
    @endisset
</div>
   </div>
   <div id="change" class="col-md-6 col-6">
    <div  class="thumbnail2" style="margin-top:10px">
        @isset($images_data)
@foreach ($images_data as $image_datas)
@isset($image_datas->image10)
<a href="" class="image-link" data-toggle="modal" data-target="#myModal10"> <img id="sampleImage4" class="img-thumbnail"  src="\public\image\{{$image_datas->image10}}"></a>
<div id="myModal10" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
              <img style="display: block; height:350px !important; width:350px !important; margin-left: auto; margin-right: auto; " src="\public\image\{{$image_datas->image10}}" class="">
          </div>
      </div>
    </div>
  </div>
@endisset
    @endforeach
    @endisset
</div>
   </div>

                 </div>

</div>





</div>

            </div>
        </div>
    </div>


        <script>


function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.

        $('#rmadd').removeAttr("disabled");
        $('#file').removeAttr('disabled');
        $('#rmadd').removeClass('btn-info');
        $('#rmadd').removeClass('disabled');
        $('#rmadd').addClass('btn-primary');

    } else{
        //Otherwise, disable the submit button.
        $('#rmadd').addClass('btn-info');
    $('#rmadd').removeClass('btn-primary');
    $('#file').attr('disabled',true);
    $('#rmadd').addClass('disabled');
        document.getElementById("rmadd").disabled = true;
    }
}

        $(document).ready(function() {


            $("#brand").change(function() {
                var el = $(this) ;

if(el.val() === "Corolla" ) {
    $("#model").removeAttr('disabled');
    var newOptions = {"GLI Corolla": "GLI Corolla",
  "XLI Corolla": "XLI Corolla",
  "HLI Corolla": "HLI Corolla"
};
var $el = $("#model");
$el.empty(); // remove old options
$.each(newOptions, function(key,value) {
  $el.append($("<option></option>")
     .attr("value", value).text(key));
});

}
  else if(el.val() === "Honda" ) {

    $("#model").removeAttr('disabled');
    var newOptions = {"GLI Honda": "GLI Honda",
  "XLI Honda": "XLI Honda",
  "HLI Honda": "HLI Honda"
};
var $el = $("#model");
$el.empty(); // remove old options
$.each(newOptions, function(key,value) {
  $el.append($("<option></option>")
     .attr("value", value).text(key));
});

}
else if(el.val() === "Civic" ) {

$("#model").removeAttr('disabled');
var newOptions = {"GLI Civic": "GLI Civic",
"XLI Civic": "XLI Civic",
"HLI Civic": "HLI Civic"
};
var $el = $("#model");
$el.empty(); // remove old options
$.each(newOptions, function(key,value) {
$el.append($("<option></option>")
 .attr("value", value).text(key));
});

}
else if(el.val() === "Mercedes" ) {

$("#model").removeAttr('disabled');
var newOptions = {"GLI Mercedes": "GLI Mercedes",
"XLI Mercedes": "XLI Mercedes",
"HLI Mercedes": "HLI Mercedes"
};
var $el = $("#model");
$el.empty(); // remove old options
$.each(newOptions, function(key,value) {
$el.append($("<option></option>")
 .attr("value", value).text(key));
});

}
});
          });



          function readURL(){

            $( "#target" ).submit();


          }

  //Our checkbox
var checkbox = document.getElementById('CheckBox1');

//This function saves the checkbox value:
function save() {
    localStorage.setItem('check', checkbox.checked);
}

//This function reloads the checkbox like how it was from localStorage:
window.onload = function() {
    var checked = JSON.parse(localStorage.getItem('check'));
    checkbox.checked = checked;
    if(checkbox.checked) {
    $('#rmadd').removeAttr("disabled");
        $('#file').removeAttr('disabled');
        $('#rmadd').removeClass('btn-info');
        $('#rmadd').removeClass('disabled');
        $('#rmadd').addClass('btn-primary');
} else {
      $('#rmadd').addClass('btn-info');
      $('#rmadd').removeClass('btn-primary');
      $('#file').attr('disabled');
      $('#rmadd').addClass('disabled');
      document.getElementById("rmadd").disabled = true;
}

}

//Remember to save whenever the checkbox changes:
checkbox.addEventListener("change", save);


        </script>
      @include('layouts.footer')
    </body>
</html>

