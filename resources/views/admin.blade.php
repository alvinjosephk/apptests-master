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



<div class="admin-jumbotron">
    <div class="container">
      </div>
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



<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
                   <div class="panel-heading">Search User </div>
                   <div class="panel-body">

                     <div class="row">
                        <form action="/admin" method="post">
                            {{csrf_field()}}
                             <div class="col-lg-11">
                                 <div class="input-group">
                                     <span class="input-group-btn">
                                         <input type="submit" value="Validate" class="btn btn-default" type="button">
                                     </span>
                                     <input type="text" name="id" class="form-control" placeholder="Search for...">
                                 </div>
                             </div>
                     </form>
                 </div>
                 @if($user)
                 @foreach($user as $u)

                 <p> <div class="admin_approve">

                Name:{{$u->name}}<br>
                  Date of Birth:{{$u->DoB}}<br>
                  Gender: {{$u->gender}}<br>


                  Street:{{$u->street}}<br>
                  Locality:{{$u->locality}}<br>
                  City:{{$u->city}}<br>
                  District:{{$u->district}}<br>
                  State:{{$u->state}}<br>
                  Nationality:{{$u->nationality}}<br>
                  Aadhar:{{$u->aadhaar}}<br>
                 </div></p>

                 @endforeach
                 @endif





</div>
<button type="submit" class="btn btn-primary">
    Approve
</button>

</div>
</body>












@endsection
