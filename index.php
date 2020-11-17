<!DOCTYPE html>   
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script type="text/javascript" src="./assets/js.js"></script>
<title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img border="0" alt="W3Schools" src="./assets/imgs/logo.png" width="50" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item dropdown">
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ferramentas 
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <!--<a class="dropdown-item" href="#">Empty</a>
          <a class="dropdown-item" href="#">Empty</a>-->
          <a class="nav-link disabled" href="/">Disabled</a>
        </div>
      </div>
    </ul><!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>

<div class="container-fluid">
  <div class="row  text-success d-flex justify-content-center">
    <h2>Menu Principal</h2>
  </div>
  <div class="form-group text-info d-flex justify-content-center">
  <form action="" method="POST">
  <div class="row">
    <div class="col-sm">
      <h2>Combustível: Álcool</h2>
        <label for="Distance1">Distância a calcular: </label>
        <input type="text" class="border border-primary" name="distance1" id="distance1" onkeyup="formatCoin(this);" placeholder="Em Km" autofocus required><br>
        <label for="kmPerLiter1">Quantos km seu carro faz com 1 litro? </label>
        <input type="text" class="border border-primary" name="kmPerLiter1" id="kmPerLiter1" onkeyup="formatCoin(this);" placeholder="Em km" required><br>
        <label for="FuelPrice1">Qual o preço do litro de combustível? </label>
        <input type="text" class="border border-primary" name="FuelPrice1" id="FuelPrice1" onkeyup="formatCoin(this);" placeholder="Em R$" required><br>
    </div>
    <div class="col-sm">
      <h2>Combustível: Gasolina</h2>
      <label for="Distance2">Distância a calcular: </label>
        <input type="text" class="border border-primary" name="distance2" id="distance2" onkeyup="formatCoin(this);" placeholder="Em Km" required><br>
        <label for="kmPerLiter2">Quantos km seu carro faz com 1 litro? </label>
        <input type="text" class="border border-primary" name="kmPerLiter2" id="kmPerLiter2" onkeyup="formatCoin(this);" placeholder="Em km" required><br>
        <label for="FuelPrice2">Qual o preço do litro de combustível? </label>
        <input type="text" class="border border-primary" name="FuelPrice2" id="FuelPrice2" onkeyup="formatCoin(this);" placeholder="Em R$" required><br>
    </div>
  </div>
  <div class="row">
    <div class="col-sm d-flex justify-content-center">
    <button type="submit" id="Enviar" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">Enviar</button>
    </div>
    
    <div class="col-sm d-flex justify-content-center">
      <input type="reset" class="btn btn-outline-danger" value="Limpar">
    </div>
  </div>
</form>
</div>
</body>


<footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</footer>
</html>

<?php

if(isset($_POST['distance1']) && !empty($_POST['distance1']) && isset($_POST['kmPerLiter1']) && !empty($_POST['kmPerLiter1']) && isset($_POST['FuelPrice1']) && !empty($_POST['FuelPrice1']) && isset($_POST['distance2']) && !empty($_POST['distance2']) && isset($_POST['kmPerLiter2']) && !empty($_POST['kmPerLiter2']) && isset($_POST['FuelPrice2']) && !empty($_POST['FuelPrice2'])) {
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