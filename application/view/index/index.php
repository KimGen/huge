<div class="container">
    <?php $this->renderFeedbackMessages(); ?>
    <p class="text-center"><small><em>Software obstétrico propiedad intelectual Dr. Rudecindo Lagos, Maternidad Hospital Regional de Temuco, Facultad de Medicina Universidad de La Frontera Temuco - Chile</em></small></p>
    <div class="row">
    <?php if (Session::userIsLoggedIn() == false) { ?>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5>Ingresar a la plataforma</h5>
                    <form action="<?php echo Config::get('URL'); ?>login/login" method="post">
                        <div class="form-group">
                            <label for="user.email">Correo Electrónico</label>
                            <input type="email" name="user_name" class="form-control" id="user.email" required>
                        </div>
                        <div class="form-group">
                            <label for="user.password">Contraseña</label>
                            <input type="password" class="form-control" name="user_password" id="user.password" required>
                        </div>
                        <input type="hidden" name="set_remember_me_cookie" class="remember-me-checkbox" />
                        <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-outline-primary" id="button.ingresar">Ingresar</button>
                            <button class="btn btn-outline-info" id="">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5>Bienvenido <?php echo Session::get('user_name'); ?></h5>
                    <p>Seleccione las opciones del menú superior para continuar</p>
                </div>
            </div>
        </div>
    <?php } ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <p class="text-justify text-azul"><small><em>Sitio web diseñado para profesionales de la salud (médicos) vinculados con la vigilancia del control prenatal.<br>El objetivo de esta aplicación es facilitar a los educandos y profesionales en formación, valoración de datos obstétricos ecográficos relacionados con la vigilancia del crecimiento fetal.<br>Actualmente el software consta de tres módulos, estrechamente relacionados entre sí, módulos mediante los cuales se pretende orientar al examinador en los tópicos que a continuación se señalan:<br><br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Determinación ecográfica de la edad gestacional<br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valoración de biometrías y crecimiento fetal<br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flujometria Doppler Materno / Fetal básico.</em></small></p>
                        </div>
                        <div class="col-5">
                            <img src="https://servidor.crecimientofetal.cl/img/feto-computador.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-center"><small><em>Herramientas informáticas (aplicación web y apps para smartphone), tienen como objetivo principal favorecer cálculo y análisis preliminar de <strong>DATOS</strong> ecográfico obtenidos en el examen. Datos procesados en referencia a estándares internacionales de uso habitual, que de forma protocolizada son convertidos en <strong>INFORMACIÓN</strong> clínica. El uso de esta información es de exclusiva responsabilidad de quien realiza y certifica el examen y dependerá del <strong>JUCIO CLÍNICO</strong> del ecografista.</em></small></p>
                </div>
            </div>
        </div>
    </div>
</div>