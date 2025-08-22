<?php
session_start();
?>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="midias-portal/img/logo.png" alt="Logo" width="50" height="40" class="d-inline-block align-text-top">
    </a>
    <i class='fa fa-user-circle' style='font-size:24px'>&ensp;<?php echo $operador?></i>
</nav>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" id="header"><i class="fa fa-thumb-tack">&ensp;</i>Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="header">
          <i class="fa fa-plus">&ensp;</i>ADICIONAR
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-address-card">&ensp;</i> Cliente </a></li>
            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-cart-plus">&ensp;</i> Planos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-calendar">&ensp;</i> Atendimento</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="header"><i class="fa fa-credit-card-alt"></i>&ensp;</i>Faturas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="header">
          <i class="fa fa-server">&ensp;</i>LISTAR
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-address-card">&ensp;</i> Clientes </a></li>
            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-cart-plus">&ensp;</i> Planos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="planos.php"><i class="fa fa-calendar">&ensp;</i> Atendimentos</a></li>
          </ul>
        </li>
      </ul>
      <a href="logout.php" class="btn btn-outline-light"><i class="fa fa-reply"></i>&ensp;</i> Sair </a>
    </div>
  </div>
</nav>