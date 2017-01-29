<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empresa";

$connect = new mysqli($servername, $username, $password, $dbname);

$login = $_REQUEST['login'];
$pwd = $_REQUEST["pwd"];
$pwd = md5($pwd);


$query = 'SELECT login FROM usuarios where login = "' . $login . '"';
$resultado = $connect->query($query);
if ($resultado->num_rows === 0) {
    echo "NoLogin";
} else {
    $query = 'SELECT login FROM usuarios where login = "' . $login . '" AND pwd = "' . $pwd . '"';
    $resultado = $connect->query($query);
    if ($resultado->num_rows === 0) {
        echo "NoCoincide";
    }
}

$connect->close();
?>