<!doctype html>
<html>
<head>
    <title>Crecimiento Fetal</title>
    <meta charset="utf-8">
    <link rel="icon" href="data:;base64,=">
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/bootstrap.min.css">
    <script src="<?php echo Config::get('URL'); ?>js/base.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
</head>
<style>
        .g-verde {
            background-color:#009688;
        }
    </style>
<body>
    <div class="container">
        <div class="row w-100">
            <div class="col-1">
                <img class="img-fluid w-100" src="img/ic_launcher-web.png" alt="logo" style="max-width: 128px;">
            </div>
            <div class="col-11">
                <p class="float-right" name="fechaHora" style="color: #f0df90;">Domingo, 2 de Diciembre 2018</p>
                <h5 class="text-white mt-0 mb-1"><em>CrecimientoFetal.cl</em></h5>
                <p class="text-white"><em>Ultrasonografía obstétrica básica para profesionales</em></p>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark g-verde">
        <div class="container">
            <a class="navbar-brand" href="<?php echo Config::get('URL'); ?>">CrecimientoFetal.cl</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHome" aria-controls="navbarHome" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHome">
                <ul class="navbar-nav mr-auto">
                <?php if (Session::userIsLoggedIn()) { ?>
                    <li class="nav-item <?php if (View::checkForActiveController($filename, "dashboard")) { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo Config::get('URL'); ?>pacientes/index">Pacientes</a>
                    </li>
                <?php } ?>
                </ul>
                <?php if (Session::userIsLoggedIn()) { ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo Session::get('user_name'); ?> </a>
                            <div class="dropdown-menu" aria-labelledby="navbarUser">
                                <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>configuracion/index"><i class="fas fa-cog"></i> Configuración</a>
                                <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/index">Mi cuenta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>
                                <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/editAvatar">Cambiar mi foto</a>
                                <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/editusername">Cambiar mi nombre de usuario</a>
                                <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/edituseremail">Cambiar mi email</a>
                                <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/changePassword">Cambiar mi contraseña</a>
                                <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>login/logout">Salir</a>
                                <div class="dropdown-divider"></div>
                                <?php if (Session::get("user_account_type") == 7) : ?>
                                    <a class="dropdown-item <?php if (View::checkForActiveController($filename, "admin")) {echo 'active';} ?>" href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </nav>