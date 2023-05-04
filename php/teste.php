<?php

include_once("conexao.php");
include_once("classes.php");

$user = new Usuario($conexao);

$user->setUsername("lucassantos");
$user->setNome("Lucas Santos");
$user->setEmail("lucassantos@gmail.com");
$user->setSenha("lucassantos123");
$user->setCNPJ("XX.XX.XXX/0001-XX");

$user->inserirUsuario();
// $user->loginUser();