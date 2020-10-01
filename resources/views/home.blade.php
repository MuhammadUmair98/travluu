@extends('layouts.app')

@section('content')
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/intlTelInput.css') }}">
    <script src={{asset('/js/intlTelInput.min.js')}}></script>
    <script src={{asset('/js/intlTelInput-jquery.min.js')}}></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBUD-udhrnP-UYqQIzXeq0rZ6GjRZ4KCi0"></script>

    <style>
        .input-group .form-control, .intl-tel-input { width: 100%; }
        .iti{ width: 100%;}
    </style>



    </head>
    <body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Driver Registration</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <form method="POST" action="{{route('store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" readonly required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" readonly required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="Age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                <div class="col-md-6">
                                    <input id="Age" type="number" class="form-control" name="age" value="{{ old('age') }}" required autocomplete="age">


                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="Gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div  class="col-md-6 ">
                                    <div style="margin-top:7px" class="form-check">
                                        <label class="form-check-label">

                                          <input type="radio" name="anynum" class="form-check-input" value="Male" required autocomplete="anynum">Male
                                          &nbsp; &nbsp; &nbsp; &nbsp;


                                          <input type="radio" name="anynum" class="form-check-input" value="Female">Female

                                        </label>
                                      </div>








                                </div>

                            </div>
                            <div class="form-group row .intl-tel-input">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6" >
                                    <input id="phone" type="tel" pattern=".{11}" class="form-control intl-tel-input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus oninput="check(this)">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Base Location') }}</label>

                                <div class="col-md-6">
                                    <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required autocomplete="location">

                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="referred_by" class="col-md-4 col-form-label text-md-right">{{ __('Reference Code') }}</label>

                                <div class="col-md-6">
                                    <input id="referred_by" type="text" placeholder="Enter your Reference code" class="form-control " name="referred_by" value="{{ old('referred_by') }}"  autocomplete="referred_by" autofocus>


                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enter Record') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer');

<script>
$("form").keypress(function(e){
    if(e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
})

var input = document.querySelector("#phone");
intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: function(success, failure) {
        $.get("https://ipinfo.io?token=eac1be9a1f9bfc", function() {}, "jsonp").always(function(resp) {
            var countryCode = (resp && resp.country) ? resp.country : "";
            success(countryCode);
        });
    },
    utilsScript: "/js/utils.js"
});

$(document).ready(function(){
    var searchInput = 'location';
            var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
    types: ['geocode'],
});
});



    </script>


@endsection

</body>
</html>
