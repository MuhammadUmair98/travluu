@include('driver_layouts.main_driver_profile')
<html>
<head>

<style>
  body{
      background-color: #ffffff;
  }
  .mydocuments{
    margin-top:20px;
  }
  .testimonial-group > .row {
  overflow-x: auto;
  white-space: nowrap;
}
.testimonial-group > .row > .col-xs-4 {
  display: inline-block;
  float: none;
}

</style>
</head>
<body>
    <div class="container mydocuments">
        <div class="row">
            <div class="col-md-8">
                <div id="carrier-documents"><div class="col-md-5 col-md-offset-1"><h3>Documents Upload</h3> <hr> <form method="POST" action={{route('Documents_Saved')}} class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div data-v-548a2aa3="" class="form-group"><label data-v-548a2aa3="" for="registration_certificate" class="control-label col-sm-5 col-md-12"><!---->
                  Insurance
                </label> <div data-v-548a2aa3="" class="form-field col-sm-7 col-md-12">
                    <input name="F_image" id="registration_certificate" accept="image/jpg, image/jpeg, image/png, application/pdf" type="file" class="form-control"></div></div><div data-v-548a2aa3="" class="form-group"><label data-v-548a2aa3="" for="passenger_license" class="control-label col-sm-5 col-md-12"><!---->
                    Identity
                </label> <div data-v-548a2aa3="" class="form-field col-sm-7 col-md-12">
                    <input data-v-548a2aa3="" name="B_image" id="passenger_license" accept="image/jpg, image/jpeg, image/png, application/pdf" type="file" class="form-control"></div></div><div data-v-548a2aa3="" class="form-group"><label data-v-548a2aa3="" for="passenger_insurance" class="control-label col-sm-5 col-md-12"><!---->
                    License
                </label> <div data-v-548a2aa3=""  class="form-field col-sm-7 col-md-12">
                    <input data-v-548a2aa3="" name="L_image" id="passenger_insurance" accept="image/jpg, image/jpeg, image/png, application/pdf" type="file" class="form-control"></div></div> <div data-v-548a2aa3="" class="form-group"><div data-v-548a2aa3="" class="col-sm-8 col-sm-offset-4 col-md-12 col-md-offset-0"><button data-v-548a2aa3="" type="submit" class="btn btn-success">
                    Submit
                </button></div></div> <div data-v-548a2aa3="" class="gt-alert"><span></span></div></form></div>
                </div>

            </div>








            <div class="col-md-4 col-12">
                <div class="row">
            <div class="thumbnail1 col-md-6 col-12" style="margin-top:10px ">
                @isset($document)
                @foreach($document as $documents)
                @isset($documents->nic_F)
            <img id="sampleImage1" class="img-thumbnail"  src="\public\image\{{$documents->nic_F}}">
             @endisset
            @endforeach
                @endisset
            </div>
            <div  class="thumbnail1 col-md-6 col-12" style="margin-top:10px">
                @isset($document)
                @foreach($document as $documents)
                @isset($documents->nic_B)
            <img id="sampleImage1" class="img-thumbnail"  src="\public\image\{{$documents->nic_B}}">
            @endisset
                @endforeach
                @endisset
            </div>
        </div>
        <div class="row">

        <div  class="thumbnail1 col-md-6 col-12 justify-content-center" style="margin-top:10px;text-align:center">
            @isset($document)
            @foreach($document as $documents)
            @isset($documents->lic_A)
        <img id="sampleImage1" class="img-thumbnail"  src="\public\image\{{$documents->lic_A}}">
        @endisset
        @endforeach
            @endisset
        </div>
    </div>
        </div>

          </div>

    </div>

</body>
@include('layouts.footer')
</html>
