<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
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


                   <div class="panel panel-primary">
                     <div class="panel-heading">
                       <h3 class="panel-title">Details of Subsrciber</h3>
                     </div>
                     <div class="panel-body">

                      <span class="grey"> Name:</span>{{$u->name}}<br>
                      <span class="grey"> Date of Birth:</span>{{$u->DoB}}<br>
                      <span class="grey"> Gender:</span> {{$u->gender}}<br>


                      <span class="grey">Street:</span>{{$u->street}}<br>
                    <span class="grey">City:</span>{{$u->city}}<br>
                    <span class="grey">Locality:</span>{{$u->locality}}<br>
                    <span class="grey">District:</span>{{$u->district}}<br>
                    <span class="grey">State:</span>{{$u->state}}<br>
                  <span class="grey">Nationality:</span>{{$u->nationality}}<br>
                  <span class="grey">Aadhar:</span>{{$u->aadhaar}}<br>
                        </div></p>

                        <button type="submit"  class="btn btn-primary">
                            Approve User
                        </button>

<div class="col-md-6 col-md-offset-3">
                      <form action="/admin/{{$u->regid}}" method="post">
                         {{csrf_field()}}
                         <input type="submit" value="Delete User" class="btn btn-danger" type="button">
                       </form>
</div>





                        @endforeach

                        @endif




                     </div>
                   </div>










</div>


</div>
</body>







@endsection
