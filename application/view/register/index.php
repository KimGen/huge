<div class="container">
    <h1>Formulario solicitud registro de usuarios</h1>
    <?php $this->renderFeedbackMessages(); ?>
    <form method="post" action="<?php echo Config::get('URL'); ?>register/register_action">
        <div class="card">
            <div class="card-header">
                Identificación de la cuenta
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col"> <label for="contact-username">Nombre de usuario</label> <input pattern="[a-zA-Z0-9]{2,64}" name="user_name" class="form-control" id="contact-username" type="text" required><small class="form-text text-muted">Un nombre para identificar cuenta en la plataforma, sin espacios (ej: drJuan)</small></div>
                    <div class="form-group col"> <label for="contact-name">Nombre, Apellido</label> <input class="form-control" id="contact-name" type="text"><small class="form-text text-muted">Nombre real</small></div>
                    <div class="form-group col"> <label for="contact-id">RUT o DNI</label> <input class="form-control" id="contact-id" type="text"></div>
                </div>
                <div class="row">
                    <div class="form-group col"> <label for="contact-email">Correo electrónico</label> <input name="user_email" class="form-control" id="contact-email" type="email" required> <small class="form-text text-muted">Nunca compartiremos tu correo con terceros</small></div>
                    <div class="form-group col"> <label for="contact-email-dos">Repetir Correo electrónico</label> <input name="user_email_repeat" class="form-control" id="contact-email-dos" type="email" required> <small class="form-text text-muted">Para verificar si escribiste bien tu correo</small></div>
                </div>
                <div class="row">
                    <div class="form-group col"> <label for="contact-contrasena">Contraseña</label> <input name="user_password_new" class="form-control" id="contact-contrasena" pattern=".{6,}" type="password" required> <small class="form-text text-muted">Una contraseña para que puedas acceder a tu cuenta, mínimo 6 carácteres</small></div>
                    <div class="form-group col"> <label for="contact-contrasena-dos">Repetir contraseña</label> <input name="user_password_repeat" class="form-control" id="contact-contrasena-dos" pattern=".{6,}" type="password" required> <small class="form-text text-muted">verifica tu contraseña</small></div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                Identificación del profesional
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col"> <label for="contact-country">Nacionalidad</label> <input class="form-control" id="contact-country" type="text"> </div>
                    <div class="form-group col"> <label for="contact-job-location">Pais</label> <input class="form-control" id="contact-job-location" type="text"> </div>
                    <div class="form-group col"> <label for="contact-grade">Año de título profesional</label> <input class="form-control" id="contact-grade" type="text"> </div>
                </div>
                <div class="row">
                    <div class="form-group col"> <label for="contact-register">N° de registro profesional</label> <input class="form-control" id="contact-register" type="text"> </div>
                    <div class="form-group col"> <label for="contact-expertise">Años de experiencia en US Obstétrico</label> <input class="form-control" id="contact-expertise" type="text"> </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="contact-job">Profesión</label>
                        <select class="form-control" id="contact-job">
                        <option>Médico con especialidad en perinatología</option>
                        <option>Médico con especialidad en gineco-obstetricia</option>
                        <option>Médico sin especialidad en gineco-obstetricia</option>
                        <option>Médico en formación de la especialidad</option>
                        <option>Otros, ultrosonografistas gineco - obstétrico</option>
                        </select>
                    </div>
                    <div class="form-group col"> <label for="contact-phone">Teléfono de contacto</label> <input class="form-control" id="contact-phone" type="number"> </div>
                </div>
                <div class="row">
                    <div class="col">
                    <h5>Lugar de desempeño laboral</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col"> <label for="contact-city">Ciudad</label> <input class="form-control" id="contact-city" type="text"> </div>
                    <div class="form-group col"> <label for="contact-ss">Servicio de salud / Clínica</label> <input class="form-control" id="contact-ss" type="text"></div>
                    <div class="form-group col"><label for="contact-h">Hospital / Unidad académica</label> <input class="form-control" id="contact-h" type="text"></div>
                </div>
                <div class="row">
                    <div class="form-group col"> <label for="contact-consultorio">Consultorio público</label> <input class="form-control" id="contact-consultorio" type="text"> </div>
                    <div class="form-group col"> <label for="contact-private-job">Consulta privada</label> <input class="form-control" id="contact-private-job" type="text"> </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                Verificación de registro
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col"><img class="img-thumbnail" id="captcha" src="<?php echo Config::get('URL'); ?>register/showCaptcha" /></div>
                    <div class="form-group col"> <label for="captcha">Captcha</label> <input type="text" class="form-control" name="captcha" required /> </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar cuenta</button>
            </div>
        </div>
    </form>
</div>