<div class="container">
    <p class="text-center"><small><em>Software obstétrico propiedad intelectual Dr. Rudecindo Lagos, Maternidad Hospital Regional de Temuco, Facultad de Medicina Universidad de La Frontera Temuco - Chile</em></small></p>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5>Ingresar a la plataforma</h5>
                    <div class="form-group">
                        <label for="user.email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="user.email">
                    </div>
                    <div class="form-group">
                        <label for="user.password">Contraseña</label>
                        <input type="password" class="form-control" id="user.password">
                    </div>
                    <input type="hidden" id="user.token" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
                    <div class="btn-group" role="group">
                        <button class="btn btn-outline-primary" id="button.ingresar">Ingresar</button>
                        <button class="btn btn-outline-info">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <p class="text-justify text-azul"><small><em>Sitio web diseñado para profesionales de la salud (médicos) vinculados con la vigilancia del control prenatal.<br>El objetivo de esta aplicación es facilitar a los educandos y profesionales en formación, valoración de datos obstétricos ecográficos relacionados con la vigilancia del crecimiento fetal.<br>Actualmente el software consta de tres módulos, estrechamente interrelacionados entre sí, módulos mediante los cuales se pretende orientar al examinador en los tópicos que a continuación se señalan:<br><br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Determinación ecográfica de la edad gestacional<br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valoración de biometrías y crecimiento fetal<br>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flujometria Doppler Materno / Fetal básico.</em></small></p>
        </div>
        <div class="col-3">
            <img src="https://servidor.crecimientofetal.cl/img/feto-computador.png" class="img-fluid">
        </div>
    </div>
    <div class="row bg-light rounded">
        <div class="col-12">
            <p class="text-center"><small><em>Herramientas informáticas (aplicación web y apps para smartphone), tienen como objetivo principal favorecer cálculo y análisis preliminar de <strong>DATOS</strong> ecográfico obtenidos en el examen. Datos procesados en referencia a estándares internacionales de uso habitual, que de forma protocolizada son convertidos en <strong>INFORMACIÓN</strong> clínica. El uso de esta información es de exclusiva responsabilidad de quien realiza y certifica el examen y dependerá del <strong>JUCIO CLÍNICO</strong> del ecografista.</em></small></p>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){

        $("#button\\.ingresar").on("click", function(){
            let login = {
                user_name: $("#user\\.email").val(),
                user_password: $("#user\\.password").val(),
                csrf_token: $("#user\\.token").val()
            }

            $.post( "login/login", login).done(function( data ) {
                window.location.assign("pacientes/index");
            });
        });
    });
</script>