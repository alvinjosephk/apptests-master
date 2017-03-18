<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
<!-- Optional theme -->

@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">




    <div class="container">
      </div>




<body>


        <!-- Same copy in customer login page - -->
        <br>
        <div class="sidebar-wrapper">

            <ul class="sidebar-nav nav">
                <li class="sidebar-brand">
                    <a href="#">

                    </a>
                </li>
                <li>
                    <a href="/in">Add Number</a>
                </li>

                <li>
                    <a href="#">Add Offer</a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>
                <li>
                    <a href=" "></a>
                </li>

            </ul>
        </div>

    </div>

    <li>
        <a href=" "></a>
    </li>  <li>
          <a href=" "></a>
      </li>
      <li>
          <a href=" "></a>
      </li>
      <li>
          <a href=" "></a>
      </li>

      <li>
          <a href=" "></a>
      </li>
      <li>
          <a href=" "></a>
      </li>
      <li>
          <a href=" "></a>
      </li>




<div class="col-md-8 col-md-offset-3">

                   <div class="panel-body">

                     <div class="row">
                        <form action="/admin" method="post">
                            {{csrf_field()}}
                             <div class="col-lg-12">
                                 <div class="input-group">

                                     <input type="text" name="id" class="form-control" placeholder="Search for...">
                                     <span class="input-group-btn">
                                         <input type="submit" value="Validate" class="btn btn-default" type="button">
                                     </span>
                                 </div>
                             </div>
                     </form>
                 </div>
                   <div class="panel panel-default">
                 @if($user)
                 @foreach($user as $u)

                 <p> <div class="admin_approve" overflow="scroll">
                Name:   <font  face= 'verdana' color=black>
{{$u->name}}</font>
                <br>
                        Gender:<font  face= 'verdana' color=black> {{$u->gender}}</font><br>

                  Street:    <font  face= 'verdana' color=black>{{$u->street}}</font><br>
                  Locality:<font  face= 'verdana' color=black>{{$u->locality}}</font><br>
                  City:<font  face= 'verdana' color=black>{{$u->city}}</font><br>
                  District:<font  face= 'verdana' color=black>{{$u->district}}</font><br>
                  State:<font  face= 'verdana' color=black>{{$u->state}}</font><br>
                  Nationality:<font  face= 'verdana' color=black>{{$u->nationality}}</font><br>
                  Aadhar:<font  face= 'verdana' color=black>{{$u->aadhaar}}</font><br>
                   {{$u->number}}
                 </div></p>
</div>
<button type="submit" class="btn btn-primary">
    Approve
</button>
                 @endforeach
                 @endif





</div>


</div>
</body>












@endsection
