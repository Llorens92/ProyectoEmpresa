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

        $nom = $_GET["nom"];
        $ape = $_GET["ape"];
        $log = $_GET["log"];
        $pwd = $_GET["pwd"];
        $pwd = md5($pwd);
        $tipo = $_GET["tipo"];
        $preg = $_GET["preg"];
        $resp = $_GET["resp"];
        
// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO usuarios VALUES ( '', '$nom', '$ape', '$log','$pwd', '$tipo', '$preg', '$resp')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {            
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
    </body>
</html>
