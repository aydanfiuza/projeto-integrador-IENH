<?php
  include_once("php/conexao.php");
  include_once("php/url.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/responsive.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  
</head>
<body>
  <?php include_once("templates/nav.php"); ?>

  
  <main class="container">
    <div class="container-form">
      <form action="" id="form-login" id="formulario">
        <h1 class="h1-cadastro">Login</h1>
        <div class="form-inputs-container">
          <input type="text" class="form-control" id="login-email" placeholder="E-mail" required>
          <input type="password" class="form-control" id="login-senha" placeholder="Senha" required>
        </div>
      </form>
    </div>
  </main>


  <?php include_once("templates/footer.php"); ?>
  <script src="https://kit.fontawesome.com/5fda86d671.js" crossorigin="anonymous"></script>
  <script src="<?= $BASE_URL ?>/js/index.js"></script>

</body>
</html>