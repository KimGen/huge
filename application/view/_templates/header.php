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
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="<?php echo Config::get('URL'); ?>">CrecimientoFetal.cl</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHome" aria-controls="navbarHome" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHome">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if (View::checkForActiveController($filename, "index")) { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo Config::get('URL'); ?>">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <?php if (Session::userIsLoggedIn()) { ?>
                        <li class="nav-item <?php if (View::checkForActiveController($filename, "dashboard")) { echo 'active'; } ?>">
                            <a class="nav-link" href="<?php echo Config::get('URL'); ?>pacientes/index">Pacientes</a>
                        </li>
                        <li class="nav-item <?php if (View::checkForActiveController($filename, "note")) { echo 'active'; } ?>">
                            <a class="nav-link" href="<?php echo Config::get('URL'); ?>ecografia/index">Ecografia</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item <?php if (View::checkForActiveController($filename, "register/index")) { echo 'active'; } ?>">
                            <a class="nav-link" href="<?php echo Config::get('URL'); ?>register/index">Crear cuenta</a>
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
                <?php } else { ?>
                    <ul class="navbar-nav">
                        <li class="nav-item <?php if (View::checkForActiveController($filename, "login/index")) { echo 'active'; } ?>">
                            <a class="btn btn-outline-light my-2 my-sm-0" href="<?php echo Config::get('URL'); ?>login/index">Ingresar</a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </nav>