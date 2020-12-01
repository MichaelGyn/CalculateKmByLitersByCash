<?php

if(isset($_POST['distanceMenuAlcohol']) && !empty($_POST['distanceMenuAlcohol']) && isset($_POST['kmPerLiterMenuAlcohol']) && !empty($_POST['kmPerLiterMenuAlcohol']) && isset($_POST['fuelPriceMenuAlcohol']) && !empty($_POST['fuelPriceMenuAlcohol']) && isset($_POST['distanceMenuGasoline']) && !empty($_POST['distanceMenuGasoline']) && isset($_POST['kmPerLiterMenuGasoline']) && !empty($_POST['kmPerLiterMenuGasoline']) && isset($_POST['fuelPriceMenuGasoline']) && !empty($_POST['fuelPriceMenuGasoline'])) {
    $distanceMenuAlcohol = filter_input(INPUT_POST, 'distanceMenuAlcohol');
     } else {
            die("No isset");
            }


$distanceMenuAlcohol = filter_input(INPUT_POST, 'distanceMenuAlcohol');            
$kmPerLiterMenuAlcohol = filter_input(INPUT_POST, 'kmPerLiterMenuAlcohol'); 
$fuelPriceMenuAlcohol = filter_input(INPUT_POST, 'fuelPriceMenuAlcohol');
$distanceMenuGasoline = filter_input(INPUT_POST, 'distanceMenuGasoline');
$kmPerLiterMenuGasoline = filter_input(INPUT_POST, 'kmPerLiterMenuGasoline');
$fuelPriceMenuGasoline = filter_input(INPUT_POST, 'fuelPriceMenuGasoline');
/*
echo "chegou aqui";
echo $distanceMenuAlcohol;
echo '<br>';
echo $kmPerLiterMenuAlcohol;
echo '<br>';
echo $fuelPriceMenuAlcohol;
echo '<br>';
echo $distanceMenuGasoline;
echo '<br>';
echo $kmPerLiterMenuGasoline;
echo '<br>';
echo $fuelPriceMenuGasoline;
echo '<br>';
*/

//require_once './processement.php';


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


$distanceMenuAlcohol = convertToFloat($distanceMenuAlcohol);
$kmPerLiterMenuAlcohol = convertToFloat($kmPerLiterMenuAlcohol);
$fuelPriceMenuAlcohol = convertToFloat($fuelPriceMenuAlcohol);
$distanceMenuGasoline = convertToFloat($distanceMenuGasoline);
$kmPerLiterMenuGasoline = convertToFloat($kmPerLiterMenuGasoline);
$fuelPriceMenuGasoline = convertToFloat($fuelPriceMenuGasoline);

$totalLitersMenuAlcohol = $distanceMenuAlcohol / $kmPerLiterMenuAlcohol;
$resultMenuAlcohol = $totalLitersMenuAlcohol * $fuelPriceMenuAlcohol;
$resultMenuAlcohol = round($resultMenuAlcohol, 2);
$resultMenuAlcohol = number_format($resultMenuAlcohol, 2, ',', '.');
//$resultMenuAlcohol = str_ireplace('.', ',', $resultMenuAlcohol);

$totalLitersMenuGasoline = $distanceMenuGasoline / $kmPerLiterMenuGasoline;
$resultMenuGasoline = $totalLitersMenuGasoline * $fuelPriceMenuGasoline;
$resultMenuGasoline = round($resultMenuGasoline, 2);
$resultMenuGasoline = number_format($resultMenuGasoline, 2, ',', '.');
//$resultMenuGasoline = str_ireplace('.', ',', $resultMenuGasoline);

if (!empty($resultMenuAlcohol)) { ;?>

    <!--modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Resultado da Busca:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><?php 
                echo "<h2>Abastecido com Álcool</h2>";
                echo "Em uma distância percorrida de " . $distanceMenuAlcohol . " quilômetros, você gastará um total de R$ " . $resultMenuAlcohol . " reais, pois seu carro atualmente faz " . $kmPerLiterMenuAlcohol . " km/l, abastecido com álcool";
                echo '<br>';
                echo '<br>';
                echo "<h2>Abastecido com Gasolina</h2>";
                echo "Em uma distância percorrida de " . $distanceMenuGasoline . " quilômetros, você gastará um total de R$ " . $resultMenuGasoline . " reais, pois seu carro atualmente faz " . $kmPerLiterMenuGasoline . " km/l, abastecido com gasolina";
              ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" href="/"class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <script>
    $('#exampleModal').modal('show');
    </script>
     
    <?php } else {
      echo "<script>alert('0 Resultados encontrados. Favor pesquise novamente');</script>";
      header('location: index.php');
    }  ?>