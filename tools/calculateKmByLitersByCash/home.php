<?php 

include_once './views/menu.html';
include_once './views/body.html';
include_once './views/footer.html';

if(isset($_POST['distanceMenuAlcohol']) && !empty($_POST['distanceMenuAlcohol']) && isset($_POST['kmPerLiterMenuAlcohol']) && !empty($_POST['kmPerLiterMenuAlcohol']) && isset($_POST['fuelPriceMenuAlcohol']) && !empty($_POST['fuelPriceMenuAlcohol']) && isset($_POST['distanceMenuGasoline']) && !empty($_POST['distanceMenuGasoline']) && isset($_POST['kmPerLiterMenuGasoline']) && !empty($_POST['kmPerLiterMenuGasoline']) && isset($_POST['fuelPriceMenuGasoline']) && !empty($_POST['fuelPriceMenuGasoline'])) {
    $distance1 = filter_input(INPUT_POST, 'distance1');
        } else {
            die();
            }

$kmPerLiter1 = filter_input(INPUT_POST, 'kmPerLiter1');
$FuelPrice1 = filter_input(INPUT_POST, 'FuelPrice1');
$distance2 = filter_input(INPUT_POST, 'distance2');
$kmPerLiter2 = filter_input(INPUT_POST, 'kmPerLiter2');
$FuelPrice2 = filter_input(INPUT_POST, 'FuelPrice2');

require_once('validations.php');

$distance1 = convertToFlat($distance1);
$kmPerLiter1 = convertToFlat($kmPerLiter1);
$FuelPrice1 = convertToFlat($FuelPrice1);
$distance2 = convertToFlat($distance2);
$kmPerLiter2 = convertToFlat($kmPerLiter2);
$FuelPrice2 = convertToFlat($FuelPrice2);

$totalLiters1 = $distance1 / $kmPerLiter1;
$result1 = $totalLiters1 * $FuelPrice1;
$result1 = round($result1, 2);
$result1 = number_format($result1, 2, ',', '.');
//$result1 = str_ireplace('.', ',', $result1);



$totalLiters2 = $distance2 / $kmPerLiter2;
$result2 = $totalLiters2 * $FuelPrice2;
$result2 = round($result2, 2);
$result2 = number_format($result2, 2, ',', '.');
//$result2 = str_ireplace('.', ',', $result2);


if (!empty($result1)) { ?>

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
            echo "Em uma distância percorrida de " . $distance1 . " quilômetros, você gastará um total de R$ " . $result1 . " reais, pois seu carro atualmente faz " . $kmPerLiter1 . " km/l, abastecido com álcool";
            echo '<br>';
            echo '<br>';
            echo "<h2>Abastecido com Gasolina</h2>";
            echo "Em uma distância percorrida de " . $distance2 . " quilômetros, você gastará um total de R$ " . $result2 . " reais, pois seu carro atualmente faz " . $kmPerLiter2 . " km/l, abastecido com gasolina";
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
} ?>