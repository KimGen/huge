<div class="container">
    <?php $this->renderFeedbackMessages(); ?>
    <div class="row">
        <div class="col-5">
            <div class="btn-group m-3" role="group">
                <button type="button" class="btn btn-outline-primary btn-lg" id="button.paciente.nuevo"><i class="fas fa-plus"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.guardar"><i class="fas fa-save"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.cancelar"><i class="fas fa-ban"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg" id="button.paciente.buscar"><i class="fas fa-search"></i></button>
                <div class="btn btn-outline-primary btn-lg d-none" id="interface.paciente.buscar"><input type="text" class="form-control" id="busqueda.pacientes" placeholder="buscar por rut o apellido"></div>
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
                                    <label for="user.rut">RUT o DNI</label>
                                    <input type="number" class="form-control" id="pacientes.rut">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.nombres">Nombres</label>
                                    <input type="text" class="form-control" id="pacientes.nombres">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.apellidos">Apellidos</label>
                                    <input type="text" class="form-control" id="pacientes.apellidos">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.nacimiento">Edad</label>
                                    <select class="form-control" id="pacientes.nacimiento">
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.nacionalidad">Pais de origen</label>
                                    <select class="form-control" id="pacientes.nacionalidad">
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.pais">Pais de residencia</label>
                                    <select class="form-control" id="pacientes.pais">
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.region">Región o Provincia de residencia</label>
                                    <select class="form-control" id="pacientes.region">
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.lugar">Lugar de control</label>
                                    <select class="form-control" id="pacientes.lugar"></select>
                                </div>

                                <div class="form-group col-3">
                                    <label for="user.email">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="pacientes.email">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.telefono">Telefono</label>
                                    <input type="number" class="form-control" id="pacientes.telefono">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.prevision">Previsión</label>
                                    <select class="form-control" id="pacientes.prevision"></select>
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
                                    <th scope="col">Acciones</th>
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
<div class="modal" tabindex="-1" role="dialog" id="dialog.view">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="dialog.title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="dialog.body"></div>
            <div class="modal-footer" id="dialog.footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        maketable();
        makeEdad();
        makeNacionalidad();
        makePrevision();
        makeLugar();
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
                paciente_prevision: ($("#pacientes\\.prevision option:selected").val() == "") ? 0 : $("#pacientes\\.prevision option:selected").val(),
                paciente_nacionalidad: ($("#pacientes\\.nacionalidad option:selected").val() == "") ? 0 : $("#pacientes\\.nacionalidad option:selected").val(),
                paciente_region: ($("#pacientes\\.region option:selected").val() == "") ? 0 : $("#pacientes\\.region option:selected").val(),
                paciente_pais: ($("#pacientes\\.pais option:selected").val() == "") ? 0 : $("#pacientes\\.pais option:selected").val(),
                paciente_telefono: ($("#pacientes\\.telefono").val() == "") ? 0 : $("#pacientes\\.telefono").val(),
                paciente_lugar: ($("#pacientes\\.lugar option:selected").val() == "") ? 0 : $("#pacientes\\.lugar option:selected").val(),
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

        $("#pacientes\\.pais").on("change", function(){
            makeRegion();
        });
    });

    function maketable(){
        $.get( "<?php echo Config::get('URL'); ?>pacientes/get").done(function( data ) {
            $("#table\\.pacientes").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let prevision = "";
                    $("#pacientes\\.prevision > option").each(function() {
                        if (this.value == value.paciente_prevision){
                            prevision = this.text;
                        }
                    });
                    let fila = '<tr data-id="' + value.paciente_rut + '"><td>' + value.paciente_rut + '</td><td>' + value.paciente_nombre + '</td><td>' + value.paciente_apellido + '</td><td>' + value.paciente_nacimiento +' años</td><td>' + prevision +'</td><td><div class="btn-group" role="group"><button type="button" class="btn btn-outline-secondary modificar" data-id="' + value.paciente_rut + '"><i class="fas fa-pen"></i></button><button type="button" class="btn btn-outline-secondary eliminar" data-id="' + value.paciente_rut + '"><i class="fas fa-trash"></i></button><button type="button" class="btn btn-outline-primary examen" data-id="' + value.paciente_rut + '"><i class="fas fa-notes-medical"></i></button></div></td></tr>';
                    $("#table\\.pacientes").append(fila);
                });

                $(".examen").on("click", function(){
                    window.location.href = '<?php echo Config::get('URL'); ?>ecografia/index/' + $(this).data("id");
                });

                $(".modificar").on("click", function(){
                    var id_paciente = $(this).data("id");

                    $("#dialog\\.body").html("");
                    $("#dialog\\.title").html("");
                    $("#dialog\\.footer").html("");
                    $("#dialog\\.view").modal("show");

                });

                $(".eliminar").on("click", function(){
                    var id_paciente = $(this).data("id");
                    var paciente = {
                        paciente_rut: id_paciente
                    }
                    $.post( "<?php echo Config::get('URL'); ?>pacientes/one", paciente).done(function( data ) {
                        $("#dialog\\.body").html('<p class="text-center"'> + data.paciente_nombre + ' ' + data.paciente_apellido + '</p>');
                    });

                    $("#dialog\\.title").html("¿Está seguro de eliminar el paciente seleccionado?");
                    $("#dialog\\.footer").append('<button type="button" class="btn btn-secondary" id="button.paciente.eliminar" data-id="' + id_paciente +'"><i class="fas fa-trash"></i></button>');

                    $("#button\\.paciente\\.eliminar").on("click", function(){
                        var paciente = {
                            paciente_rut: $(this).data("id")
                        }
                        $.post( "<?php echo Config::get('URL'); ?>pacientes/delete", paciente).done(function( data ) {
                            maketable();
                        });
                    });
                    $("#dialog\\.view").modal("show");
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

    function makeNacionalidad(){
        let region = {
            accion: "nacionalidad"
        }

        $.post( "<?php echo Config::get('URL'); ?>configuracion/api", region).done(function( data ) {
            $("#pacientes\\.pais").empty();
            $("#pacientes\\.nacionalidad").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let option = "<option value=" + value.nacionalidad_id + ">" + value.nacionalidad_nombre + "</option>";
                    $("#pacientes\\.pais").append(option);
                    $("#pacientes\\.nacionalidad").append(option);
                });
                $("#pacientes\\.pais").prop("selectedIndex", 0).trigger("change");
            }
        });
    }
    
    function makeRegion(){
        let region = {
            accion: "region",
            nacionalidad_nombre: $("#pacientes\\.pais option:selected").text()
        }

        $.post( "<?php echo Config::get('URL'); ?>configuracion/api", region).done(function( data ) {
            $("#pacientes\\.region").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let option = "<option value=" + value.region_id + ">" + value.region_text + "</option>";
                    $("#pacientes\\.region").append(option);
                });
            }
        });
    }

    function makePrevision(){
        let prevision = {
            accion: "prevision"
        }

        $.post( "<?php echo Config::get('URL'); ?>configuracion/api", prevision).done(function( data ) {
            $("#pacientes\\.prevision").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let option = "<option value=" + value.prevision_id + ">" + value.prevision_text + "</option>";
                    $("#pacientes\\.prevision").append(option);
                });
            }
        });
    }

    function makeLugar(){
        let lugar = {
            accion: "lugar"
        }

        $.post( "<?php echo Config::get('URL'); ?>configuracion/api", lugar).done(function( data ) {
            $("#pacientes\\.lugar").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let option = "<option value=" + value.lugar_id + ">" + value.lugar_text + "</option>";
                    $("#pacientes\\.lugar").append(option);
                });
            }
        });
    }
</script>