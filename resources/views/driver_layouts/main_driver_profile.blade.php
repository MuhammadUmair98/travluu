@include('driver_layouts.main_driver_layout')
<html>
<head>
<style>
    .btn-group-sm>.btn, .btn-sm {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;

}
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
</head>
<body>
    <div class="container testimonial-groupe">
        <div class="row">
            <div style="text-align:center" class="col-md-12 col-12 col ">

               &nbsp
               <a type="button" style="" class="btn {{Route::currentRouteNamed('profile') ? 'btn-black' : 'btn-yellow' }} btn-sm btne buttons" href="{{route('profile')}} "><i class="fa fa-id-card"></i> &nbsp&nbspPersonal Info    &nbsp </a>

                &nbsp
                <a type="button" style="" class="btn {{Route::currentRouteNamed('docs') ? 'btn-black' : 'btn-yellow' }} btn-sm btne buttons center" href="{{route('docs')}}" ><i class="fa fa-file-upload"></i> &nbsp&nbspDocuments Upload  &nbsp </a>

                &nbsp
                <a type="button" style="" class="btn btn-yellow btn-sm btne"><i class="fa fa-wallet"></i> &nbsp&nbspPayments  &nbsp </a>
                &nbsp

            </div>

        </div>


        </div>

</body>

</html>
