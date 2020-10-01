@include('Admin.main_template')
<html>
<head>
<style>
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
    <div class="container">
        <div class="row">
        <div style="" class="col-md-9">
            <div class="col-md-4 col-6">
            <div class="thumbnail1" style="margin-top:10px">
                @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)

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


                <div class="col-md-4 col-6">
                    <div  class="thumbnail1" style="margin-top:10px">
                        @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)
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
                   <div class="col-md-4 col-6">
                    <div  class="thumbnail2" style="margin-top:10px">
                        @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)
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
                   <div class="col-md-4 col-6">
                    <div  class="thumbnail2" style="margin-top:10px">
                        @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)
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
                   <div class="col-md-4 col-6">
                    <div  class="thumbnail2" style="margin-top:10px">
                        @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)
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
                   <div class="col-md-4 col-6">
                    <div  class="thumbnail2" style="margin-top:10px">
                        @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)
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
                   <div class="col-md-4 col-6">
                    <div  class="thumbnail2" style="margin-top:10px">
                        @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)
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
                   <div class="col-md-4 col-6">
                    <div  class="thumbnail2" style="margin-top:10px">
                        @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)
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
                   <div class="col-md-4 col-6">
                    <div  class="thumbnail2" style="margin-top:10px">
                        @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)
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
                   <div class="col-md-4 col-6">
                    <div  class="thumbnail2" style="margin-top:10px">
                        @isset($viewingdata)
                @foreach ($viewingdata as $image_datas)
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



</body>
</html>
