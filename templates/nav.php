<header>
  <div class="div-logo">
   
  </div>
  <nav class="navbar">
    <ul>
      <!-- SE USERNAME NÃO ESTIVER SETADO NA SESSÃO: -->
      <?php if (!isset($_SESSION['username'])): ?>
        <li id="login">
          <a href="login.php">
            <i id ="cor5" class="fa-solid fa-right-to-bracket"></i>
            <span>Login</span>
          </a>
        </li>
      <!-- SE ESTIVER -->
      <?php else: ?>
        <li id="username">
          <span><?= $_SESSION['username'] ?></span>
        </li>
      <!-- FIM IF -->
      <?php endif; ?>
        
      <li id="home">
        <i id="cor0" class="fa-solid fa-house"></i>
        <span>Home</span>
      </li>
      <li id="cadastro">
        <i id="cor1" class="fa-solid fa-arrow-up-from-bracket"></i>
        <span>Cadastro</span>
      </li>
      <li id="entrada">
        <i id="cor2" class="fa-solid fa-plus"></i>
        <span>Entrada</span>
      </li>
      <li id="saida">
        <i id="cor3" class="fa-solid fa-minus"></i>
        <span>Saída</span>
      </li>
      <li id="relatorio">
        <i id="cor4" class="fa-solid fa-file"></i>
        <span>Relatório</span>
      </li>
    </ul>
  </nav>
</header>
