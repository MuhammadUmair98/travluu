
<html>
    <head>
<style>

</style>
    </head>
    <body>
        @include('Admin.admin_template')
        
        <div class="container">
            <div class="row ">
              <div class="col-md-12">
                  <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">

                <div class="panel-heading">Assign a Refferal Number</div>
                <div class="panel-body">
                    @foreach($viewingdata as $viewingdatas)
                <form method="POST" action="{{route('saveReferral',['email'=>$viewingdatas->email])}}">
                    @csrf
                        <div class="form-group">
                          <label for="email">Referral Number:</label>
                          
                          <input type="text" class="form-control" name="referral" required id="Referral" placeholder="Referral Number">
                          </div>
                          <div style="text-align:center">
                          <button type="submit" class="btn btn-primary">Assign</button>
                        
                          </div>
                    </form>
            @endforeach
        
            </div>
              </div>
              
             
              @if(isset($alert))
              <div class="alert alert-success">
                  <strong>Success!</strong> {{$alert}}.
                </div>
                @endisset
            </div>
        </div>
        </div>
    </div>
        </div>
        
               
           
    </body>
</html>