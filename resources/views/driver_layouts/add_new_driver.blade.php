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
                                        <select class="form-control" id="brand" name="brand" placeholder="Enter the Brand" required autocomplete="brand">

                                            <option value="" disabled selected hidden>Please Choose...</option>
                                            <option value="Corolla">Corolla &nbsp;</option>
                                            <option value="Honda">Honda</option>
                                            <option value="Civic">Civic</option>
                                            <option value="Mercedes">Mercedes</option>
                                            <option value="Buggati">Buggati</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="model" disabled name="model"  required autocomplete="model">

                                            <option value="" disabled selected hidden>No Brand Selected</option>

                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" id="year"  name="year"  required autocomplete="year">
                                            <option value="">Year</option> <option value="2020">
                                                2020
                                            </option><option value="2019">
                                                2019
                                            </option><option value="2018">
                                                2018
                                            </option><option value="2017">
                                                2017
                                            </option><option value="2016">
                                                2016
                                            </option><option value="2015">
                                                2015
                                            </option><option value="2014">
                                                2014
                                            </option><option value="2013">
                                                2013
                                            </option><option value="2012">
                                                2012
                                            </option><option value="2011">
                                                2011
                                            </option><option value="2010">
                                                2010
                                            </option><option value="2009">
                                                2009
                                            </option><option value="2008">
                                                2008
                                            </option><option value="2007">
                                                2007
                                            </option><option value="2006">
                                                2006
                                            </option><option value="2005">
                                                2005
                                            </option><option value="2004">
                                                2004
                                            </option><option value="2003">
                                                2003
                                            </option><option value="2002">
                                                2002
                                            </option><option value="2001">
                                                2001
                                            </option><option value="2000">
                                                2000
                                            </option><option value="1999">
                                                1999
                                            </option><option value="1998">
                                                1998
                                            </option><option value="1997">
                                                1997
                                            </option><option value="1996">
                                                1996
                                            </option><option value="1995">
                                                1995
                                            </option><option value="1994">
                                                1994
                                            </option><option value="1993">
                                                1993
                                            </option><option value="1992">
                                                1992
                                            </option><option value="1991">
                                                1991
                                            </option><option value="1990">
                                                1990
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('License Plate') }}</label>
                                    <div class="col-md-6">
                                    <input id="License" type="text" class="form-control" name="License" required autocomplete="License">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Motor Category') }}</label>

                                <div class="col-md-6">
                                    <input id="type" type="text" class="form-control" readonly value="To be decided by Travluu" name="type" required autocomplete="type">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Passenger Seats" class="col-md-4 col-form-label text-md-right">{{ __('Passenger Capacity') }}</label>
                                <div class="col-md-6">
                                <input id="Passenger" type="text" value="To be decided by Travluu" class="form-control" readonly name="Passenger" required autocomplete="Passenger">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Luggage" class="col-md-4 col-form-label text-md-right">{{ __('Luggage Capacity') }}</label>
                            <div class="col-md-6">
                            <input id="Luggage" type="text" class="form-control" readonly value="To be decided by Travluu" name="Luggage" required autocomplete="Luggage">
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Colour') }}</label>
                        <div class="col-md-6">
                            <select class="form-control" id="color"  name="color"  required autocomplete="color">

                                <option value="">Other</option>
                                 <option value="beige">

                                 Beige
                                                            </option><option value="black">

                                 Black
                                                            </option><option value="blue">

                                 Blue
                                                            </option><option value="brown">

                                 Brown
                                                            </option><option value="gold">

                                 Gold
                                                            </option><option value="gray">

                                 Gray
                                                            </option><option value="green">

                                 Green
                                                            </option><option value="orange">

                                 Orange
                                                            </option><option value="purple">

                                 Purple
                                                            </option><option value="red">
                                 Red
                                                            </option><option value="silver">

                                 Silver
                                                            </option><option value="white">

                                 White
                                                            </option><option value="yellow">

                                Yellow
                                                            </option></select>



                        </div>
                    </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                             </div>

                        </div>
                    </div>


                 <div class="col-md-6">
<h4>Please save your Vehicle to add photos</h4>

</div>
                </div>
            </div>


        <script>

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
        </script>
    </body>
</html>
@include('layouts.footer')
