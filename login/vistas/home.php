<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type ="text/css" href="/login/css/home.css">  
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--INICIO NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
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
    <h1><?php session_start(); echo $_SESSION['admin']; ?> </h1>
      </li>
   

    </ul>
  </div>
  </div>
</nav>
<!--FIN NAVBAR-->
</head>

<body>
    <div class='container'>
    <div class="d-flex justify-content-center h-100">
  <!--<h1>HOLA <?php echo $_SESSION['admin']; ?> </h1>
      <a href="cerrarsesion.php">close session</a>!-->
   
    </div>
    </div>
    <div class="collection" id="collection">
        <article>
            <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="/login/img/egipto1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Historia</h5>
              <p class="card-text">Conoce la Historia Del Mundo<a href="secciones/egipto.php" class="card-link">Card link</a> </p>
              
            </div>
          </div>
        </article>
        <article>


        <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="/login/img/espacio1.jpg" alt="Card image cap" id="imgp">
            <div class="card-body">
              <h5 class="card-title">Astronomia</h5>
              <p class="card-text">sumergete en el espacio exterior.<a href="secciones/egipto.php" class="card-link">Card link</a></p>
              
            </div>
          </div>
        
        
        
        </article>
        <article>
  
                  
              <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src="/login/img/animal1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Biologia</h5>
                    <p class="card-text">Ciencia que estudia la estructura de los seres vivos y de sus procesos vitales.<a href="#" class="card-link">Card link</a></p>
                    
                  </div>
                </div>
        
        
        
        
        
        </article>
        <article> <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="/login/img/mate1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Matematicas</h5>
              <p class="card-text">Ciencia que estudia las propiedades de los números y las relaciones que se establecen entre ellos.</p>
              
            </div>
          </div>
        </article>
        <article>
        <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="/login/img/quimica1.jpg" alt="Card image cap" id="imgp">
            <div class="card-body">
              <h5 class="card-title">QUIMICA</h5>
              <p class="card-text">Ciencia que estudia la composición y las propiedades de la materia y de las transformaciones que esta experimenta sin que se alteren los elementos que la forman.</p>
              
            </div>
          </div>
        
        
        </article>
        <article>
        <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="/login/img/tecnologia1.jpg" alt="Card image cap" id="imgp">
            <div class="card-body">
              <h5 class="card-title">Tecnologia</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
            </div>
          </div>
        
        
        </article>
        <article>7</article>
        <article>8</article>
        <article>9</article>
        <article>10</article>
</div>

</body>
</html>