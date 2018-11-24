<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="btn-group m-3" role="group">
                <button type="button" class="btn btn-outline-primary btn-lg" id="button.ecografia.nuevo"><i class="fas fa-plus"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.ecografia.guardar"><i class="fas fa-save"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.ecografia.cancelar"><i class="fas fa-ban"></i></button>
            </div>
        </div>
        <div class="col-7">
            <h4 class="text-right my-3">Ecografía Obstétrica Primer Trimestre</h4>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-none" id="interface.ecografia">
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
                            <h6>Ecografias</h6>
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">EG</th>
                                    <th scope="col">LCN</th>
                                    <th scope="col">Saco</th>
                                    </tr>
                                </thead>
                                <tbody id="table.ecografia">
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
        $("#button\\.ecografia\\.nuevo").on("click", function(){
            $("#interface\\.ecografia").removeClass("d-none");
            $("#button\\.ecografia\\.nuevo").addClass("d-none");
            $("#button\\.ecografia\\.guardar").removeClass("d-none");
            $("#button\\.ecografia\\.cancelar").removeClass("d-none");
            $("#button\\.ecografia\\.buscar").addClass("d-none");
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

        $("#button\\.ecografia\\.guardar").on("click", function(){
            $("#interface\\.ecografia").addClass("d-none");
            $("#button\\.ecografia\\.nuevo").removeClass("d-none");
            $("#button\\.ecografia\\.guardar").addClass("d-none");
            $("#button\\.ecografia\\.cancelar").addClass("d-none");
            $("#button\\.ecografia\\.buscar").removeClass("d-none");

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
                paciente_telefono: ($("#pacientes\\.telefono").val() == "") ? 0 : $("#pacientes\\.telefono").val(),
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

        $("#button\\.ecografia\\.cancelar").on("click", function(){
            $("#interface\\.ecografia").addClass("d-none");
            $("#button\\.ecografia\\.nuevo").removeClass("d-none");
            $("#button\\.ecografia\\.guardar").addClass("d-none");
            $("#button\\.ecografia\\.cancelar").addClass("d-none");
            $("#button\\.ecografia\\.buscar").removeClass("d-none");
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
    });

    function makeTable(){
        $.get( "get").done(function( data ) {
            $("#table\\.ecografia").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let prevision = "";
                    $("#pacientes\\.ecografia > option").each(function() {
                        if (this.value == value.paciente_prevision){
                            prevision = this.text;
                        }
                    });
                    let fila = '<tr><td>' + value.paciente_rut + '</td><td>' + value.paciente_nombre + '</td><td>' + value.paciente_apellido + '</td><td>' + value.paciente_nacimiento +' años</td><td>' + prevision +'</td></tr>';
                    $("#table\\.ecografia").append(fila);
                });
            }
        });
    }
</script>