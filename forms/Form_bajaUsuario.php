<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Baja</title>
        <style>
            table,td{
                border: solid black 1px
            }
        </style>
        <script>
            function validar() {
                return confirm("¿Desea realmente borrar a este usuario?");
            }
            ;
        </script>
    </head>
    <body><?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "empresa";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id_usuario,login FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo '<form method = "get" onsubmit = "return validar()" enctype = "multipart/form-data" action = "../procesa/Procesa_bajaUsuario.php">';
            echo 'Escoja el usuario que desea dar de baja:';
            echo ' <select name="id">';
            while ($row = $result->fetch_assoc()) {
                echo '<option value = "' . $row["id_usuario"] . '">'. $row["login"] .'</option>';
            }
            echo '</select>';              
            echo '<input id = "boton" type = "submit" name = "borrar" value = "Borrar">';        

        } else {
            echo "No hay usuarios a los que dar de baja";
        }
        $conn->close();
        ?>
    </body>
</html>
