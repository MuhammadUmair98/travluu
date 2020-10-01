@include('Admin.admin_template')
<html>
    <head>

<style>
 label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
    }
    body {
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
@media screen and (max-width: 780px) {
  .column {
    width: 100%;
  }
  table {
        display: inline-block;
    overflow-x: auto;
    white-space: nowrap;

}
}
</style>

    </head>
    <body>


        <table class="table">
            <caption>List of users personal info</caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Location</th>
                <th scope="col">Generated Referral Code</th>
                <th scope="col">Reffered by</th>
              </tr>
            </thead>
            <tbody>
                @foreach($viewingdata as $viewingdatas)
              <tr>
                <th scope="row">{{$viewingdatas->id}}</th>
                <td>{{$viewingdatas->name}}</td>
                <td>{{$viewingdatas->email}}</td>
                <td>{{$viewingdatas->age}}</td>
                <td>{{$viewingdatas->Phone_Number}}</td>
                <td>{{$viewingdatas->base_location}}</td>
                <td>{{$viewingdatas->generated_referral_code}}</td>
                <td>{{$viewingdatas->referred_by}}</td>
              </tr>
@endforeach
            </tbody>
          </table>

        </body>
</html>
