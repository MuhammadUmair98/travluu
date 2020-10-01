@include('driver_layouts.main_driver_layout')
<html>
<head>
<link rel="stylesheet" href="{{asset('/css/add.css')}}">
<style>
    footer {

     margin-top:60px;

    }
    body{
    background-color: #fff;

    }
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
<div class="container-fluid">
<div class="row">
    <div style="margin-left:16px" class="col-md-11">
    <a style="color:white" href="{{route('add_driver')}}" class="btn btn-success btne" >Add</a>
    <br/>
    <br/>

<table style="" class="table table-bordered">
    <thead>
      <tr>

        <th scope="col">Name</th>
        <th scope="col">Year</th>
        <th scope="col">License Plate</th>
        <th scope="col">Color</th>
        <th scope="col">Motor Category</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach($driver_data as $driver_datas)
      <tr>

        <td><a href={{route('save_vehicles_images',['post_id'=>$driver_datas->id])}}> {{$driver_datas->Brand}}</a></td>
        <td>{{$driver_datas->Year}}</td>
        <td>{{$driver_datas->License_plate}}</td>
        <td>{{$driver_datas->color}}</td>
        <td>{{$driver_datas->transport_type}}</td>
        <td>{{$driver_datas->status}}</td>


      </tr>
@endforeach

    </tbody>
  </table>
</div>

</div>
</div>
@include('layouts.footer')
</body>

</html>
