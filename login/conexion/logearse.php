<?php 
session_start();
  include_once('conectar.php');

$nombre = $_POST['nombreuser'];
$psw =$_POST['psw'];

    echo $nombre;
    echo $psw;


$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
        $sentencia->execute(array($nombre));
        $result = $sentencia->fetch();


      if (!$result){
          echo ('no existe user solicitado');
      }

      if(password_verify($psw,$result['password'])){
          //acciones si registro existe
          echo 'Las contraseñas Coinciden';
          $_SESSION['admin']=$nombre;
if (isset($_SESSION['admin'])) {
    var_dump($_SESSION);
    header('Location:../vistas/home.php');
}
      }else{
         header('Location:../vistas/login.php');
      }
                
 ?>