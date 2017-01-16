<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Modificacion</title>
        <style>
            table,td{
                border: solid black 1px
            }
        </style>
        <script>

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
            echo '<form method = "get" enctype = "multipart/form-data" action = "Form_ModificaUsuario.php">';
            echo 'Escoja el usuario cuyos datos desea modificar:';
            echo ' <select name="id">';
            while ($row = $result->fetch_assoc()) {
                echo '<option value = "' . $row["id_usuario"] . '">' . $row["login"] . '</option>';
            }
            echo '</select>';
            echo '<input type = "submit" name = "mostrar" value = "Mostrar">';
            echo '</form>';
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $sql = 'SELECT nombre,apellidos,tipo,pregunta,respuesta FROM usuarios where id_usuario="' . $id . '"';
                $result = $conn->query($sql);
                echo '<form method = "get" enctype = "multipart/form-data" action = "../procesa/Procesa_modificaUsuario.php">';
                echo '<table>';
                echo '<tr><td>Nombre</td><td>Apellidos</td><td>Contraseña</td><td>Tipo</td><td>Pregunta</td><td>Respuesta</td></tr>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr><td><input type="text"  class="modifica" name="nombre" value="' . $row["nombre"] . '"></td>'
                    . '<td><input type="text"  class="modifica" name="apellidos" value="' . $row["apellidos"] . '"></td>'
                    . '<td><input type="password"  class="modifica" name="pass" value=""></td>'
                    . '<td><input type="text"  class="modifica" name="tipo" value="' . $row["tipo"] . '"></td>'
                    . '<td><input type="text"  class="modifica" name="pregunta" value="' . $row["pregunta"] . '"></td>'
                    . '<td><input type="text"  class="modifica" name="respuesta" value="' . $row["respuesta"] . '"></td></tr>';
                }
                echo '</table> ';
                echo '<input type="hidden" name="id" value="' . $id . '">';
                echo '<input type = "submit" name = "modificar" value = "Modificar">';
                echo '</form>';
            }
        } else {
            echo "No hay usuarios a los que modificar sus datos";
        }
        $conn->close();
        ?>
    </body>
</html>
