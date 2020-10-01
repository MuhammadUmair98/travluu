@include('driver_layouts.main_driver_profile');
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
@media screen and (max-width: 480px) {
  .column {
    width: 100%;
  }
}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-12">
            <form method="POST" action="{{route('update')}}">
                @csrf
                <h3>Personal Info</h3>
              <div class="form-group">
                <label for="title" style="font:bold" class="col-sm-4 control-label">
                    Name
                </label>
                <div class="col-sm-8 form-control-static">
                    @foreach($datas as $data)
                    {{$data->name}}
                    @endforeach
                </div>

            </div>
            <div class="form-group">
				<label class="col-sm-4 control-label">
					Email Address
				</label>
				<div class="col-sm-8 form-control-static">
					@foreach($datas as $data)
                    {{$data->email}}
                    @endforeach
				</div>
            </div>
            <div class="form-group">
				<label class="col-sm-4 control-label">
					Contact
				</label>
				<div class="col-sm-8 form-control-static">
					@foreach($datas as $data)
                    {{$data->Phone_Number}}
                    @endforeach
				</div>
            </div>
            <div class="form-group">
				<label class="col-sm-4 control-label">
					Base Location
				</label>
				<div class="col-sm-8 form-control-static">
					@foreach($datas as $data)
                    {{$data->base_location}}
                    @endforeach
				</div>
            </div>
            <div class="form-group">
                <label for="external_url" class="col-sm-4 control-label">
                    Home Address
                </label>
                <div class="col-sm-8">
                    @foreach ($datas as $data)
@if($data->Website)
                    <input type="text" class="form-control" value={{$data->Website}} id="external_url" name="website"  placeholder="Enter home's address" required autocomplete>
@else
<input type="text" class="form-control"  id="external_url" name="website"  placeholder="Enter your home Address" required autocomplete>
@endif
@endforeach
                </div>
            </div>
            <div class="form-group">
                <label for="external_url" class="col-sm-4 control-label">
                    Language
                </label>
                <div class="col-sm-8">
                    <select class="form-control" id="lang" name="lang" placeholder="Enter the Brand" required autocomplete="lang">



                            <option selected value="en">
                                English
                            </option>
                            <option value="de">
                                Deutsch
                            </option>
                            <option value="fr">
                                Français
                            </option>
                            <option value="it">
                                Italiano
                            </option>
                            <option value="es">
                                Español
                            </option>
                            <option value="pt">
                                Português
                            </option>
                            <option value="nl">
                                Nederlands
                            </option>
                            <option value="ru">
                                Русский
                            </option>
                            <option value="zh">
                                中文
                            </option>
                            <option value="ar">
                                العَرَبِيَّة
                            </option>
                            <option value="tr">
                                Türkçe
                            </option>
                            <option value="pl">
                                Polski
                            </option>
                            <option value="hu">
                                Magyar
                            </option>
                            <option value="cs">
                                Český
                            </option>
                            <option value="el">
                                Ελληνικά
                            </option>
                            <option value="sk">
                                Slovenský
                            </option>
                            <option value="he">
                                עברית
                            </option>
                            <option value="sv">
                                Svenska
                            </option>
                            <option value="fi">
                                Suomi
                            </option>
                            <option value="no">
                                Norsk
                            </option>
                            <option value="ja">
                                日本語
                            </option>
                            <option value="bn">
                                বাংলা ভাষা
                            </option>
                    </select>
                      </select>
                </div>
                <div class="">

            </div>
            </div>
            <div class="form-group">
                <label for="external_url" class="col-sm-4 control-label">
                    About Yourself
                </label>
                <div class="col-sm-8">
                    @foreach ($datas as $data)

                <textarea class="form-control"  name="comment"  rows="5" id="comment" required autocomplete>{{$data->Description}}</textarea>

               @endforeach
                </div>
            </div>
<div class="container">
    <div class="row ">
        <div style="text-align:center">
        <div class="col-md-10">
            <button type="submit" class="btn btn-success btn-flat btne">
                Save
            </button>
        </div>
    </div>
        </div>
    </div>
            </form>
        </div>
    </div>
</div>
</body>
@include('layouts.footer')
</html>
