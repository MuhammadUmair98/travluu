<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



    </head>
    <body>
<div style="margin-top:40px" class="container">
    <div class="row justify-content-center">

        <div class="col-md-7 col-sm-7 col-lg-7">
            <div class='row justify-content-center align-items-center well'>
                <div class="col-md-11 col-sm-11 col-lg-11">
                <form class="" method="get" action="{{route('req_driver')}}">
                    @csrf
        <div class="form-group">
        <input type="search" style="" class="form-control input" name="current" id="autocomplete" placeholder="From: airport,train,station,city,hotel, other place " required autocomplete="current"/>
    </div>
    <br>
    <div class="form-group ">
        <input type="search"  class="form-control input_des" name="destination" id="destination" placeholder="To: airport,train,station,city,hotel, other place" required autocomplete="current"/>
    </div>
    <div style="text-align:center; margin-top:40px;">
    <button type="submit" style="width:75px" class="btn btn-success" >  GO  </button>
    </div>
    </div>
    </div>
    </div>
    </form>

    </div>
    </div>
        </div>

    </body>
    <script>

        $(document).ready(function(){


        });
        </script>
</html>
