@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                <div class="panel-body">
                 <center>
                     Choose your SIM
                  <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <a href="/choose_sim" class="thumbnail">
                        <img src="img/idea.jpg" alt="IDEA SIM">
                      </a>
                    </div>
                      <div class="col-sm-6 col-md-4">
                        <a href="/choose_sim" class="thumbnail">
                          <img src="img/airtel.jpg" alt="AIRTEL">
                        </a>
                      </div>
                    <div class="col-sm-6 col-md-4">
                      <a href="/choose_sim" class="thumbnail">
                        <img src="img/bsnl.jpg" alt="BSNL SIM">
                      </a>
                    </div>


                    <div class="col-sm-1 col-md-4">
                      <a href="/choose_sim" class="thumbnail">
                        <img src="img/voda.jpg" alt="IDEA SIM">
                      </a>
                    </div>

                </div>
                </center>

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
