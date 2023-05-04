<?php
  include_once("php/conexao.php");
  include_once("php/url.php");
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/cadastroNew.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/responsive.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Início</title>
</head>
<body>
    
    <?php include_once("templates/nav.php"); ?>
        
    <main class="container">
        <div class="container-form" id="container-form">
            <form action="cadastro.php" method="post" id="formulario">
                <h1 class="h1-cadastro">Cadastro</h1>
            <div class="form-inputs-container">
                <input class="input" id="referencia" name="referencia" required="required" type="number" max="999999" placeholder="Referência do produto"/>

                <input class="input" id="produto" name="produto" required="required" type="text" placeholder="Nome do produto"/>

                <input class="input" id="valor_unitario" name="valor_unitario" required="required" type="number" max="999999" placeholder="Valor unitário"/>
            
                <input class="input" id="descricao" name="descricao" required="required" type="text" placeholder="Descrição do produto"/>

                <input type="submit" id="submit-button"></input>
            </div>
            </form>
        </div>
    </main>


    <?php include_once("templates/footer.php"); ?>


    <script src="https://kit.fontawesome.com/5fda86d671.js" crossorigin="anonymous"></script>
    <script src="<?= $BASE_URL ?>/js/index.js"></script>
    
</body>
</html>