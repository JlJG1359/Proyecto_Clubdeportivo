<?php
$mysqli = new mysqli("localhost", "root", "", "clubdeportivo");
if($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL";
}
?>