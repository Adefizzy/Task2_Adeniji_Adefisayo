<?php
  
  function is_prime($x){
      
      
      if ($x > 1){
         
         for ($y = 2; $y < $x; $y++){
             
             if($x % $y == 0){
                 
                 echo "This is not a prime number";
                 break;
                     
             }else{
                 
                 echo "This is a prime number";
                 break;
                 
             }
         }
         
     }
        
      
  }

is_prime(5);

?>

