<?php
session_start();
?>
<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="/login/css/index.css">  
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vistas/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
      
    </ul>
    <ul class="form-inline my-2 my-lg-0 navbar-nav">
     
    <li class="nav-item">
    <a class="nav-link" href="vistas/login.php">Login</a>
      </li>
      <li class="nav-item">
    <a class="nav-link" href="vistas/registro.php">Registrate</a>
      </li>

    </ul>
  </div>
</nav>
</header>
  


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" >
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active " >
    
      <img class="d-block w-100 " src="https://www.nationalgeographic.com.es/medio/2018/02/27/serpiente__1280x720.png" alt="First slide" height="600">
      
      
      
      <button type="button" id="vermas" class="btn btn-primary">Primary</button>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.caracteristicas.co/wp-content/uploads/2017/05/cultura-egipcia-1-e1570070083209.jpg" height="600" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://invdes.com.mx/wp-content/uploads/2020/01/28-01-20-ALMA.jpg" alt="Third slide" height="600">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>






<!--






<a href="session.php">session</a><br>
<a href="bienvenido.php">bienvenido</a><br>
<a href="vistas/registro.php">vistas</a><br>
<a href="vistas/login.php">login</a><br>

<h3>bienvenido <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'] : 'invitado'   ?></h3>
 el iset evalua si la session esta abierta la interrogacion verifica si se cumple imprime el nombre de la session si no imprime invitado-->
</body>
</html>