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
                            <h6>Nueva Ecografía</h6>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="ecografia.rut">Fecha de exámen</label>
                                    <input type="date" class="form-control" id="ecografia.rut">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.nombres">EG al exámen</label>
                                    <input type="text" class="form-control" id="ecografia.nombres" disabled>
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.apellidos">Medida de embrión</label>
                                    <input type="text" class="form-control" id="ecografia.apellidos">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.nacimiento">EG x LCN</label>
                                    <input type="text" class="form-control" id="ecografia.apellidos" disabled>
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.nacionalidad">Promedio de Saco</label>
                                    <input type="text" class="form-control" id="ecografia.apellidos">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.pais">EG x Saco</label>
                                    <input type="text" class="form-control" id="ecografia.apellidos" disabled>
                                </div>
                                <div class="accordion col-12" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Otros datos</button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-4">
                                                        <label for="ecografia.rut">Utero Ubicacion 1</label>
                                                        <input type="date" class="form-control" id="ecografia.rut">
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label for="ecografia.nombres">Utero Ubicacion 2</label>
                                                        <input type="text" class="form-control" id="ecografia.nombres" disabled>
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label for="ecografia.rut">Cuerpo Uternino</label>
                                                        <input type="date" class="form-control" id="ecografia.rut">
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="ecografia.nombres">Saco Gestacional</label>
                                                        <input type="text" class="form-control" id="ecografia.nombres" disabled>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="ecografia.rut">mm</label>
                                                        <input type="date" class="form-control" id="ecografia.rut">
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="ecografia.nombres">Saco Vitelino</label>
                                                        <input type="text" class="form-control" id="ecografia.nombres" disabled>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="ecografia.rut">Medida de saco vitelino</label>
                                                        <input type="date" class="form-control" id="ecografia.rut">
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label for="ecografia.nombres">Embrión</label>
                                                        <input type="text" class="form-control" id="ecografia.nombres" disabled>
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label for="ecografia.rut">mm</label>
                                                        <input type="date" class="form-control" id="ecografia.rut">
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label for="ecografia.nombres">FCF</label>
                                                        <input type="text" class="form-control" id="ecografia.nombres" disabled>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="ecografia.rut">Anexo derecho</label>
                                                        <input type="date" class="form-control" id="ecografia.rut">
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="ecografia.nombres">Anexo Izquierdo</label>
                                                        <input type="text" class="form-control" id="ecografia.nombres" disabled>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="ecografia.rut">Douglas</label>
                                                        <input type="date" class="form-control" id="ecografia.rut">
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="ecografia.nombres">Comentarios Douglas</label>
                                                        <input type="text" class="form-control" id="ecografia.nombres" disabled>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="ecografia.rut">Comentarios adicionales</label>
                                                        <input type="date" class="form-control" id="ecografia.rut">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
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