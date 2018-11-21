<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="btn-group m-3" role="group">
                <button type="button" class="btn btn-outline-primary btn-lg" id="button.paciente.nuevo"><i class="fas fa-plus"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg" id="button.paciente.buscar"><i class="fas fa-search"></i></button>
                <div class="btn btn-outline-primary btn-lg d-none" id="interface.paciente.buscar"><input type="text" class="form-control" id="pacientes.apellidos" placeholder="buscar"></div>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.guardar"><i class="fas fa-save"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.cancelar"><i class="fas fa-ban"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.eliminar"><i class="fas fa-trash"></i></button>
            </div>
        </div>
        <div class="col-7">
            <h4 class="text-right my-3">Administrador de Pacientes</h4>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-none" id="interface.pacientes">
                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="user.email">RUT</label>
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
                                    <label for="user.email">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="pacientes.email">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Fecha de Nacimiento</label>
                                    <input type="email" class="form-control" id="pacientes.nacimiento">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Previsión</label>
                                    <input type="email" class="form-control" id="pacientes.prevision">
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Nacionalidad</label>
                                    <select class="form-control" id="pacientes.nacionalidad">
                                        <option>Chilena</option>
                                        <option>Argentina</option>
                                        <option>Peruana</option>
                                        <option>Colombiana</option>
                                        <option>Venezolana</option>
                                        <option>Uruguaya</option>
                                    </select>
                                </div>
                                <div class="form-group col-3">
                                    <label for="user.email">Región (solo para Chile)</label>
                                    <select class="form-control" id="pacientes.region">
                                        <option value="">Tarapacá<option>
                                        <option value="">Antofagasta<option>
                                        <option value="">Atacama<option>
                                        <option value="">Coquimbo<option>
                                        <option value="">Valparaíso<option>
                                        <option value="">Libertador General Bernardo O'Higgins<option>
                                        <option value="">Maule<option>
                                        <option value="">Bío Bío<option>
                                        <option value="">La Araucanía<option>
                                        <option value="">Los Lagos<option>
                                        <option value="">Aisén del General Carlos Ibáñez del Campo<option>
                                        <option value="">Magallanes y Antártica Chilena<option>
                                        <option value="">Metropolitana de Santiago<option>
                                        <option value="">Los Ríos<option>
                                        <option value="">Arica y Parinacota<option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">RUT</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Previsión</th>
                                    </tr>
                                </thead>
                                <tbody>
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
        $("#button\\.paciente\\.nuevo").on("click", function(){
            $("#interface\\.pacientes").removeClass("d-none");
            $("#interface\\.paciente\\.buscar").removeClass("d-none");
            $("#button\\.paciente\\.nuevo").addClass("d-none");
            $("#button\\.paciente\\.guardar").removeClass("d-none");
            $("#button\\.paciente\\.cancelar").removeClass("d-none");
            $("#button\\.paciente\\.buscar").addClass("d-none");
            $("#pacientes\\.rut").value("");
            $("#pacientes\\.nombres").value("");
            $("#pacientes\\.apellidos").value("");
            $("#pacientes\\.email").value("");
            $("#pacientes\\.nacimiento").value("");
            $("#pacientes\\.prevision").value("");
            $("#pacientes\\.nacionalidad").value("");
            $("#pacientes\\.region").value("");
        });

        $("#button\\.paciente\\.guardar").on("click", function(){
            $("#interface\\.pacientes").addClass("d-none");
            $("#button\\.paciente\\.nuevo").removeClass("d-none");
            $("#button\\.paciente\\.guardar").addClass("d-none");
            $("#button\\.paciente\\.cancelar").addClass("d-none");
            $("#button\\.paciente\\.buscar").removeClass("d-none");
            $("#pacientes\\.rut").value("");
            $("#pacientes\\.nombres").value("");
            $("#pacientes\\.apellidos").value("");
            $("#pacientes\\.email").value("");
            $("#pacientes\\.nacimiento").value("");
            $("#pacientes\\.prevision").value("");
            $("#pacientes\\.nacionalidad").value("");
            $("#pacientes\\.region").value("");
        });

        $("#button\\.paciente\\.cancelar").on("click", function(){
            $("#interface\\.pacientes").addClass("d-none");
            $("#button\\.paciente\\.nuevo").removeClass("d-none");
            $("#button\\.paciente\\.guardar").addClass("d-none");
            $("#button\\.paciente\\.cancelar").addClass("d-none");
            $("#button\\.paciente\\.buscar").removeClass("d-none");
            $("#pacientes\\.rut").value("");
            $("#pacientes\\.nombres").value("");
            $("#pacientes\\.apellidos").value("");
            $("#pacientes\\.email").value("");
            $("#pacientes\\.nacimiento").value("");
            $("#pacientes\\.prevision").value("");
            $("#pacientes\\.nacionalidad").value("");
            $("#pacientes\\.region").value("");
        });

        $("#button\\.paciente\\.eliminar").on("click", function(){
            $("#interface\\.pacientes").addClass("d-none");
            $("#pacientes\\.rut").value("");
            $("#pacientes\\.nombres").value("");
            $("#pacientes\\.apellidos").value("");
            $("#pacientes\\.email").value("");
            $("#pacientes\\.nacimiento").value("");
            $("#pacientes\\.prevision").value("");
            $("#pacientes\\.nacionalidad").value("");
            $("#pacientes\\.region").value("");
        });

        $("#button\\.paciente\\.buscar").on("click", function(){
            if ($("#interface\\.paciente\\.buscar").hasClass("d-none")){
                $("#interface\\.paciente\\.buscar").removeClass("d-none");
            }
            else{
                $("#interface\\.paciente\\.buscar").addClass("d-none");
            }
        });
    })
</script>