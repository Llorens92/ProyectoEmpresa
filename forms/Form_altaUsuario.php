<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario De Alta</title>
    </head>
    <body>
        <form method="get" enctype="multipart/form-data" action="../procesa/Procesa_altaUsuario.php">
            <p>Nombre: <input type="text" name="nom"></p>         
            <p>Apellidos: <input type="text" name="ape"></p>
            <p>Login: <input type="text" name="log"></p>        
            <p>Password: <input type="password" name="pwd"></p>     
            <p>
                <input type="radio" name="tipo" value="Administrador">Administrador
                <input type="radio" name="tipo" value="Normal">Normal
            </p>
            <p>Pregunta: <input type="text" name="preg"></p>
            <p>Respuesta: <input type="text" name="resp"></p>   
            <input type="submit" name="Aceptar" value="Aceptar">            
            <input type="reset" name="Resetear" value="Resetear">
        </form>
    </body>
</html>
