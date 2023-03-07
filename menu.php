<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img
        src="imagens/A.gif"
        height="40"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
        class="rounded-circle";
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil-painel.php">Painel</a>
        </li>
        <li>
          <a class="nav-link" href="perfil-novo.php">Novo</a>
        </li>
        <li>
          <a class="nav-link" href="perfil-visualizar.php">Visualizar</a>
        </li>
      </ul>

      <div class="d-flex align-items-center">
        <img 
            src="imagens/homemFerro.jpg"
            height="40";
            class="rounded-circle";
        />
        <a href="logout.php"> <?php echo $_SESSION["cad_usuario"]; ?> [ Sair ]</a>
      </div>
    </div>
  </div>
</nav>
