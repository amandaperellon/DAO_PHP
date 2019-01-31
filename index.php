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


$usuario = new Usuario();
$usuario->login("Camila", "998");
echo $usuario;


// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuario");

// echo json_encode($usuarios);




?>