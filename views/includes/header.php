<?php

  // ini_set('sesion.gc_maxlifetime',10);
  // ini_set('sesion.cookie_lifetime',10);
  require_once('././config/usuarioDAO.php');
  

?>
<!DOCTYPE html PUBLIC>
<html>
  <head>
    <title>Carta el Pato Gordo</title>

    <meta charset="UTF-8" />
    <meta name="description" content="Descripció web" />
    <meta name="keywords" content="Paraules clau" />
    <meta name="author" content="Autor" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.2/examples/navbars/"
    />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="../assets/css/full_estil.css"
      rel="stylesheet"
      type="text/css"
      media="screen"
    />

    <meta http-equiv="refresh" content="2000" />
  </head>

  <header>
    <nav class="navbar navbar-expand-lg navBar">
      <div class="container-xxl contenedor-xxl">
        <button class="navbar-toggler" type="button" 
        data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" 
        aria-controls="navbarTogglerDemo01" aria-expanded="false" 
        aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img
          src="../assets/images/Logo1_P2_deHaro_Luis.jpg"
          alt=""
          width="100"
          height="100"
        />
        <a class="navbar-brand h1Format" href="./index.php"
          >El Pato <br />Gordo</a
        >
        <div id="botones_tienda_smartphone">
          <a href="iniciar_session.php" class="me-3"
            ><img src="../assets/images/iniciar_sesion.png" alt=""
          /></a>
          <a href="carrito.php"><img src="../assets/images/cesta-de-la-compra.png" alt="" /></a>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto mb-2 lg-0 mx-auto ulNavBar">
            <li class="nav-item">
              <a class="nav-link navLetras" aria-current="page" href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link navLetras" href=<?= base_url. 'home/carta' ?>>Carta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLetras" href=<?= base_url. 'home/contacta' ?>>Contacto</a>
            </li>
          </ul>

          <div
            id="botones_tienda_escritorio"
            class="form-inline my-2 my-lg-0 ms-auto"
          >
          <p><?php usuarioDao::$userName?></p>
          
            <a href=<?= base_url. 'home/iniciar_session'?> class="me-3"
              ><img src="../assets/images/iniciar_sesion.png" alt=""
            /></a>
            <a href=<?=  base_url. 'home/carrito'?>
              ><img
                src="../assets/images/cesta-de-la-compra.png"
                alt=""
                width="36"
                height="36"
            /></a>
          </div>
        </div>
      </div>
    </nav>
  </header>

