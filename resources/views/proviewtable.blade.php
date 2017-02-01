<html>

   <head>
      <title>View Student Records</title>
   </head>

   <body>
      <table border = 1>
         <tr>
            <td>number</td>
            <td>sim status</td>
            <td>type</td>
            <td>number type</td>
            <td>price</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->number}}</td>
            <td>{{ $user->sim_status}}</td>
              <td>{{ $user->type}}</td>
                <td>{{ $user->num_type}}</td>
                  <td>{{ $user->price}}</td>
         </tr>
         @endforeach
      </table>

   </body>
</html>
