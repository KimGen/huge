<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="btn-group m-3" role="group">
                <button type="button" class="btn btn-outline-primary btn-lg" id="button.paciente.nuevo"><i class="fas fa-plus"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg" id="button.paciente.buscar"><i class="fas fa-search"></i></button>
                <div class="btn btn-outline-primary btn-lg d-none" id="interface.paciente.buscar"><input type="text" class="form-control" id="busqueda.pacientes" placeholder="buscar por rut o apellido"></div>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.guardar"><i class="fas fa-save"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.cancelar"><i class="fas fa-ban"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.eliminar"><i class="fas fa-trash"></i></button>
            </div>
        </div>
        <div class="col-7">
            <h4 class="text-right my-3">Datos de Pacientes</h4>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-none" id="interface.pacientes">
                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="user.email">RUT o DNI</label>
                                    <input type="number" class="form-control" id="pacientes.rut">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Nombres</label>
                                    <input type="text" class="form-control" id="pacientes.nombres">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Apellidos</label>
                                    <input type="text" class="form-control" id="pacientes.apellidos">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Edad</label>
                                    <select class="form-control" id="pacientes.nacimiento">
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Nacionalidad</label>
                                    <select class="form-control" id="pacientes.nacionalidad">
                                        <option value="1">Chilena</option>
                                        <option value="2">Argentina</option>
                                        <option value="3">Peruana</option>
                                        <option value="4">Colombiana</option>
                                        <option value="5">Venezolana</option>
                                        <option value="6">Uruguaya</option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Pais de residencia</label>
                                    <select class="form-control" id="pacientes.pais">
                                        <option value="1">Chilena</option>
                                        <option value="2">Argentina</option>
                                        <option value="3">Peruana</option>
                                        <option value="4">Colombiana</option>
                                        <option value="5">Venezolana</option>
                                        <option value="6">Uruguaya</option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Región o Provincia de residencia</label>
                                    <select class="form-control" id="pacientes.region">
                                        <option value="1">No</option>
                                        <option value="2">Tarapacá</option>
                                        <option value="3">Antofagasta</option>
                                        <option value="4">Atacama</option>
                                        <option value="5">Coquimbo</option>
                                        <option value="6">Valparaíso</option>
                                        <option value="7">Libertador General Bernardo O'Higgins</option>
                                        <option value="8">Maule</option>
                                        <option value="9">Bío Bío</option>
                                        <option value="10">La Araucanía</option>
                                        <option value="11">Los Lagos</option>
                                        <option value="12">Aisén del General Carlos Ibáñez del Campo</option>
                                        <option value="13">Magallanes y Antártica Chilena</option>
                                        <option value="14">Metropolitana de Santiago</option>
                                        <option value="15">Los Ríos</option>
                                        <option value="16">Arica y Parinacota</option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Previsión</label>
                                    <select class="form-control" id="pacientes.prevision">
                                        <option value="1">Fonasa A</option>
                                        <option value="2">Fonasa B</option>
                                        <option value="3">Fonasa C</option>
                                        <option value="4">Fonasa D</option>
                                        <option value="5">Isapre</option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="pacientes.email">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Telefono</label>
                                    <input type="email" class="form-control" id="pacientes.telefono">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Lugar de control</label>
                                    <input type="email" class="form-control" id="pacientes.lugar">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">RUT</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Previsión</th>
                                    </tr>
                                </thead>
                                <tbody id="table.pacientes">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        maketable();
        makeEdad();
        $("#button\\.paciente\\.nuevo").on("click", function(){
            $("#interface\\.pacientes").removeClass("d-none");
            $("#interface\\.paciente\\.buscar").addClass("d-none");
            $("#button\\.paciente\\.nuevo").addClass("d-none");
            $("#button\\.paciente\\.guardar").removeClass("d-none");
            $("#button\\.paciente\\.cancelar").removeClass("d-none");
            $("#button\\.paciente\\.buscar").addClass("d-none");
            $("#pacientes\\.rut").val("");
            $("#pacientes\\.nombres").val("");
            $("#pacientes\\.apellidos").val("");
            $("#pacientes\\.email").val("");
            $("#pacientes\\.nacimiento").val("");
            $("#pacientes\\.prevision").val("");
            $("#pacientes\\.nacionalidad").val("");
            $("#pacientes\\.region").val("");
            $("#pacientes\\.pais").val("");
            $("#pacientes\\.telefono").val("");
            $("#pacientes\\.lugar").val("");
        });

        $("#button\\.paciente\\.guardar").on("click", function(){
            $("#interface\\.pacientes").addClass("d-none");
            $("#button\\.paciente\\.nuevo").removeClass("d-none");
            $("#button\\.paciente\\.guardar").addClass("d-none");
            $("#button\\.paciente\\.cancelar").addClass("d-none");
            $("#button\\.paciente\\.buscar").removeClass("d-none");

            let paciente = {
                paciente_rut: $("#pacientes\\.rut").val(),
                paciente_nombre: $("#pacientes\\.nombres").val(),
                paciente_apellido: $("#pacientes\\.apellidos").val(),
                paciente_email: $("#pacientes\\.email").val(),
                paciente_nacimiento: $("#pacientes\\.nacimiento").val(),
                paciente_prevision: $("#pacientes\\.prevision").val(),
                paciente_nacionalidad: $("#pacientes\\.nacionalidad").val(),
                paciente_region: $("#pacientes\\.region").val(),
                paciente_pais: $("#pacientes\\.pais").val(),
                paciente_telefono: $("#pacientes\\.telefono").val(),
                paciente_lugar: $("#pacientes\\.lugar").val()
            }

            $.post( "new", paciente).done(function( data ) {
                $("#pacientes\\.rut").val("");
                $("#pacientes\\.nombres").val("");
                $("#pacientes\\.apellidos").val("");
                $("#pacientes\\.email").val("");
                $("#pacientes\\.nacimiento").val("");
                $("#pacientes\\.prevision").val("");
                $("#pacientes\\.nacionalidad").val("");
                $("#pacientes\\.region").val("");
                $("#pacientes\\.pais").val("");
                $("#pacientes\\.telefono").val("");
                $("#pacientes\\.lugar").val("");
                maketable();
            });
        });

        $("#button\\.paciente\\.cancelar").on("click", function(){
            $("#interface\\.pacientes").addClass("d-none");
            $("#button\\.paciente\\.nuevo").removeClass("d-none");
            $("#button\\.paciente\\.guardar").addClass("d-none");
            $("#button\\.paciente\\.cancelar").addClass("d-none");
            $("#button\\.paciente\\.buscar").removeClass("d-none");
            $("#pacientes\\.rut").val("");
            $("#pacientes\\.nombres").val("");
            $("#pacientes\\.apellidos").val("");
            $("#pacientes\\.email").val("");
            $("#pacientes\\.nacimiento").val("");
            $("#pacientes\\.prevision").val("");
            $("#pacientes\\.nacionalidad").val("");
            $("#pacientes\\.region").val("");
            $("#pacientes\\.pais").val("");
            $("#pacientes\\.telefono").val("");
            $("#pacientes\\.lugar").val("");
        });

        $("#button\\.paciente\\.eliminar").on("click", function(){
            $("#interface\\.pacientes").addClass("d-none");
            $("#pacientes\\.rut").val("");
            $("#pacientes\\.nombres").val("");
            $("#pacientes\\.apellidos").val("");
            $("#pacientes\\.email").val("");
            $("#pacientes\\.nacimiento").val("");
            $("#pacientes\\.prevision").val("");
            $("#pacientes\\.nacionalidad").val("");
            $("#pacientes\\.region").val("");
            $("#pacientes\\.pais").val("");
            $("#pacientes\\.telefono").val("");
            $("#pacientes\\.lugar").val("");
        });

        $("#button\\.paciente\\.buscar").on("click", function(){
            if ($("#interface\\.paciente\\.buscar").hasClass("d-none")){
                $("#interface\\.paciente\\.buscar").removeClass("d-none");
            }
            else{
                $("#interface\\.paciente\\.buscar").addClass("d-none");
            }
        });
    });

    function maketable(){
        $.get( "get").done(function( data ) {
            $("#table\\.pacientes").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let prevision = "";
                    $("#pacientes\\.prevision > option").each(function() {
                        if (this.value == value.paciente_prevision){
                            prevision = this.text;
                        }
                    });
                    let fila = '<tr><td>' + value.paciente_rut + '</td><td>' + value.paciente_nombre + '</td><td>' + value.paciente_apellido + '</td><td>' + value.paciente_nacimiento +' años</td><td>' + prevision +'</td></tr>';
                    $("#table\\.pacientes").append(fila);
                });
            }
        });
    }

    function makeEdad(){
        for (i = 10; i < 51; i++) {
            let option = "<option value=" + i + ">" + i + "</option>";
            $("#pacientes\\.nacimiento").append(option);
        }
    }
</script>