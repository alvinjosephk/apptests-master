
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 @extends('layouts.app')
@section('content')
<meta charset="utf-8">
<!--<div class="container">


<div class="container er">

    <div class="row">

        <div class="col-md-12 col-md-offset-0">

            <div class="panel panel-sucess">-->

                <div class="panel-heading">Customer Details</div>
                <div class="panel-body">
<!--<form class="form-horizontal">
<fieldset>-->
<form action="/details" method="POST">
<!-- Form Name -->

  {{csrf_field() }}
<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="Name">Name</label>
  <div class="col-md-3">
  <input id="name" name="name" type="text" align=centre placeholder="Enter your Name" class="form-control input-md" required="">
  @if ($errors->has('name'))
      <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
      </span>
  @endif
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="dob">Date Of Birth</label>
  <div class="col-md-2">
  <input id="dob" name="dob" type="date" placeholder="dd-mm-yyyy" class="form-control input-md" required="">
  @if ($errors->has('name'))
      <span class="help-block">
          <strong>{{ $errors->first('dob') }}</strong>
      </span>
  @endif
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-1 control-label" for="gender">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="male" checked="checked">
      Male
    </label>

	</div>
  <div class="radio">
    <label for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="female">
      Female
    </label>
	</div>
  <div class="radio">
    <label for="gender-2">
      <input type="radio" name="gender" id="gender-2" value="other">
      Other
    </label>
    @if ($errors->has('gender'))
        <span class="help-block">
            <strong>{{ $errors->first('gender') }}</strong>
        </span>
    @endif
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="house-no">House-Number</label>
  <div class="col-md-1">
  <input id="house-no" name="house-no" type="text" placeholder="" class="form-control input-md" required="">
  @if ($errors->has('house-no'))
      <span class="help-block">
          <strong>{{ $errors->first('house-no') }}</strong>
      </span>
  @endif
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="street">Street</label>
  <div class="col-md-2">
  <input id="street" name="street" type="text" placeholder="" class="form-control input-md" required="">
  @if ($errors->has('name'))
      <span class="help-block">
          <strong>{{ $errors->first('street') }}</strong>
      </span>
  @endif
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="locality">Locality</label>
  <div class="col-md-2">
  <input id="locality" name="locality" type="text" placeholder="" class="form-control input-md" required="">
  @if ($errors->has('locality'))
      <span class="help-block">
          <strong>{{ $errors->first('locality') }}</strong>
      </span>
  @endif
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="city">City</label>
  <div class="col-md-2">
  <input id="city" name="city" type="text" placeholder="" class="form-control input-md" required="">
  @if ($errors->has('city'))
      <span class="help-block">
          <strong>{{ $errors->first('city') }}</strong>
      </span>
  @endif
  </div>
</div>

<!-- Text input--><br>
<div class="form-group">
  <label class="col-md-1 control-label" for="district">District</label>
  <div class="col-md-2">
  <input id="district" name="district" type="text" placeholder="" class="form-control input-md">
  @if ($errors->has('district'))
      <span class="help-block">
          <strong>{{ $errors->first('district') }}</strong>
      </span>
  @endif
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="state">State</label>
  <div class="col-md-2">
  <input id="state" name="state" type="text" placeholder="" class="form-control input-md" required="">
  @if ($errors->has('state'))
      <span class="help-block">
          <strong>{{ $errors->first('state') }}</strong>
      </span>
  @endif
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-1 control-label" for="nationality">Nationality</label>
  <div class="col-md-5">
  <div class="radio">
    <label for="nationality-0">
      <input type="radio" name="nationality" id="nationality-0" value="indian" checked="checked">
      INDIAN
    </label>
	</div>
  <div class="radio">
    <label for="nationality-1">
      <input type="radio" name="nationality" id="nationality-1" value="other">
      Other
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="adhaar">Adhaar ID</label>
  <div class="col-md-4">
  <input id="aadhaar" name="aadhaar" type="text" placeholder="Enter your Adhaar ID" class="form-control input-md" required="">
<br>
@if ($errors->has('aadhaar'))
    <span class="help-block">
        <strong>{{ $errors->first('aadhaar') }}</strong>
    </span>
@endif
  </div>
</div>
<br>
<br>
<!--</f<br>orm>-->
<input type="submit" value="submit" style="width:20%" align:center></td>
</br>
</form>
</div>
</div>
<!--</div>
</div>
</div>
</div>-->
@endsection
