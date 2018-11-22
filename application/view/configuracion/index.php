<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="my-3">Configuración</h4>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="nacionalidad-tab" data-toggle="tab" href="#nacionalidad" role="tab" aria-controls="nacionalidad" aria-selected="true">Nacionalidad</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="region-tab" data-toggle="tab" href="#region" role="tab" aria-controls="region" aria-selected="false">Region / Provincia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="prevision-tab" data-toggle="tab" href="#prevision" role="tab" aria-controls="prevision" aria-selected="false">Prevision</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="nacionalidad" role="tabpanel" aria-labelledby="nacionalidad-tab">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="btn-group m-3" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-lg" id="button.nacionalidad.nuevo"><i class="fas fa-plus"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.nacionalidad.guardar"><i class="fas fa-save"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.nacionalidad.cancelar"><i class="fas fa-ban"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.nacionalidad.eliminar"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <h4 class="text-right my-3">Nacionalidad</h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-6 d-none" id="interface.nacionalidad">
                                                            <label for="prevision.text">Nacionalidad</label>
                                                            <input type="text" class="form-control" id="nacionalidad.nombre">
                                                        </div>
                                                        <div class="form-group col-6 d-none" id="interface.nacionalidad">
                                                            <label for="prevision.text">Gentilicio</label>
                                                            <input type="text" class="form-control" id="nacionalidad.gentilicio">
                                                        </div>
                                                        <div class="col-12">
                                                        <table class="table table-hover">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Nacionalidad</th>
                                                                <th scope="col">Gentilicio</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="table.nacionalidad">
                                                            </tbody>
                                                        </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="region" role="tabpanel" aria-labelledby="region-tab">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="btn-group m-3" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-lg" id="button.region.nuevo"><i class="fas fa-plus"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.region.guardar"><i class="fas fa-save"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.region.cancelar"><i class="fas fa-ban"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.region.eliminar"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <h4 class="text-right my-3">Region</h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-6 d-none" id="interface.region">
                                                            <label for="prevision.text">Nacionalidad</label>
                                                            <input type="text" class="form-control" id="nacionalidad.text">
                                                        </div>
                                                        <div class="form-group col-6 d-none" id="interface.region">
                                                            <label for="prevision.text">Region</label>
                                                            <input type="text" class="form-control" id="region.text">
                                                        </div>
                                                        <div class="col-12">
                                                        <table class="table table-hover">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Pais</th>
                                                                <th scope="col">Region</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="table.region">
                                                            </tbody>
                                                        </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="prevision" role="tabpanel" aria-labelledby="prevision-tab">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="btn-group m-3" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-lg" id="button.prevision.nuevo"><i class="fas fa-plus"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.prevision.guardar"><i class="fas fa-save"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.prevision.cancelar"><i class="fas fa-ban"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.prevision.eliminar"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <h4 class="text-right my-3">Previsión</h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-12 d-none" id="interface.prevision">
                                                            <label for="prevision.text">Nombre de la previsión</label>
                                                            <input type="text" class="form-control" id="prevision.text">
                                                        </div>
                                                        <div class="col-12">
                                                        <table class="table table-hover">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Previsión</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="table.prevision">
                                                            </tbody>
                                                        </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        makePrevision();
        makeRegion();
        makeNacionalidad();
        $("#button\\.nacionalidad\\.nuevo").on("click", function(){
            $("#button\\.nacionalidad\\.nuevo").addClass("d-none");
            $("#button\\.nacionalidad\\.guardar").removeClass("d-none");
            $("#button\\.nacionalidad\\.cancelar").removeClass("d-none");
            $("#interface\\.nacionalidad").removeClass("d-none");
            $("#nacionalidad\\.text").val("");
            $("#nacionalidad\\.gentilicio").val("");
        });
        $("#button\\.nacionalidad\\.guardar").on("click", function(){
            $("#button\\.nacionalidad\\.nuevo").removeClass("d-none");
            $("#button\\.nacionalidad\\.guardar").addClass("d-none");
            $("#interface\\.nacionalidad").addClass("d-none");
            
            let nacionalidad = {
                accion: "nacionalidadNew",
                nacionalidad_nombre: $("#nacionalidad\\.nombre").val(),
                nacionalidad_gentilicio: $("#nacionalidad\\.gentilicio").val()
            }

            $.post( "api", nacionalidad).done(function( data ) {
                $("#nacionalidad\\.text").val("");
                $("#nacionalidad\\.gentilicio").val("");
                makeNacionalidad();
            });
        });
        $("#button\\.nacionalidad\\.cancelar").on("click", function(){
            $("#button\\.nacionalidad\\.nuevo").removeClass("d-none");
            $("#button\\.nacionalidad\\.guardar").addClass("d-none");
            $("#button\\.nacionalidad\\.cancelar").addClass("d-none");
            $("#interface\\.nacionalidad").addClass("d-none");
        });
        $("#button\\.prevision\\.eliminar").on("click", function(){
        });

        $("#button\\.region\\.nuevo").on("click", function(){
            $("#button\\.region\\.nuevo").addClass("d-none");
            $("#button\\.region\\.guardar").removeClass("d-none");
            $("#button\\.region\\.cancelar").removeClass("d-none");
            $("#interface\\.region").removeClass("d-none");
            $("#nacionalidad\\.text").val("");
            $("#region\\.text").val("");
        });
        $("#button\\.region\\.guardar").on("click", function(){
            $("#button\\.region\\.nuevo").removeClass("d-none");
            $("#button\\.region\\.guardar").addClass("d-none");
            $("#interface\\.region").addClass("d-none");
            
            let region = {
                accion: "regionNew",
                nacionalidad_nombre: $("#nacionalidad\\.text").val(),
                region_text: $("#region\\.text").val(),
            }

            $.post( "api", region).done(function( data ) {
                $("#nacionalidad\\.text").val("");
                $("#region\\.text").val("");
                makeRegion();
            });
        });
        $("#button\\.region\\.cancelar").on("click", function(){
            $("#button\\.region\\.nuevo").removeClass("d-none");
            $("#button\\.region\\.guardar").addClass("d-none");
            $("#button\\.region\\.cancelar").addClass("d-none");
            $("#interface\\.region").addClass("d-none");
        });
        $("#button\\.region\\.eliminar").on("click", function(){
        });

        $("#button\\.prevision\\.nuevo").on("click", function(){
            $("#button\\.prevision\\.nuevo").addClass("d-none");
            $("#button\\.prevision\\.guardar").removeClass("d-none");
            $("#button\\.prevision\\.cancelar").removeClass("d-none");
            $("#interface\\.prevision").removeClass("d-none");
            $("#prevision\\.text").val("");
        });
        $("#button\\.prevision\\.guardar").on("click", function(){
            $("#button\\.prevision\\.nuevo").removeClass("d-none");
            $("#button\\.prevision\\.guardar").addClass("d-none");
            $("#interface\\.prevision").addClass("d-none");
            
            let prevision = {
                accion: "previsionNew",
                prevision_text: $("#prevision\\.text").val(),
            }

            $.post( "api", prevision).done(function( data ) {
                $("#prevision\\.text").val("");
                makePrevision();
            });
        });
        $("#button\\.prevision\\.cancelar").on("click", function(){
            $("#button\\.prevision\\.nuevo").removeClass("d-none");
            $("#button\\.prevision\\.guardar").addClass("d-none");
            $("#button\\.prevision\\.cancelar").addClass("d-none");
            $("#interface\\.prevision").addClass("d-none");
        });
        $("#button\\.prevision\\.eliminar").on("click", function(){
        });
    });

    function makeNacionalidad(){
        let region = {
            accion: "nacionalidad"
        }

        $.post( "api", region).done(function( data ) {
            $("#table\\.nacionalidad").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let fila = '<tr><td>' + value.nacionalidad_id + '</td><td>' + value.nacionalidad_nombre + '</td><td>' + value.nacionalidad_gentilicio + '</td></tr>';
                    $("#table\\.nacionalidad").append(fila);
                });
            }
        });
    }

    function makeRegion(){
        let region = {
            accion: "region"
        }

        $.post( "api", region).done(function( data ) {
            $("#table\\.region").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let fila = '<tr><td>' + value.region_id + '</td><td>' + value.nacionalidad_nombre + '</td><td>' + value.region_text + '</td></tr>';
                    $("#table\\.region").append(fila);
                });
            }
        });
    }

    function makePrevision(){
        let prevision = {
            accion: "prevision"
        }

        $.post( "api", prevision).done(function( data ) {
            $("#table\\.prevision").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let fila = '<tr><td>' + value.prevision_id + '</td><td>' + value.prevision_text + '</td></tr>';
                    $("#table\\.prevision").append(fila);
                });
            }
        });
    }
</script>