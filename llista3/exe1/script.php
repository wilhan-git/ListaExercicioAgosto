
<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $data_atual = strtotime($_POST['datainicial']);
        $data_final = strtotime($_POST['datafinal']);


        $cronometro = $data_final - $data_atual;

       
        function definindodata($recebedata){
            $dia = $recebedata / 86400;
            $hora = ($recebedata - strtotime($dia))/ 3600;

            return $dia;
        }
    
        echo "SÂO : ". strtotime(definindodata($cronometro));

    }
        
?>