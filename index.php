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
/*
$usuario = new Usuario();
$usuario->login("Malu", "654");
echo $usuario;

//Criando um novo usuario
$aluno = new Usuario("Washington", "102030");

//$aluno->setDeslogin("novo");
//$aluno->setDessenha("@!$123");
$aluno->insert();
echo $aluno;

//Alterar um usuario.
$usuario = new Usuario();
$usuario->loadbyId(7);
$usuario->update("professor", "789654000");
echo $usuario;
*/
$usuario = new Usuario();
$usuario->loadbyId(9);
$usuario->delete();

echo $usuario;

?>