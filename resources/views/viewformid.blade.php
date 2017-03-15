<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">

<div class="col-md-4">

</div>
  <div class="col-md-4">
    <div class="panel panel-success">
  <div class="panel-heading">Sim registration complete</div>
  <div class="panel-body"> Your Registration id is
    @foreach ($user as $u)
    <tr>
       <td>{{ $u->regid }}</td>
    </tr>
    <br>
    <tr>
      <td> show the registration id at any sim store to get your sim</td>
</tr>
    @endforeach
  </div>








</div>
@endsection
