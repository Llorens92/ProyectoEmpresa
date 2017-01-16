<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Portal Web Empresa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/codigo.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="page-header text-center">
            <h1>Portal Web Empresa</h1>
        </div> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="dropdown-toggle">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Usuarios
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li>
                                <p onclick="cambio('forms/Form_altaUsuario.php')">Alta Usuario</p>
                            </li>
                            <li>
                                <p onclick="cambio('forms/Form_bajaUsuario.php')">Baja Usuario</p>
                            </li>
                            <li>
                                <p onclick="cambio('forms/Form_ModificaUsuario.php')">Modifica Usuario</p>
                            </li>
                            <li>
                                <p onclick="cambio('procesa/Procesa_ListadoUsuario.php')">Lista Usuario</p>
                            </li>
                        </ul>
                    </div>  
                </div>                    
                <div class="col-md-9">
                    <iframe name="conten" src="" style="width: 100% !important; height: 100% !important"></iframe>
                </div> 
            </div>
        </div>
    </body>
</html>
