<?php

function convertToFloat($parameter) {

    $contator = strlen($parameter);
    $casaDosMilhoes = 14;
    
    if(strlen($contator > $casaDosMilhoes)) {
        echo "<script>alert('Essa ferramenta calcula dados até milhões! Favor inserir um número até na casa dos milhões');</script>";
        header('location: index.php');
        die();
    } else{
    
    $result = str_ireplace('.', '', $parameter);
    $result = str_ireplace(',', '.', $result);
    $parameter = floatval($result);

    return $parameter;
    
        }
    }
