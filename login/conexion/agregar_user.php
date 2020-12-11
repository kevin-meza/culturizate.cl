<?php 
  include_once('conectar.php');
$nombre=$_POST['usuario'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
echo "<pre>";
$password = password_hash($password , PASSWORD_DEFAULT);

 $sql = 'SELECT * FROM usuarios WHERE nombre = ?';
 $sentencia = $pdo->prepare($sql);
 $sentencia->execute(array($nombre));
 $result = $sentencia->fetch();
 var_dump($result);
 if ($result) {
     echo 'el registro ya existe!';
     die();
 }
 
// Ver el ejemplo de password_hash() para ver de dónde viene este hash.


if (password_verify($password2, $password)) {
    echo '¡La contraseña es válida!';
  
} else {
    echo 'La contraseña no es válida.';
}
 
//agregar
$sql_agregar ='INSERT INTO usuarios(nombre,password) VALUES(?,?)';
$sentencia_agregar=$pdo ->prepare ($sql_agregar);
$sentencia_agregar->execute(array($nombre,$password));
$sentencia_agregar=null;
$pdo = null;
echo "registro agregado";

session_start();
//$login = $nombre; se le asigna el resultado del nombre a la session

$_SESSION['admin']=$nombre;
if (isset($_SESSION['admin'])) {
    var_dump($_SESSION);
    //header('Location:../index.php');
}

?>