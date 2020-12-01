<?php 

include_once './views/menu.html';
include_once './views/body.html';
include_once './views/footer.html';

if(isset($_POST['distanceMenuAlcohol']) && !empty($_POST['distanceMenuAlcohol']) && isset($_POST['kmPerLiterMenuAlcohol']) && !empty($_POST['kmPerLiterMenuAlcohol']) && isset($_POST['fuelPriceMenuAlcohol']) && !empty($_POST['fuelPriceMenuAlcohol']) && isset($_POST['distanceMenuGasoline']) && !empty($_POST['distanceMenuGasoline']) && isset($_POST['kmPerLiterMenuGasoline']) && !empty($_POST['kmPerLiterMenuGasoline']) && isset($_POST['fuelPriceMenuGasoline']) && !empty($_POST['fuelPriceMenuGasoline'])) {
    $distanceMenuAlcohol = filter_input(INPUT_POST, 'distanceMenuAlcohol');
        } else {
            die();
            }

require_once('validations.php');

$distanceMenuAlcohol = convertToFlat($distanceMenuAlcohol);
$kmPerLiterMenuAlcohol = convertToFlat($kmPerLiterMenuAlcohol);
$fuelPriceMenuAlcohol = convertToFlat($fuelPriceMenuAlcohol);
$distanceMenuGasoline = convertToFlat($distanceMenuGasoline);
$kmPerLiterMenuGasoline = convertToFlat($kmPerLiterMenuGasoline);
$fuelPriceMenuGasoline = convertToFlat($fuelPriceMenuGasoline);

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


if (!empty($resultMenuAlcohol)) { ?>

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
} ?>