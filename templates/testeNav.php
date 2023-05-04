<?php
  include_once("php/conexao.php");
  include_once("php/url.php");

  $pagina = $_SERVER['REQUEST_URI'];
  

  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
  }

  $link = [];
  if (isset($username)) {
    $link['li'] = 'link-enabled';
    $link['i'] = 'i-link-enabled';
  } else {
    $link['li'] = 'link-disabled';
    $link['i'] = 'i-link-disabled';
  }

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/responsive.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/navbarStyle.css">
    <?php if ($pagina == "/projeto-integrador-IENH/cadastroNew.php" || $pagina == "/projeto-integrador-IENH/cadastroNew" ): ?>
      <link rel="stylesheet" href="<?= $BASE_URL ?>/css/cadastroNew.css">
    <?php endif; ?>

    <title><?= $titulo ?></title>
</head>
<body>
<header>
  <div class="div-logo">
   
  </div>
  <nav class="navbar">
    <ul>
      <!-- SE USERNAME NÃO ESTIVER SETADO NA SESSÃO: -->
      <?php if (!isset($username)): ?>
        <li id="login" class="link-enabled">
          <a href="login.php">
            <i id ="cor5" class="fa-solid fa-right-to-bracket"></i>
            <span>Login</span>
          </a>
        </li>
      <!-- SE ESTIVER -->
      <?php else: ?>
        <li id="username" class="link-enabled">
          <i id ="cor5" class="fa-solid fa-user"></i>
          <span><?= $username ?></span>
        </li>
      <!-- FIM IF -->
      <?php endif; ?>
        
      <!-- LINK INDEX/HOME -->
      <a href="<?= $BASE_URL ?>/index.php">
        <li id="home" class="<?= $link['li'] ?>">
          <i <?php if (isset($username)) {echo 'id="cor0"';}?> class="<?= $link['i'] ?> fa-solid fa-house"></i>
          <span>Home</span>
        </li>
      </a>

      <!-- LINK CADASTRO NEW -->
      <a href="<?= $BASE_URL ?>/cadastroNew.php">
        <li id="cadastro" class="<?= $link['li'] ?>">
          <i <?php if (isset($username)) {echo 'id="cor1"';}?> class="<?= $link['i'] ?> fa-solid fa-arrow-up-from-bracket"></i>
          <span>Cadastro</span>
        </li>
      </a>

      <li id="entrada" class="<?= $link['li'] ?>">
        <i <?php if (isset($username)) {echo 'id="cor2"';}?> class="<?= $link['li'] ?> fa-solid fa-plus"></i>
        <span>Entrada</span>
      </li>

      <li id="saida" class="<?= $link['li'] ?>">
        <i <?php if (isset($username)) {echo 'id="cor3"';}?> class="<?= $link['li'] ?> fa-solid fa-minus"></i>
        <span>Saída</span>
      </li>

      <li id="relatorio" class="<?= $link['li'] ?>">
        <i <?php if (isset($username)) {echo 'id="cor4"';}?> class="<?= $link['li'] ?> fa-solid fa-file"></i>
        <span>Relatório</span>
      </li>

    </ul>
  </nav>
</header>

