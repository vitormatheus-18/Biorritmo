<?php 


    
    $data =  $_POST['data'];
    $hoje = date('d/m/Y');
    
    $data = explode('/',$data);
    $hoje = explode('/',$hoje);

    $d1 = strtotime("$data[2]-$data[1]-$data[0]");
    $h = strtotime("$hoje[2]-$hoje[1]-$hoje[0]");

    $diasVividos = ($h - $d1) / 86400;

    if($diasVividos < 0){
        echo "<h3>"."Dados Inconclusivos."."</h3>";
    
    }    
        else{
            echo "<h3>"."Você nasceu, aproximadamente, há ".$diasVividos." dias."."</h3>";
        }   

    $fisico = (sin((2*pi()*$diasVividos)/23))*100 ;
    $emocional = (sin((2*pi()*$diasVividos)/28))*100 ;
    $intelectual = (sin((2*pi()*$diasVividos)/33))*100 ;
    $intuitivo = (sin((2*pi()*$diasVividos)/38))*100 ; 
    
    
    if($diasVividos > 0){

        echo "Físico: " .number_format($fisico,2)."%"."<br>";
        echo "Emocional: " .number_format($emocional,2)."%"."<br>";
        echo "Intelectual: " .number_format($intelectual,2)."%"."<br>";
        echo "Intuitivo: " .number_format($intuitivo,2)."%"."<br>";
        
    }
    

    
    

    
    
            

?>