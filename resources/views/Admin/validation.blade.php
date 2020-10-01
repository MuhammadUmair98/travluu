@include('Admin.main_template')
<html>
<head>
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">
                    <form method="POST" action="{{route('changeData')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Motor Category') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="lang" name="type" placeholder="Enter the Brand" required autocomplete="type">
                                        <option selected value="None">
                                            None of the above
                                        </option>


                                        <option value="Economy">
                                            Economy
                                        </option>
                                        <option value="Comfort">
                                           Comfort
                                        </option>
                                        <option value="Business">
                                         Business
                                        </option>
                                        <option value="7 Seater">
                                            7 Seater
                                        </option>
                                        <option value="Van">
                                            Van
                                        </option>
                                        <option value="Luxury">
                                            Luxury
                                        </option>
                                        <option value="Helicopter">
                                            Helicopter

                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Passenger Seats" class="col-md-4 col-form-label text-md-right">{{ __('Passenger Capacity') }}</label>
                                <div class="col-md-6">
                                <select id="Passenger" type="text"  class="form-control pass" readonly name="Passenger" required autocomplete="Passenger">
                                    <option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Luggage" class="col-md-4 col-form-label text-md-right">{{ __('Luggage Capacity') }}</label>
                            <div class="col-md-6">
                            <select id="Luggage" type="text"  class="form-control lugg" readonly   name="Luggage" required autocomplete="Luggage">
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                            </select>
                        </div>
                        </div>
                        <div style="text-align:center">
                            <button class="btn btn-success" name="submit" type="submit">Success</button>
                            <button class="btn btn-danger"  >Failure</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
$(function(){
    $('select.form-control').change(function(){
        var userSelect = $(this).find(":selected").val();
        if(userSelect=='Economy' || userSelect=='Comfort'){
            $('.pass').val('3');
            $('.lugg').val('2');
        }
        if(userSelect=='Business'){
            $('.pass').val('3');
            $('.lugg').val('3');
        }
        if(userSelect=='7 Seater'){
            $('.pass').val('5');
            $('.lugg').val('4');
        }
        if(userSelect=='Van'){
            $('.pass').val('8');
            $('.lugg').val('6');
        }
        if(userSelect=='Luxury'){
            $('.pass').val('4');
            $('.lugg').val('4');
        }
        if(userSelect=='Helicopter'){
            $('.pass').val('5');
            $('.lugg').val('3');
        }


    $('.result').text($( ".auto-select option:selected" ).text());
    });
})
</script>
</html>
