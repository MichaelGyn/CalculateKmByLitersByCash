<!DOCTYPE html>   
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
  function formatCoin(i) {
	var v = i.value.replace(/\D/g,'');
	v = (v/100).toFixed(2) + '';
	v = v.replace(".", ",");
	v = v.replace(/(\d)(\d{3})(\d{3}),/g, "$1.$2.$3,");
	v = v.replace(/(\d)(\d{3}),/g, "$1.$2,");
	i.value = v;
}

  </script> 
  <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img border="0" alt="W3Schools" src="./assets/imgs/logo.jpg" width="50" height="50"></a>
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
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
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
      <input type="submit" class="btn btn-outline-success" value="Enviar"><br>
    </div>
    <div class="col-sm d-flex justify-content-center">
      <input type="reset" class="btn btn-outline-danger" value="Limpar">
    </div>
  </div>
</form>
</div>


<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
</body>


<footer>

<script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
</footer>

</html>


<?php

if(isset($_POST['distance1']) && !empty($_POST['distance1']) && isset($_POST['kmPerLiter1']) && !empty($_POST['kmPerLiter1']) && isset($_POST['FuelPrice1']) && !empty($_POST['FuelPrice1']) && isset($_POST['distance2']) && !empty($_POST['distance2']) && isset($_POST['kmPerLiter2']) && !empty($_POST['kmPerLiter2']) && isset($_POST['FuelPrice2']) && !empty($_POST['FuelPrice2'])) {

    $distance1 = filter_input(INPUT_POST, 'distance1');
    echo $distance1;
        } else {
            die("Não iniciou");
            }


$kmPerLiter1 = filter_input(INPUT_POST, 'kmPerLiter1');
$FuelPrice1 = filter_input(INPUT_POST, 'FuelPrice1');
$distance2 = filter_input(INPUT_POST, 'distance2');
$kmPerLiter2 = filter_input(INPUT_POST, 'kmPerLiter2');
$FuelPrice2 = filter_input(INPUT_POST, 'FuelPrice2');


echo '<br>' . "A distância 1 informada foi: " . $distance1 . '<br>';
echo "Seu automovel faz " . $kmPerLiter1 . " km's por litro de combustivel" . '<br>';
echo "O preço informado do combustível foi: " . $FuelPrice1 . '<br>';
echo "A distância 2 informada foi: " . $distance2 . '<br>';
echo "Seu automovel faz " . $kmPerLiter2 . " km's por litro de combustivel" . '<br>';
echo "O preço informado do combustível foi: " . $FuelPrice2 . "." . '<br>' . "Com essas informações, temos o cenário abaixo: " . '<br>';


require_once('validations.php');

$distance1 = convertToFlat($distance1);
$kmPerLiter1 = convertToFlat($kmPerLiter1);
$FuelPrice1 = convertToFlat($FuelPrice1);
$distance2 = convertToFlat($distance2);
$kmPerLiter2 = convertToFlat($kmPerLiter2);
$FuelPrice2 = convertToFlat($FuelPrice2);




$totalLiters1 = $distance1 / $kmPerLiter1;

echo '<br>' . $distance1 . ' / ' . $kmPerLiter1 . ' = ' . $totalLiters1;

$result1 = $totalLiters1 * $FuelPrice1;

$result1 = round($result1, 2);

$result1 = str_ireplace('.', ',', $result1);
 

echo '<br>' . $totalLiters1 . ' * ' . $FuelPrice1 . ' = ' . $result1;

$totalLiters2 = $distance2 / $kmPerLiter2;

$result2 = $totalLiters2 * $FuelPrice2;

$result2 = round($result2, 2);

$result2 = str_ireplace('.', ',', $result2);

echo "<h2>Abastecido com Alcool</h2>";
echo "Em uma distância percorrida de " . $distance1 . " quilômetros, você gastará um total de R$ " . $result1 . " reais, pois seu carro atualmente faz " . $kmPerLiter1 . " km/l no combustível álcool";

echo '<br>';
echo '<br>';
echo "<h2>Abastecido com Gasolina</h2>";
echo "Em uma distância percorrida de " . $distance2 . " quilômetros, você gastará um total de R$ " . $result2 . " reais, pois seu carro atualmente faz " . $kmPerLiter2 . " km/l no combustível gasolina";

?>