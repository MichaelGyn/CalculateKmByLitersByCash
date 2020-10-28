<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  <form action="" method="GET">
  <div class="row">
    <div class="col-sm">
      <h2>Combustível: Álcool</h2>
        <label for="Distance1">Distância a calcular: </label>
        <input type="number" name="distance1" id="distance1" placeholder="Em Km" required><br>
        <label for="kmPerLiter1">Quantos km seu carro faz com 1 litro? </label>
        <input type="number" name="kmPerLiter1" id="kmPerLiter1" placeholder="Em km" required><br>
        <label for="FuelPrice1">Qual o preço do litro de combustível? </label>
        <input type="number" name="FuelPrice1" id="FuelPrice1" placeholder="Em R$" required><br>
    </div>
    <div class="col-sm">
      <h2>Combustível: Gasolina</h2>
      <label for="Distance2">Distância a calcular: </label>
        <input type="number" name="distance2" id="distance2" placeholder="Em Km" required><br>
        <label for="kmPerLiter2">Quantos km seu carro faz com 1 litro? </label>
        <input type="number" name="kmPerLiter2" id="kmPerLiter2" placeholder="Em km" required><br>
        <label for="FuelPrice2">Qual o preço do litro de combustível? </label>
        <input type="number" name="FuelPrice2" id="FuelPrice2" placeholder="Em R$" required><br>
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
</html>