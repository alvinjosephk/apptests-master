.<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert form</title>
  </head>
  <body>

    <center>
    <form action="/insertpro" method="post">


      <table>
              {{csrf_field() }}

              <tr>
                <td>provider id</td>
                <td><input type="text" name="service_id"></td>
              </tr>

          <tr>
            <td>provider</td>
            <td><input type="text" name="provider_name"></td>
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
