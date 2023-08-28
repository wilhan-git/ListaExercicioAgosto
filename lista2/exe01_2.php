<?php 

$torre1 = array (
    'numerico'=> 8, 
    'letra'=>'A'
);

$torre2 = array (
    'numerico'=>9,
    'letra' =>"E"
);


function torreataca(array $t1, array $t2){
   if($t1["numerico"]!=$t2["numerico"]){
    if($t1["letra"]===$t2["letra"]){
        return "TRUE 1";
    }
    return "false";
   }

   return"TRUE";

}

echo "TESTE ".torreataca($torre1,$torre2);
?>