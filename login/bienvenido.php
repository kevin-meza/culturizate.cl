<?php
session_start();

if (isset($_SESSION['admin'])) {
   // echo 'bienvenido '.$_SESSION['admin'];
   // echo '<br><a href="cerrarsesion.php">cerrar session<a>';
} else {
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bienvenido</h1>
    <a href="/vistas/cerrarsesion.php">close session</a>
</body>
</html>

