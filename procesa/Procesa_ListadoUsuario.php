<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista Usuarios</title>
        <style>
            table,td{
                border: solid black 1px
            }
        </style>
    </head>
    <body>
        <?php
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

        $sql = "SELECT login, nombre, tipo FROM usuarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table>';
            echo '<tr><td>Login</td><td>Nombre</td><td>Tipo</td></tr>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr><td>' . $row["login"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["tipo"] . "</td></tr>";
            }
            
            echo '</table>';
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </body>
</html>
