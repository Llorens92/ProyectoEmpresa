<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "empresa";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $id = $_GET["id"];
        $nom = $_GET["nombre"];
        $ape = $_GET["apellidos"];
        $tipo = $_GET["tipo"];
        $pass = $_GET["pass"];
        $preg = $_GET["pregunta"];
        $resp = $_GET["respuesta"];
        if (trim($pass)==='') {
            $sql = 'UPDATE usuarios set nombre="' . $nom . '", apellidos="' . $ape . '", tipo="' . $tipo . '", pregunta="' . $preg . '", respuesta="' . $resp . '"where id_usuario="' . $id . '"';
            $result = $conn->query($sql);
            echo "Datos modificados con éxito <br>";
            echo "No modifico la contraseña";
        } else {
            $pass = md5($pass);
            $sql = 'UPDATE usuarios set nombre="' . $nom . '", apellidos="' . $ape . '", pwd ="' . $pass . '", tipo="' . $tipo . '", pregunta="' . $preg . '", respuesta="' . $resp . '"where id_usuario="' . $id . '"';
            $result = $conn->query($sql);
            echo "Datos modificados con éxito <br>";
            echo "Incluida la contraseña";
        }
        
        $conn->close();
        ?>
    </body>
</html>
