<?php
    $variavel = "Os números que não se repetem ";
    for($i=1; $i<=20; $i++){                                                             
        $arrayComNumeros[] = rand(1,10);
        if($i <11){
            $arrayComparar[$i] = 0;
        }
    }
    foreach($arrayComNumeros as $numero){
        $arrayComparar[$numero] ++;
    }

    foreach($arrayComparar as  $chave => $numero){
        if($numero > 1){
            unset($arrayComparar[$chave]);
        }else{

        }
    }

    if(count($arrayComparar) == 1){
        $variavel .= "é ";
    }else{
        $variavel .= "são ";
    }

    $chaves = array_keys($arrayComparar);
    
    for($i=0; $i<count($chaves); $i++){
        $variavel .= $chaves[$i];
        if(count($chaves) == ($i+2)){
            $variavel .= " e ";
        }elseif(count($chaves) == ($i+1)){
            $variavel .= ".";
        }else{
            $variavel .= ", ";
        }

    }

    if(count($arrayComparar) == 0){
        $variavel = " Todos os números se repetem.";
    }

    echo $variavel;


    
    
?>