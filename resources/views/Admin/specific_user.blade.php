<html>
<head>
</head>
<body>
@include('Admin.admin_template')

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
        @foreach($viewingdata as $viewingdatas)
      <tr>



      <td><a href="{{route('Pr_vehics',['id'=>$viewingdatas->id,'email'=>$viewingdatas->email])}}">{{$viewingdatas->Brand}}</a></td>
        <td>{{$viewingdatas->Year}}</td>
        <td>{{$viewingdatas->License_plate}}</td>
        <td>{{$viewingdatas->color}}</td>
        <td>{{$viewingdatas->transport_type}}</td>
        <td>{{$viewingdatas->status}}</td>








      </tr>
      @endforeach

    </tbody>
  </table>

                  </body>
</html>
