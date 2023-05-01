<?php 
  $link = [];
  if (isset($username)) {
    $link['li'] = 'link-enabled';
    $link['i'] = 'i-link-enabled';
  } else {
    $link['li'] = 'link-disabled';
    $link['i'] = 'i-link-disabled';
  }
?>

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
          <span><?= $username ?></span>
        </li>
      <!-- FIM IF -->
      <?php endif; ?>
        
      <li id="home" class="<?= $link['li'] ?>">
        <i <?php if (isset($username)) {echo 'id="cor0"';}?> class="<?= $link['i'] ?> fa-solid fa-house"></i>
        <span>Home</span>
      </li>
      <li id="cadastro" class="<?= $link['li'] ?>">
        <i <?php if (isset($username)) {echo 'id="cor1"';}?> class="<?= $link['i'] ?> fa-solid fa-arrow-up-from-bracket"></i>
        <span>Cadastro</span>
      </li>
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
