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
        
      <li id="home" <?php if(isset($username)) {echo 'class="link-enabled"';} else {echo 'class="link-disabled"';} ?>>
        <i <?php if (isset($username)) {echo 'id="cor0" class="i-link-enabled fa-solid fa-house"';} else {echo 'class="i-link-disabled fa-solid fa-house"';}?>></i>
        <span>Home</span>
      </li>
      <li id="cadastro" <?php if(isset($username)) {echo 'class="link-enabled"';} else {echo 'class="link-disabled"';} ?>>
        <i <?php if (isset($username)) {echo 'id="cor1" class="i-link-enabled fa-solid fa-arrow-up-from-bracket"';} else {echo 'class="i-link-disabled fa-solid fa-arrow-up-from-bracket"';}?>></i>
        <span>Cadastro</span>
      </li>
      <li id="entrada" <?php if(isset($username)) {echo 'class="link-enabled"';} else {echo 'class="link-disabled"';} ?>>
        <i <?php if (isset($username)) {echo 'id="cor2" class="i-link-enabled fa-solid fa-plus"';} else {echo 'class="i-link-disabled fa-solid fa-solid fa-plus"';}?>></i>
        <span>Entrada</span>
      </li>
      <li id="saida" <?php if(isset($username)) {echo 'class="link-enabled"';} else {echo 'class="link-disabled"';} ?>>
        <i <?php if (isset($username)) {echo 'id="cor3" class="i-link-enabled fa-solid fa-minus"';} else {echo 'class="i-link-disabled fa-solid fa-minus fa-plus"';}?>></i>
        <span>Saída</span>
      </li>
      <li id="relatorio" <?php if(isset($username)) {echo 'class="link-enabled"';} else {echo 'class="link-disabled"';} ?>>
        <i <?php if (isset($username)) {echo 'id="cor4" class="i-link-enabled fa-solid fa-file"';} else {echo 'class="i-link-disabled fa-solid fa-file"';}?>></i>
        <span>Relatório</span>
      </li>
    </ul>
  </nav>
</header>
