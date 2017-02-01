<html>

   <head>
      <title>mobile numbers | Add</title>
   </head>

   <body>
      <form action = "/procreate" method = "post">
 <input type = "hidden" name = "_token" value = "{{csrf_token()}}">


         <table>
            <tr>
               <td>mobile numbers</td>
               <td><input type='text' name='numbers' /></td>
            </tr>
            <tr>
               <td>sim status</td>
               <td><input type='text' name='sim_status' /></td>
            </tr>
            <tr>
               <td>type</td>
               <td><input type='text' name='type' /></td>
            </tr>
            <tr>
               <td>number type</td>
               <td><input type='text' name='num_type' /></td>
            </tr>
            <tr>
               <td>price</td>
               <td><input type='text' name='price' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add "/>
               </td>
            </tr>
         </table>

      </form>

   </body>
</html>
