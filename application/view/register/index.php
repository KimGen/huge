<div class="container">
    <?php $this->renderFeedbackMessages(); ?>
    <h5 class="text-center">Formulario solicitud registro de usuarios</h5>
    <form method="post" action="<?php echo Config::get('URL'); ?>register/register_action">
        <div class="row">
            <div class="form-group col"> <label for="contact-username">Nombre de usuario</label> <input pattern="[a-zA-Z0-9]{2,64}" name="user_name" class="form-control" id="contact-username" type="text"><small class="form-text text-muted">Un nombre para identificar cuenta en la plataforma, sin espacios (ej: drJuan)</small></div>
            <div class="form-group col"> <label for="contact-name">Nombre, Apellido</label> <input class="form-control" id="contact-name" type="text"><small class="form-text text-muted">Nombre real</small></div>
            <div class="form-group col"> <label for="contact-id">RUT o DNI</label> <input class="form-control" id="contact-id" type="text"></div>
        </div>
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
            <div class="form-group col"> <label for="contact-email">Correo electrónico</label> <input name="user_email" class="form-control" id="contact-email" type="email"> <small class="form-text text-muted">Nunca compartiremos tu correo con terceros</small></div>
            <div class="form-group col"> <label for="contact-email-dos">Repetir Correo electrónico</label> <input name="user_email_repeat" class="form-control" id="contact-email-dos" type="email"> <small class="form-text text-muted">Para verificar si escribiste bien tu correo</small></div>
        </div>
        <div class="row">
            <div class="form-group col"> <label for="contact-contrasena">Contraseña</label> <input name="user_password_new" class="form-control" id="contact-contrasena" type="password"> <small class="form-text text-muted">Una contraseña para que puedas acceder a tu cuenta</small></div>
            <div class="form-group col"> <label for="contact-contrasena-dos">Repetir contraseña</label> <input name="user_password_repeat" class="form-control" id="contact-contrasena-dos" type="password"> <small class="form-text text-muted">verifica tu contraseña</small></div>
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
            <div class="form-group"> <label for="contact-comments">Comentarios y sugerencias</label> <input class="form-control" id="contact-comments" type="text"> </div>
            <img id="captcha" class="rounded mx-auto d-block" src="https://servidor.crecimientofetal.cl/register/showCaptcha">
            <a href="#" class="d-block text-center" onclick="document.getElementById('captcha').src = 'https://servidor.crecimientofetal.cl/register/showCaptcha?' + Math.random(); return false">Cambiar imágen</a>
            <div class="form-group"> <label for="contact-comments" class="text-center">Escriba las palabras y numeros de la imágen</label> <input class="form-control" name="captcha" required="" type="text"> </div>
    </form>
    <form method="post" action="<?php echo Config::get('URL'); ?>register/register_action">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Registrar cuenta</button>
    </form>
    <!-- login box on left side -->
    <div class="login-box" style="width: 50%; display: block;">
        <h2>Register a new account</h2>

        <!-- register form -->
        <form>
            <!-- the user name input field uses a HTML5 pattern check -->
            <input type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Username (letters/numbers, 2-64 chars)" required />
            <input type="text" name="user_email" placeholder="email address (a real address)" required />
            <input type="text" name="user_email_repeat" placeholder="repeat email address (to prevent typos)" required />
            <input type="password" name="user_password_new" pattern=".{6,}" placeholder="Password (6+ characters)" required autocomplete="off" />
            <input type="password" name="user_password_repeat" pattern=".{6,}" required placeholder="Repeat your password" autocomplete="off" />

            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <img id="captcha" src="<?php echo Config::get('URL'); ?>register/showCaptcha" />
            <input type="text" name="captcha" placeholder="Please enter above characters" required />

            <!-- quick & dirty captcha reloader -->
            <a href="#" style="display: block; font-size: 11px; margin: 5px 0 15px 0; text-align: center"
               onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>register/showCaptcha?' + Math.random(); return false">Reload Captcha</a>

            <input type="submit" value="Register" />
        </form>
    </div>
</div>