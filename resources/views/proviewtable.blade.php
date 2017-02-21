<html>

   <head>
      <title>View Student Records</title>
   </head>

   <body>
      <table border = 1>
         <tr>

            <td>number</td>
              <td>type</td>

         </tr>
         @foreach ($users as $user)
         <tr>

            <td>{{ $user->number}}</td>
            <td>{{ $user->type}}</td>

         </tr>
         @endforeach
      </table>

   </body>
</html>
