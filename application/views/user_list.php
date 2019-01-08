<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>user account</title> 
   </head>
	
   <body> 
   	<?php  
   	echo "<pre>";
   	print_r($users); ?> 
   			<table>
          <tr>
          	<td>
          		<? echo $users->firstname?>
          	</td>
          	<td>
          		<? echo $users->lastname?>
          	</td>
          
          </tr>
          		
      </table>
   

   
   </body>
	
</html>












