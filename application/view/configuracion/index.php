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
            <h4 class="text-right my-3">Configuración</h4>
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
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="nacionalidad" role="tabpanel" aria-labelledby="nacionalidad-tab">...</div>
                                <div class="tab-pane fade" id="region" role="tabpanel" aria-labelledby="region-tab">...</div>
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
    });
</script>