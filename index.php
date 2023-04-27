<?php
  include_once("php/conexao.php");
  include_once("php/url.php");

  session_start();

  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $nome = $_SESSION['nome'];
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

    <title>Início</title>
</head>
<body>
    
  <?php include_once("templates/nav.php"); ?>
    <main class="container">
        <div class="div-welcome">
            <h1 class="h1-welcome">Bem-vindo ao InventoryControl</h1>
            <p class="p-welcome">Monitore seu estoque de forma prática e acabe de vez com a perda de eficiência!</p>
        </div>
        <div class="div-art-welcome">
            <img class="art-welcome" src="./images/art-welcome.png">
        </div>
    </main>

  <?php include_once("templates/footer.php"); ?>
  <script src="https://kit.fontawesome.com/5fda86d671.js" crossorigin="anonymous"></script>
  <script src="<?= $BASE_URL ?>/js/index.js"></script>
</body>
</html>