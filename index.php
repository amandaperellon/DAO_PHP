<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("config.php");


//carrega uma lista de usuários
// $list = Usuario::getList();
// echo json_encode($list);


//carrega uma lista de usuários pelo login
// $login = Usuario::search("a");
// echo json_encode($login);


//carrega um usuário
// $root = new Usuario();
// $root->loadById(2);
// echo $root;


//autenticação
// $usuario = new Usuario();
// $usuario->login("Camila", "998");
// echo $usuario;

//Inserindo uma linha na tabela
// $aluno = new Usuario("Pedro", "pepe44");
// $aluno->insert();
// echo $aluno;

$usuario = new Usuario();
$usuario->loadById(1);
$usuario->update("Jade", "jadinha");
echo $usuario;



//modo manual
// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuario");

// echo json_encode($usuarios);

?>