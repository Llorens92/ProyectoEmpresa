<?php
	$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "empresa";
        
	$connect = 	new mysqli($servername, $username, $password, $dbname);

	$query = "SELECT login FROM usuarios where login = '".$_REQUEST['login']."'";
	$resultado = $connect->select($query);
	if(is_null($resultado)){
		echo "true";
	}else{
		echo "false";
	}
?>