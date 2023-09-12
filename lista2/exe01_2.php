<?php 

$torre1 = array (
    'numerico'=> 9, 
    'letra'=>'A'
);

$torre2 = array (
    'numerico'=>9,
    'letra' =>"E"
);

//função verifica se as torres se encontram na mesma coluna ou linha do tabuleiro
function torreataca(array $t1, array $t2){
   if($t1["numerico"]!=$t2["numerico"]){
    if($t1["letra"]===$t2["letra"]){
        return "TRUE";
    }
    return "FALSE";
   }

   return "TRUE";

}

echo torreataca($torre1,$torre2);
?>