<?php

    // Iniciando a sessão
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_cache_expire(30); // Definindo o prazo para expirar a sessão em 30 minutos
	session_start();
}

    include_once("conexao.php");

    $username = $_POST['username'];
    $senha = $_POST['senhadigitada'];

    $resultLogin = $conexao->prepare("SELECT id, nome, senha FROM usuario WHERE nome = ? AND senha = ? limit 1");


    $resultLogin->bindParam(1, $username, PDO::PARAM_STR);
    $resultLogin->bindParam(2, $senha, PDO::PARAM_STR);

    $resultLogin->execute();

    $usuario = $resultLogin->fetch();

    if (!$usuario) {
        echo "DEU MERDA!!! <br>";
    } else {

        $_SESSION['usuario'] = $usuario['nome'];
        $_SESSION['id'] = $usuario['id'];

        echo $_SESSION['usuario'] . "<br>";
        echo $_SESSION['id'] . "<br>";

        header("Location: tabela_teste_sla.php");


    }

    





?>