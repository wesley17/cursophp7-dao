<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//Carrega um unico usuário
//$jose = new Usuario();
//$jose->loadbyId(6);
//echo $jose;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("Ma");
//echo json_encode($search);

//Carrega um usuário usando um login ou uma senha

$usuario = new Usuario();
$usuario->login("Malu", "654");

echo $usuario;

?>