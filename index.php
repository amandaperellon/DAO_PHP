<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once("config.php");

$root = new Usuario();
$root->loadById(2);
echo $root;



// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuario");

// echo json_encode($usuarios);




?>