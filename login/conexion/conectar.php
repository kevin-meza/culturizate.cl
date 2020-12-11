<?php

$link ='mysql:host=localhost;dbname=usuariosprueba';
$usuario = 'root';
$pass='';
try {
    $pdo = new PDO($link,$usuario.$pass);
    //echo 'conectado';
} catch (PDOException $e) {
    print ("error:".$e->getMessage() ."<br/>");
    die();
}



?>