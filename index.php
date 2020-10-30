<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
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
  <div class="row  d-flex justify-content-center">
    <h2>Menu Principal</h2>
  </div>
  <div class="form-group  d-flex justify-content-center">
  <form action="" method="POST">
  <div class="row">
    <div class="col-sm">
      <h2>Combustível: Álcool</h2>
        <label for="Distance1">Distância a calcular: </label>
        <input type="text" name="distance1" id="distance1" onkeyup="formatCoin(this);" placeholder="Em Km" required><br>
        <label for="kmPerLiter1">Quantos km seu carro faz com 1 litro? </label>
        <input type="text" name="kmPerLiter1" id="kmPerLiter1" onkeyup="formatCoin(this);" placeholder="Em km" required><br>
        <label for="FuelPrice1">Qual o preço do litro de combustível? </label>
        <input type="text" name="FuelPrice1" id="FuelPrice1" onkeyup="formatCoin(this);" placeholder="Em R$" required><br>
    </div>
    <div class="col-sm">
      <h2>Combustível: Gasolina</h2>
      <label for="Distance2">Distância a calcular: </label>
        <input type="text" name="distance2" id="distance2" onkeyup="formatCoin(this);" placeholder="Em Km" required><br>
        <label for="kmPerLiter2">Quantos km seu carro faz com 1 litro? </label>
        <input type="text" name="kmPerLiter2" id="kmPerLiter2" onkeyup="formatCoin(this);" placeholder="Em km" required><br>
        <label for="FuelPrice2">Qual o preço do litro de combustível? </label>
        <input type="text" name="FuelPrice2" id="FuelPrice2" onkeyup="formatCoin(this);" placeholder="Em R$" required><br>
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
</body>


<footer>


</footer>

</html>


<?php

if(isset($_POST['distance1']) && !empty($_POST['distance1'])) {

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


echo "A distância 1 informada foi: " . $distance1 . '<br>';
echo "Seu automovel faz " . $kmPerLiter1 . " km's por litro de combustivel" . '<br>';
echo "O preço informado do combustível foi: " . $FuelPrice1 . '<br>';
echo "A distância 2 informada foi: " . $distance2 . '<br>';
echo "Seu automovel faz " . $kmPerLiter2 . " km's por litro de combustivel" . '<br>';
echo "O preço informado do combustível foi: " . $FuelPrice2 . "." . '<br>' . "Com essas informações, temos o cenário abaixo: " . '<br>';

$totalLiters1 = $distance1 / $kmPerLiter1;
echo '<br>' . $distance1 . ' / ' . $kmPerLiter1 . ' = ' . $totalLiters1;

$result1 = $totalLiters1 * $FuelPrice1;

echo '<br>' . $totalLiters1 . ' * ' . $FuelPrice1 . ' = ' . $result1;

$totalLiters2 = $distance2 / $kmPerLiter2;

$result2 = $totalLiters2 * $FuelPrice2;

echo "<h2>Abastecido com Alcool</h2>";
echo "Em uma distância percorrida de " . $distance1 . " quilômetros, você gastará um total de R$ " . $result1 . " reais, pois seu carro atualmente faz " . $kmPerLiter1 . " km/l no combustível álcool";

echo '<br>';
echo '<br>';
echo "<h2>Abastecido com Gasolina</h2>";
echo "Em uma distância percorrida de " . $distance2 . " quilômetros, você gastará um total de R$ " . $result2 . " reais, pois seu carro atualmente faz " . $kmPerLiter2 . " km/l no combustível gasolina";

?>
