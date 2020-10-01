@include('Admin.admin_template')
<html>
<head>

</head>
<body>
<div class="container">
<div class="row">
<div style="" class="col-md-9">
    <div class="thumbnail1 col-md-3 col-12" style="margin-top:10px ">

        @foreach($viewingdata as $viewingdatas)
        @isset($viewingdatas->nic_F)
   <a href="\public\image\{{$viewingdatas->nic_F}}"> <img id="sampleImage1" class="img-thumbnail"  src="\public\image\{{$viewingdatas->nic_F}}"></a>
   <div class="" style="text-align:center;margin-top:10px;">
  <b> <p>Insurance</p> </b>
</div>
@endisset
     @endforeach

    </div>
    <div class="thumbnail1 col-md-3 col-12" style="margin-top:10px ">

        @foreach($viewingdata as $viewingdatas)
        @isset($viewingdatas->nic_B)
        <a href="\public\image\{{$viewingdatas->nic_B}}">  <img id="sampleImage1" class="img-thumbnail"  src="\public\image\{{$viewingdatas->nic_B}}"></a>
    <div class="" style="text-align:center;margin-top:10px;">
        <b> <p>Identity</p> </b>
      </div>
    @endisset
     @endforeach

    </div>
    <div class="thumbnail1 col-md-3 col-12" style="margin-top:10px ">

        @foreach($viewingdata as $viewingdatas)
        @isset($viewingdatas->lic_A)
        <a href="\public\image\{{$viewingdatas->lic_A}}">   <img id="sampleImage1" class="img-thumbnail"  src="\public\image\{{$viewingdatas->lic_A}}"></a>
    <div class="" style="text-align:center;margin-top:10px;">
        <b> <p>License</p> </b>
      </div>
    @endisset
     @endforeach

    </div>




</div>


</div>

</div>
</body>

</html>
