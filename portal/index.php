<?php
    include('verifica_login.php');
    include('conexao.php');
?>
<!doctype html>
<html>
    
<head>
<title> INICIO | Pagina 01 </title>
        <?php include 'includes-portal/head.php'; ?>
</head>
    <body>
      <header>
    <?php include 'includes-portal/header.php'; ?>
      </header>
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="midias-portal/img/img5.jpg" height="500px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bem vindo ao maior provedor do Brasil</h5>
        <button type="button" class="btn btn-primary btn-lg"> Conheça nossos planos</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="midias-portal/img/img7.jpg"height="500px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bem vindo ao maior provedor do Brasil</h5>
        <button type="button" class="btn btn-primary btn-lg"> Conheça nossos Planos</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="midias-portal/img/img6.jpg" height="500px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bem vindo ao maior provedor do Brasil</h5>
        <button type="button" class="btn btn-primary btn-lg"> Conheça nossos planos</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
    </div>
    <footer>
    <?php  include 'includes-portal/footer.php'; ?>
    <footer>
    </body>
</html>