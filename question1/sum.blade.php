<html>

   <head>
      <title>Sum</title>
   </head>

   <body>
      <form action = "user/sum" method = "POST">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>"> 
      
         <table>
            <tr>
               <td>Enter First Number:</td>
               <td><input type = "number" name = "first" /></td>
            </tr>   
            <tr>    
               <td>Enter Second Number:</td>
               <td><input type = "number" name = "second" /></td>
            </tr>
 
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Add" />
               </td>
            </tr>
         </table>
      
      </form>
   </body>
</html>
