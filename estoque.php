<?php
  include_once("php/conexao.php");
  include_once("php/url.php");
  
  $query = $conexao->prepare("SELECT * FROM produto");
  $query->execute();
  $res = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?= $BASE_URL ?>../js/tableFilter.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/estoque.css">

    <title>Estoque</title>
</head>
<body>  
    <header>
        <menu>
            <ul>
                <li class="cabecalho"><a href="index.php">INÍCIO</a></li>
                <li class="cabecalho"><a href="cadastroNew.php">CADASTRO</a></li>
                <li class="cabecalho"><a href="entrada.php">ENTRADA</a></li>
                <li class="cabecalho"><a href="saida.php">SAÍDA</a></li>
                <li class="cabecalho pg_atual">ESTOQUE</li>
            </ul>
        </menu>
    </header>

    <main>

        <div class="container" >

            <div class="content">
                <H1>ESTOQUE ATUAL</H1>
                <br>
                    <table id="tabela">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Descrição</th>
                                <th>Quantidade</th>
                            </tr>
                            <tr>
                                <th><input type="text" id="txtColuna1"/></th>
                                <th><input type="text" id="txtColuna2"/></th>
                                <th><input type="text" id="txtColuna3"/></th>
                            </tr>            
                        </thead>
                        <tbody>
                            <?php foreach ($res as $dado): ?>
                                <tr>
                                    <td><?= $dado['idProduto'] ?></td> 
                                    <td><?= $dado['Descrição'] ?></td> 
                                    <td><?= $dado['Quantidade'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
        </main>
    <footer>Desenvolvido por</footer>
    
</body>
</html>