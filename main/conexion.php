<?php
$mysqli = new mysqli('localhost','root','','genesis_sle');
if($mysqli->connect_errno):
    echo "Error al conectarse con base de datos".$mysqli->connect_error;
endif;
?>