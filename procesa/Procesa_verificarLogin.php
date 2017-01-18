<?php
	$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "empresa";
        
	$connect = 	new mysqli($servername, $username, $password, $dbname);

	$query = 'SELECT login FROM usuarios where login = "'.$_REQUEST['login'].'"';
	$resultado = $connect->query($query);
        
	if($resultado->num_rows === 0){
		echo "true";
	}else{
		echo "false";
	}
        $connect->close();
?>