<?php

function convertToFlat($parameter) {

    $contator = strlen($parameter);
    $casaDosMilhoes = 14;
    
    if(strlen($contator > $casaDosMilhoes)) {
        echo "Essa ferramenta calcula a distância até milhões! Favor inserir uma informação válida";
        die();
    } else{
    
    $result = str_ireplace('.', '', $parameter);
  
    $result = str_ireplace(',', '.', $result);

    $parameter = floatval($result);
    
    return $parameter;
    
        }
    }
