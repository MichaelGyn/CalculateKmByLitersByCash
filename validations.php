<?php

function convertToFlat($parameter) {

    $contator = strlen($parameter);
    $casaDosMilhoes = 14;
    
    if(strlen($contator > $casaDosMilhoes)) {
        echo "Essa ferramenta calcula a distância até milhões! Favor inserir uma informação válida";
        die();
    } else{
    
    var_dump($parameter);
    
    $result = str_ireplace('.', '', $parameter);
    echo '<br>';
    echo $result;
    
    $result = str_ireplace(',', '.', $result);
    echo '<br>';
    echo $result;
    
    
    echo '<br>';
    
    var_dump($result);
    
    $parameter = floatval($result);
    
    echo '<br>';
    
    return $parameter;
    
        }
    }
