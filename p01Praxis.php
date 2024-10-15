
<!DOCTYPE html>
<!-- Πράξεις στην php 
     
-->
<html>
    <head>
	    <meta charset="utf-8">
        <title>  Πράξεις  </title>
        
		 <link rel="stylesheet" href="style.css">
    </head>
    <body>
         Πράξεις με Μεταβλητές   php <br>
        <?php
          $a=150;
          $b=20;     
          
          echo "<h1>";  
		  $ap= $a + $b;
          echo "$a + $b  = $ap  ";
		 echo "</h1>" ;

		 
		  echo '<p class="plaisio">';
		   $ap= $a - $b;
           echo "$a - $b = $ap  <br>";
            
          $ap= $a  * $b;
           echo "$a *  $b = $ap  <br>";
        	
		  $ap= $a  / $b;
           echo "$a /  $b = $ap  <br>";
        
     		$ap= $b**3;
		   echo " $b ^ 3  =  $ap  <br> ";
          
		  
		  echo "</p>";
      ?>
    </body>
</html>



    
