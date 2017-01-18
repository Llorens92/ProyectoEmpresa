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
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <h1>Bienvenido a la Empresa</h1>
            </div>
            <div class="col-md-2"></div>                
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form class="form-horizontal" action="Procesa_altaUsuario.php" method="post" id="formulario">                    
                    <div class="form-group">
                        <label for="login" class="col-sm-2 col-md-offset-2 control-label">Login</label>
                        <div class="col-sm-10 col-md-5">
                            <input type="text" class="form-control" id="login" placeholder="Login" name="login" onblur="validarLogin()">
                        </div>
                    </div>
                    <div class="form-group" id="verificacion"  style="display: none;">
                        <label for="login" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <div id="caja"> 
                                <p style="margin: 0px; padding: 7px" id="texto"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 col-md-offset-2 control-label">Password</label>
                        <div class="col-sm-10 col-md-5">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 col-md-3 col-md-offset-4">
                            <button type="button" class="btn btn-default" onClick="validar()">Iniciar Sesión</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </body>
    <script>
        function validarLogin() {
            $.ajax({
                type: "POST",
                url: "procesa/Procesa_verificarLogin.php",
                data: {login: $("#login").val()}
            }).done(function (msg) {
                if (msg === "true") {
                    $("#texto").text("Este login esta disponible");
                    loginRepetido = false;
                    $("#verificacion").css("display","block");
                } else {
                    $("#texto").text("Este login no esta disponible");
                    loginRepetido = true;
                    $("#verificacion").css("display","block");
                }
            });
        }
    </script>
</html>
