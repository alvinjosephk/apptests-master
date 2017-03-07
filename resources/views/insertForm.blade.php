.<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert form</title>
  </head>
  <body>

    <center>
    <form action="/insert" method="post">


      <table>
              {{csrf_field() }}

          <tr>
            <td>Number:</td>
            <td><input type="text" name="number"></td>
          </tr>


          <tr>
            <td>sim_status</td>
            <td><input type="text" name="sim_status"></td>
          </tr>


          <tr>
            <td>sim Type</td>
            <td><input type="text" name="sim_type"></td>
          </tr>


          <tr>
            <td>number type</td>
            <td><input type="text" name="num_type"></td>
          </tr>


          <tr>
            <td>price</td>
            <td><input type="text" name="price"></td>
          </tr>
          <tr>
            <td>privider Id</td>
            <td><input type="text" name="service_id"></td>
          </tr>


          <tr>
            <td>Submit</td>
            <td><input type="submit" name="submit"></td>
          </tr>


</table>
    </form>
  </center>



  </body>
</html>
