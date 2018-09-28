<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

$jose = new Usuario();
$jose->loadbyId(3);

echo $jose;

?>