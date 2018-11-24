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
                                    <a class="nav-link active" id="nacionalidad-tab" data-toggle="tab" href="#nacionalidad" role="tab" aria-controls="nacionalidad" aria-selected="true">País</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="region-tab" data-toggle="tab" href="#region" role="tab" aria-controls="region" aria-selected="false">Region / Provincia / Ciudad</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="prevision-tab" data-toggle="tab" href="#prevision" role="tab" aria-controls="prevision" aria-selected="false">Prevision</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="lugar-tab" data-toggle="tab" href="#lugar" role="tab" aria-controls="lugar" aria-selected="false">Lugar de control</a>
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
                                                            <label for="prevision.text">Pais</label>
                                                            <input type="text" class="form-control" id="nacionalidad.nombre">
                                                        </div>
                                                        <div class="col-12">
                                                        <table class="table table-hover">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Pais</th>
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
                                                            <label for="prevision.text">Pais</label>
                                                            <select class="form-control" id="nacionalidad.text"></select>
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
                                                                <th scope="col">Region / Ciudad</th>
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
                                <div class="tab-pane fade" id="lugar" role="tabpanel" aria-labelledby="lugar-tab">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="btn-group m-3" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-lg" id="button.lugar.nuevo"><i class="fas fa-plus"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.lugar.guardar"><i class="fas fa-save"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.lugar.cancelar"><i class="fas fa-ban"></i></button>
                                                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.lugar.eliminar"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <h4 class="text-right my-3">Lugar de control</h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="form-group col-12 d-none" id="interface.lugar">
                                                            <label for="prevision.text">Nombre del lugar de control</label>
                                                            <input type="text" class="form-control" id="lugar.text">
                                                        </div>
                                                        <div class="col-12">
                                                        <table class="table table-hover">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Lugar de control</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="table.lugar">
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
        makePrevision();
        makeRegion();
        makeNacionalidad();
        makeLugar();
        $("#button\\.nacionalidad\\.nuevo").on("click", function(){
            $("#button\\.nacionalidad\\.nuevo").addClass("d-none");
            $("#button\\.nacionalidad\\.guardar").removeClass("d-none");
            $("#button\\.nacionalidad\\.cancelar").removeClass("d-none");
            $("#interface\\.nacionalidad").removeClass("d-none");
            $("#nacionalidad\\.nombre").val("");
        });
        $("#button\\.nacionalidad\\.guardar").on("click", function(){
            $("#button\\.nacionalidad\\.nuevo").removeClass("d-none");
            $("#button\\.nacionalidad\\.guardar").addClass("d-none");
            $("#interface\\.nacionalidad").addClass("d-none");
            
            let nacionalidad = {
                accion: "nacionalidadNew",
                nacionalidad_nombre: $("#nacionalidad\\.nombre").val()
            }

            $.post( "api", nacionalidad).done(function( data ) {
                $("#nacionalidad\\.nombre").val("");
                makeNacionalidad();
            });
        });
        $("#button\\.nacionalidad\\.cancelar").on("click", function(){
            $("#button\\.nacionalidad\\.nuevo").removeClass("d-none");
            $("#button\\.nacionalidad\\.guardar").addClass("d-none");
            $("#button\\.nacionalidad\\.cancelar").addClass("d-none");
            $("#interface\\.nacionalidad").addClass("d-none");
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
                nacionalidad_nombre: $("#nacionalidad\\.text option:selected").text(), 
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

        $("#button\\.lugar\\.nuevo").on("click", function(){
            $("#button\\.lugar\\.nuevo").addClass("d-none");
            $("#button\\.lugar\\.guardar").removeClass("d-none");
            $("#button\\.lugar\\.cancelar").removeClass("d-none");
            $("#interface\\.lugar").removeClass("d-none");
            $("#lugar\\.text").val("");
        });
        $("#button\\.lugar\\.guardar").on("click", function(){
            $("#button\\.lugar\\.nuevo").removeClass("d-none");
            $("#button\\.lugar\\.guardar").addClass("d-none");
            $("#interface\\.lugar").addClass("d-none");
            
            let lugar = {
                accion: "lugarNew",
                lugar_text: $("#lugar\\.text").val(),
            }

            $.post( "api", lugar).done(function( data ) {
                $("#lugar\\.text").val("");
                makeLugar();
            });
        });
        $("#button\\.lugar\\.cancelar").on("click", function(){
            $("#button\\.lugar\\.nuevo").removeClass("d-none");
            $("#button\\.lugar\\.guardar").addClass("d-none");
            $("#button\\.lugar\\.cancelar").addClass("d-none");
            $("#interface\\.lugar").addClass("d-none");
        });
    });

    function makeNacionalidad(){
        let nacionalidad = {
            accion: "nacionalidad"
        }

        $.post( "api", nacionalidad).done(function( data ) {
            $("#table\\.nacionalidad").empty();
            $("#nacionalidad\\.text").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let fila = '<tr><td>' + value.nacionalidad_id + '</td><td>' + value.nacionalidad_nombre + '<button type="button" data-id="' + value.nacionalidad_id + '" class="btn btn-outline-warning px-3 eliminar-nacionalidad float-right"><i class="fas fa-trash"></i></button></td></tr>';
                    $("#table\\.nacionalidad").append(fila);
                    let option = "<option value=" + i + ">" + value.nacionalidad_nombre + "</option>";
                    $("#nacionalidad\\.text").append(option);
                });

                $(".eliminar-nacionalidad").on("click", function(){
                    let nacionalidad_id = $(this).data("id");

                    $("#dialog\\.title").html("Eliminar nacionalidad");
                    $("#dialog\\.body").html('<p class="text-center text-danger">¿Está seguro de eliminar la nacionalidad?</p>');
                    $("#dialog\\.delete").remove();
                    $("#dialog\\.footer").append('<button type="button" class="btn btn-danger" id="dialog.delete" data-id="' + nacionalidad_id + '">Eliminar</button>');
                    $("#dialog\\.delete").on("click", function(){
                        let nacionalidad = {accion: "nacionalidadEliminar", nacionalidad_id: $(this).data("id")}

                        $.post( "api", nacionalidad).done(function( data ) {
                            $("#table\\.nacionalidad").empty();
                            makeNacionalidad();
                            $("#dialog\\.view").modal("hide");
                        });
                    });
                    $("#dialog\\.view").modal("show");
                });
            }
        });
    }

    function makeRegion(){
        let region = {
            accion: "regionConfig"
        }

        $.post( "api", region).done(function( data ) {
            $("#table\\.region").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let fila = '<tr><td>' + value.region_id + '</td><td>' + value.nacionalidad_nombre + '</td><td>' + value.region_text + '<button type="button" data-id="' + value.region_id + '" class="btn btn-outline-warning px-3 eliminar-region float-right"><i class="fas fa-trash"></i></button></td></tr>';
                    $("#table\\.region").append(fila);
                });

                $(".eliminar-region").on("click", function(){
                    let region_id = $(this).data("id");

                    $("#dialog\\.title").html("Eliminar region");
                    $("#dialog\\.body").html('<p class="text-center text-danger">¿Está seguro de eliminar la región?</p>');
                    $("#dialog\\.delete").remove();
                    $("#dialog\\.footer").append('<button type="button" class="btn btn-danger" id="dialog.delete" data-id="' + region_id + '">Eliminar</button>');
                    $("#dialog\\.delete").on("click", function(){
                        let region = {accion: "regionEliminar", region_id: $(this).data("id")}

                        $.post( "api", region).done(function( data ) {
                            $("#table\\.region").empty();
                            makeRegion();
                            $("#dialog\\.view").modal("hide");
                        });
                    });
                    $("#dialog\\.view").modal("show");
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
                    let fila = '<tr><td>' + value.prevision_id + '</td><td>' + value.prevision_text + '<button type="button" data-id="' + value.prevision_id + '" class="btn btn-outline-warning px-3 eliminar-prevision float-right"><i class="fas fa-trash"></i></button></td></tr>';
                    $("#table\\.prevision").append(fila);
                });

                $(".eliminar-prevision").on("click", function(){
                    let prevision_id = $(this).data("id");

                    $("#dialog\\.title").html("Eliminar prevision");
                    $("#dialog\\.body").html('<p class="text-center text-danger">¿Está seguro de eliminar la prevision?</p>');
                    $("#dialog\\.delete").remove();
                    $("#dialog\\.footer").append('<button type="button" class="btn btn-danger" id="dialog.delete" data-id="' + prevision_id + '">Eliminar</button>');
                    $("#dialog\\.delete").on("click", function(){
                        let prevision = {accion: "previsionEliminar", prevision_id: $(this).data("id")}

                        $.post( "api", prevision).done(function( data ) {
                            $("#table\\.prevision").empty();
                            makePrevision();
                            $("#dialog\\.view").modal("hide");
                        });
                    });
                    $("#dialog\\.view").modal("show");
                });
            }
        });
    }

    function makeLugar(){
        let lugar = {
            accion: "lugar"
        }

        $.post( "api", lugar).done(function( data ) {
            $("#table\\.lugar").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let fila = '<tr><td>' + value.lugar_id + '</td><td>' + value.lugar_text + '<button type="button" data-id="' + value.lugar_id + '" class="btn btn-outline-warning px-3 eliminar-lugar float-right"><i class="fas fa-trash"></i></button></td></tr>';
                    $("#table\\.lugar").append(fila);
                });

                $(".eliminar-lugar").on("click", function(){
                    let lugar_id = $(this).data("id");

                    $("#dialog\\.title").html("Eliminar lugar");
                    $("#dialog\\.body").html('<p class="text-center text-danger">¿Está seguro de eliminar el lugar?</p>');
                    $("#dialog\\.delete").remove();
                    $("#dialog\\.footer").append('<button type="button" class="btn btn-danger" id="dialog.delete" data-id="' + lugar_id + '">Eliminar</button>');
                    $("#dialog\\.delete").on("click", function(){
                        let lugar = {accion: "lugarEliminar", lugar_id: $(this).data("id")}

                        $.post( "api", lugar).done(function( data ) {
                            $("#table\\.lugar").empty();
                            makeLugar();
                            $("#dialog\\.view").modal("hide");
                        });
                    });
                    $("#dialog\\.view").modal("show");
                });
            }
        });
    }
</script>