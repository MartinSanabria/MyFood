<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFood | <?= $viewData["title"] ?? DEFAULT_TITLE ?></title>

    <!-- Bootstrap V5.2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Sweat Alert V2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- PERSONAL CSS -->
    <link rel="stylesheet" href="<?= URL . "public/css/style.css" ?>">

    <link rel="shortcut icon" href="<?= URL . "public/img/logo.png" ?>" type="image/x-icon">
</head>
<body>

<!-- Inicio Navbar -->
<nav class="navbar navbar-expand-lg bg-light mb-3 navbar-fixed">
  <div class="container">
    <a class="navbar-brand" href="./">PupuSA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Opciones del menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex flex-lg-row flex-md-column w-100 justify-content-between">
            <ul class="navbar-nav align-middle">
                <li class="nav-item">
                <a class="nav-link" href="<?=URL?>">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?=URL?>Food">Comida</a>
                </li>
                <li class="nav-item">
                <a class="nav-link"  href="<?=URL?>Home/Nosotros">Nosotros</a>
                </li>
            </ul>

            <!-- Inicio -->
            <ul  class="navbar-nav align-middle">
                <li class="nav-item registrar-btn">
                    <a href="<?=URL?>Home/" class="nav-link">
                        Regresar
                    </a>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>
<!-- Fin navbar -->
