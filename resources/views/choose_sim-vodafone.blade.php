<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


@extends('layouts.app')




@section('content')
<div class="vodafone-jumbotron">
    <div class="container">
      </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6col-md-offset-4">
            <div class="panel panel-primary">
              <!--  <div class="panel-heading">Get your SIM today</div>-->

                <div class="panel-body">
                <!--  Please provide the details for applying a new sim.-->


                     <!--<div class="panel-body">-->

                    <!--  Choose the type of SIM<br>-->
                    <!--  <a href="/num" class="button">prepaid with ordinary number</a><br>
                        <a href="/num" class="button">prepaid with fancy number </a><br>
                          <a href="/num" class="button">postpaid with ordinarynumber</a><br>
                            <a href="/num" class="button">postpaid with fancynumber</a><br>-->




                            <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="#">Choose the type of sim</a></li>
                              <li>  <form action="/vnum">
                               <td><input type="submit" value="prepaid with ordinary number" style="width:100%";color=#555555></td>
                             </form></li>
                               <li>  <form action="/vnum1">
                                <td><input type="submit" value="prepaid with fancy number" style="width:100%";background-color=#555555></td>
                              </form></li>
                            </form></li>
                              <li>  <form action="/vnum2">
                               <td><input type="submit" value="postpaid with ordinary number" style="width:100%";background-color=#555555></td>
                             </form></li>
                           </form></li>
                             <li>  <form action="/vnum3">
                              <td><input type="submit" value="postpaid with fancy number" style="width:100%";background-color=#555555></td>
                            </form></li>


                            </ul>
      <!--      {{ Form::select('type',array('prepaid'=>'Prepaid','postpaid'=>'PostPaid'),'Prepaid') }}

            Choose the number type:
            {{ Form::select('number_type',array('fancy'=>'Fancy','ordinary'=>'ordinary'),'ordinary')}} -->

<div>
      <!--      {{Form::submit('Find A Game', array('class' => 'btn')) }}-->
        </div>

</div>














                </div>





            </div>
        </div>
    <!--</div>-->
</div>



@endsection
