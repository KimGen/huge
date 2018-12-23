<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="text-right my-3">Ecografía Doppler</h4>
        </div>
    </div>
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
            <?php if ($this->paciente) { ?>
                <div class="col-3"><strong>Paciente:</strong> <?php echo $this->paciente->paciente_nombre . ' ' .$this->paciente->paciente_apellido; ?></div>
            <?php } if ($this->fur) { ?>
                <div class="col-3"><strong>FUR:</strong> <?php echo date_format(date_create($this->fur->fur_fecha),"d/m/Y"); ?></div>
                <div class="col-3"><strong>EG:</strong> <?php echo $this->eg; ?> semanas</div>
                <div class="col-3"><strong>FPP:</strong> <?php echo date_format(date_create($this->fur->fpp_fecha),"d/m/Y"); ?></div>
            <?php } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-none" id="interface.ecografia">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link bg-secondary text-light active" id="medidas-tab" data-toggle="tab" href="#medidas" role="tab" aria-controls="medidas" aria-selected="true">Pagina 1 - Medidas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-secondary text-light" id="texto-tab" data-toggle="tab" href="#texto" role="tab" aria-controls="texto" aria-selected="false">Página 2 - Texto</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="medidas" role="tabpanel" aria-labelledby="medidas-tab">
                                    <div class="row pt-2">
                                        <div class="form-group col-6">
                                            <label for="ecografia.fecha">Fecha de exámen</label>
                                            <input type="date" class="form-control" id="ecografia.fecha">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.eg">Edad Gestacional al exámen</label>
                                            <input type="text" class="form-control" id="ecografia.eg" disabled>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.aud.mm">Arteria Uterina Derecha</label>
                                            <input type="text" class="form-control" id="ecografia.aud.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="audPct">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="audPct">
                                                <div class="progress-bar bg-light text-primary pivote-cero" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-uno" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-dos" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-centro" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 14%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-tres" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cuatro" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cien" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.aui.mm">Arteria Uterina Izquierda</label>
                                            <input type="text" class="form-control" id="ecografia.aui.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="auiPct">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="auiPct">
                                                <div class="progress-bar bg-light text-primary pivote-cero" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-uno" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-dos" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-centro" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 14%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-tres" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cuatro" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cien" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.auprom.mm">Promedio de Aterias Uterinas</label>
                                            <input type="text" class="form-control" id="ecografia.auprom.mm" disabled>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="aupromPct">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="aupromPct">
                                                <div class="progress-bar bg-light text-primary pivote-cero" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-uno" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-dos" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-centro" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 14%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-tres" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cuatro" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cien" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.ipau.mm">IP Arteria Umbilical</label>
                                            <input type="text" class="form-control" id="ecografia.ipau.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ipauPct">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="ipauPct">
                                                <div class="progress-bar bg-light text-primary pivote-cero" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-uno" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-dos" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-centro" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 14%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-tres" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cuatro" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cien" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.ipacm.mm">IP Arteria C. Media</label>
                                            <input type="text" class="form-control" id="ecografia.ipacm.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ipacmPct">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="ipacmPct">
                                                <div class="progress-bar bg-light text-primary pivote-cero" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-uno" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-dos" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-centro" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 14%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-tres" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cuatro" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cien" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.ccp.mm">Cuociente Cerebro Placentario</label>
                                            <input type="text" class="form-control" id="ecografia.ccp.mm" disabled>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ccpPct">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="ccpPct">
                                                <div class="progress-bar bg-light text-primary pivote-cero" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-uno" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-dos" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-centro" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 14%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-tres" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cuatro" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cien" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.dv.mm">Ductus Venoso</label>
                                            <input type="text" class="form-control" id="ecografia.dv.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="dvPct">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="dvPct">
                                                <div class="progress-bar bg-light text-primary pivote-cero" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-uno" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-dos" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-centro" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 14%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-tres" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cuatro" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cien" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.psmacm.mm">Pick sistólico máximo de ACM</label>
                                            <input type="text" class="form-control" id="ecografia.psmacm.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="psmacmPct">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="psmacmPct">
                                                <div class="progress-bar bg-light text-primary pivote-cero" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-uno" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-dos" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-centro" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 14%">|</div>
                                                <div class="progress-bar bg-light text-primary pivote-tres" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cuatro" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-light text-primary pivote-cien" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="texto" role="tabpanel" aria-labelledby="texto-tab">
                                    <div class="row pt-2">
                                        <label for="ecografia.rut" class="col-12">Evaluación de líquido amniótico (cualitativa / semicuantitativa)</label>
                                        <div class="form-group col-6">
                                            <select class="form-control" id="ecografia.presentacion"><option value="normal" selected>Normal</option><option value="disminuido">Disminuido</option><option value="aumentado">Aumentado</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <div class="input-group"><div class="input-group-prepend"><div class="input-group-text">BVM</div></div><input id="bvmDoppler" type="number" min="001" max="999" class="form-control"><div class="input-group-append"><div class="input-group-text">mm.</div></div></div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.motivo">Motivo del exámen</label>
                                            <select class="form-control" id="ecografia.motivo"><option value="RCIU Emb. Previo">RCIU Emb. Previo</option><option value="RCIU No PEG > p10">RCIU No PEG &gt; p10</option><option value="RCIU Moderado < p10">RCIU Moderado &lt; p10</option><option value="RCIU Severo < p3">RCIU Severo &lt; p3</option><option value="Seguimiento Evolución">Seguimiento Evolución</option><option value="Síndrome Hipertensivo">Síndrome Hipertensivo</option><option value="Preeclampsia">Preeclampsia</option><option value="Desnutrición Materna">Desnutrición Materna</option><option value="Amenaza Pto. Prematuro">Amenaza Pto. Prematuro</option><option value="Tabaquismo">Tabaquismo</option><option value="Otra Patología ARO">Otra Patología ARO</option><option value="Sin Patología ARO">Sin Patología ARO</option><option value="Estudio Doppler" selected>Estudio Doppler</option><option value="Estudio Doppler materno">Estudio Doppler materno</option><select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.antecedentes">Antecedentes Obstétricos</label>
                                            <select class="form-control" id="ecografia.antecedentes"><option value="RCIU Emb. Previo">RCIU Emb. Previo</option><option value="RCIU No PEG > p10">RCIU No PEG &gt; p10</option><option value="RCIU Moderado < p10">RCIU Moderado &lt; p10</option><option value="RCIU Severo < p3">RCIU Severo &lt; p3</option><option value="Síndrome Hipertensivo">Síndrome Hipertensivo</option><option value="Desnutrición Materna">Desnutrición Materna</option><option value="Amenaza Pto. Prematuro">Amenaza Pto. Prematuro</option><option value="Tabaquismo">Tabaquismo</option><option value="Otra Patología ARO">Otra Patología ARO</option><option value="Sin Patología ARO">Sin Patología ARO</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.presentacion">Presentacion</label>
                                            <select class="form-control" id="ecografia.presentacion"><option value="cefalica" selected="">Cefalica</option><option value="podalica">Podálica</option><option value="transversa">Transversa</option><option value="indiferente">Indiferente</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.motilidad">Motilidad Fetal</label>
                                            <select class="form-control" id="ecografia.motilidad"><option value="hiperactivo" selected="">Hiperactivo</option><option value="activo">Activo</option><option value="hipoactivo">Hipoactivo</option><option value="inmovil">Inmovil</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.placenta.ubicacion">Placenta Ubicación</label>
                                            <select class="form-control" id="ecografia.placenta.ubicacion"><option value="anterior" selected="">Anterior</option><option value="posterior">Posterior</option><option value="fúndica">Fúndica</option><option value="baja">baja</option><option value="lat. derecha">Lat. derecha</option><option value="lat. izquierda">Lat. izquierda</option><option value="otro">Otro</option></select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="ecografia.rut">Comentarios y obsevaciones <small>(La interpretación clínica de los datos es responsabilidad exclusiva de quien realiza y certifica este exámen)</small></label>
                                            <textarea class="form-control" id="ecografia.com"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <h6 class="mt-2">Ecografias</h6>
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">EG</th>
                                        <th scope="col">Pct. Uterinas</th>
                                        <th scope="col">Pct. Umbilical</th>
                                        <th scope="col">Pct. C. Media</th>
                                        <th scope="col">Rel. CM/AU</th>
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
        <div class="col-2">
            <div class="btn-group-vertical" role="group">
                <button type="button" class="btn btn-outline-primary" id="button.ecografia.nuevo">Nuevo Exámen</button>
                <button type="button" class="btn btn-outline-primary d-none" id="button.ecografia.guardar">Guardar Exámen</button>
                <button type="button" class="btn btn-outline-primary d-none" id="button.ecografia.cancelar">Cancelar Exámen</button>
                <button type="button" class="btn btn-outline-primary d-none" id="button.ecografia.imprimir">Ver Informe</button>
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
        makeTable();

        $("#button\\.ecografia\\.imprimir").on("click", function(){
            crearInformeEcoPrimTrim();
        });

        $("#button\\.ecografia\\.nuevo").on("click", function(){
            $("#interface\\.ecografia").removeClass("d-none");
            $("#button\\.ecografia\\.nuevo").addClass("d-none");
            $("#button\\.ecografia\\.guardar").removeClass("d-none");
            $("#button\\.ecografia\\.cancelar").removeClass("d-none");
            $("#button\\.ecografia\\.imprimir").removeClass("d-none");

            let now = new Date();
            let day = ("0" + now.getDate()).slice(-2);
            let month = ("0" + (now.getMonth() + 1)).slice(-2);
            let today = now.getFullYear()+"-"+(month)+"-"+(day) ;

            $("#ecografia\\.fecha").val(today).trigger("change");
            $("#ecografia\\.dbp\\.mm").val("");
            $("#ecografia\\.dof\\.mm").val("");
            $("#ecografia\\.cc\\.mm").val("");
            $("#ecografia\\.ca\\.mm").val("");
            $("#ecografia\\.lf\\.mm").val("");
            $("#ecografia\\.bvm\\.mm").val("");
            $("#ecografia\\.lh\\.mm").val("");
            $("#ecografia\\.cerebelo\\.mm").val("");

            $("#ecografia\\.presentacion").val("cefalica");
            $("#ecografia\\.dorso\\.fetal").val("anterior");
            $("#ecografia\\.actividad\\.cardiaca").val("si");
            $("#ecografia\\.movimiento\\.fetal").val("si");
            $("#ecografia\\.fcf").val(140);
            $("#ecografia\\.anatomia\\.fetal").val("no evaluada dirigidamente, pero el aspecto morfológico general es normal");
            $("#ecografia\\.anatomia\\.com").val("");
            $("#ecografia\\.placenta\\.ubicacion").val("normal");
            $("#ecografia\\.placenta\\.insercion").val("anterior");
            $("#ecografia\\.placenta\\.grado").val("0");
            $("#ecografia\\.liquido\\.txt").val("normal");
            $("#ecografia\\.bvm\\.mm\\.copia").val("normal");
            $("#ecografia\\.cordon\\.umbilical").val("inserción central");
            $("#ecografia\\.numero\\.vasos").val(3);
            $("#ecografia\\.com\\.select").val(1);
            //$("#ecografia\\.com").val("Crecimiento (peso) percentil , para gráfica de peso fetal Hadlock* /nLíquido amniótico normal, con bolsillo vertical mayor  mm.");
        });

        $("#button\\.ecografia\\.guardar").on("click", function(){

            //calcular la diferencia entre la eg operativa y la eg por lcn o saco
            
            let saco = $("#ecografia\\.saco\\.mm").val();
            let lcn = $("#ecografia\\.lcn\\.mm").val();
            let eg = $("#ecografia\\.eg").val();
            var oneday = 1000 * 60 * 60 * 24;

            if ($.isNumeric(lcn)){
                let lcnEG = $("#ecografia\\.lcn\\.eg").val();
                var eg1 = new Number((Math.floor(lcnEG) * 7) + Math.round((lcnEG - Math.floor(lcnEG)) * 7));
				var eg2 = new Number((Math.floor(eg) * 7) + Math.round((eg - Math.floor(eg)) * 7));
                var diferencia = (Math.floor(eg2 - eg1) + Math.round(((eg2 - eg1) - Math.floor(eg2 - eg1)) * 7));
                
                $("#dialog\\.title").html("Ajuste");
                $("#dialog\\.body").html('<p class="text-center text-danger">Días de diferencia observado entre edad gestacional por FUR referida y exámen ecográfico es de  ' + diferencia + ' días.</p><p class="text-center text-danger">¿Desea hacer ajuste automático de la FUR?</p>');
                $("#dialog\\.delete").remove();
                $("#dialog\\.footer").append('<button type="button" class="btn btn-danger" id="dialog.delete" data-id="' + diferencia + '">Si</button>');
                $("#dialog\\.delete").on("click", function(){

                    diferencia = $(this).data("id") * oneday;
                    var FUM = new Date ('<?php echo $this->fur->fur_fecha; ?>');
                    var B = new Date();
                    B.setTime(FUM.getTime() + diferencia);
                    let day = ("0" + B.getDate()).slice(-2);
                    let month = ("0" + (B.getMonth() + 1)).slice(-2);
                    let today = B.getFullYear()+"-"+(month)+"-"+(day) ;

                    let fur = {
                        accion: "furUpdate",
                        paciente_rut: '<?php echo $this->paciente->paciente_rut; ?>',
                        fur_fecha: today
                    }

                    $.post( "<?php echo Config::get('URL'); ?>ecografia/api", fur).done(function( data ) {
                        window.location.href = '<?php echo Config::get('URL'); ?>ecografia/primertrimestre/<?php echo $this->paciente->paciente_rut; ?>';
                    });
                });
                $("#dialog\\.view").modal("show");
            }
            else if ($.isNumeric(saco)){
                let sacoEG = $("#ecografia\\.saco\\.eg").val();
                let diferencia = eg - sacoEG;
                alert(diferencia);
            }

            $("#interface\\.ecografia").addClass("d-none");
            $("#button\\.ecografia\\.nuevo").removeClass("d-none");
            $("#button\\.ecografia\\.guardar").addClass("d-none");
            $("#button\\.ecografia\\.cancelar").addClass("d-none");
            $("#button\\.ecografia\\.imprimir").addClass("d-none");

            let ecografia = {
                ecografia_fecha:$("#ecografia\\.fecha").val(),
                ecografia_eg:$("#ecografia\\.eg").val(),
                ecografia_lcn_mm:$("#ecografia\\.lcn\\.mm").val(),
                ecografia_lcn_eg:$("#ecografia\\.lcn\\.eg").val(),
                ecografia_saco_mm:$("#ecografia\\.saco\\.mm").val(),
                ecografia_saco_eg:$("#ecografia\\.saco\\.eg").val(),
                ecografia_utero_uno:$("#ecografia\\.utero\\.uno").val(),
                ecografia_utero_dos:$("#ecografia\\.utero\\.dos").val(),
                ecografia_cuerpo:$("#ecografia\\.cuerpo").val(),
                ecografia_saco_txt:$("#ecografia\\.saco\\.txt").val(),
                ecografia_saco_mm_copia:$("#ecografia\\.saco\\.mm\\.copia").val(),
                ecografia_vitelino_txt:$("#ecografia\\.vitelino\\.txt").val(),
                ecografia_vitelino_mm:$("#ecografia\\.vitelino\\.mm").val(),
                ecografia_embrion_txt:$("#ecografia\\.embrion\\.txt").val(),
                ecografia_lcn_mm_copia:$("#ecografia\\.lcn\\.mm\\.copia").val(),
                ecografia_fcf:$("#ecografia\\.fcf").val(),
                ecografia_anexo_derecho:$("#ecografia\\.anexo\\.derecho").val(),
                ecografia_anexo_izquierdo:$("#ecografia\\.anexo\\.izquierdo").val(),
                ecografia_douglas_txt:$("#ecografia\\.douglas\\.txt").val(),
                ecografia_douglas_com:$("#ecografia\\.douglas\\.com").val(),
                ecografia_com:$("#ecografia\\.com").val()
            }

            let encap = {
                accion: "primertrimestreNew",
                data: JSON.stringify(ecografia)
            }

            $.post( "<?php echo Config::get('URL'); ?>ecografia/api", encap).done(function( data ) {
                $("#ecografia\\.fecha").val("");
                $("#ecografia\\.eg").val("");
                $("#ecografia\\.lcn\\.mm").val("");
                $("#ecografia\\.lcn\\.eg").val("");
                $("#ecografia\\.saco\\.mm").val("");
                $("#ecografia\\.saco\\.eg").val("");
                $("#ecografia\\.utero\\.uno").val("central");
                $("#ecografia\\.utero\\.dos").val("anterior");
                $("#ecografia\\.cuerpo").val("aspecto normal");
                $("#ecografia\\.saco\\.txt").val("normal");
                $("#ecografia\\.saco\\.mm\\.copia").val("");
                $("#ecografia\\.vitelino\\.txt").val("presente");
                $("#ecografia\\.vitelino\\.mm").val("");
                $("#ecografia\\.embrion\\.txt").val("con act. cardiaca (+)");
                $("#ecografia\\.lcn\\.mm\\.copia").val("");
                $("#ecografia\\.fcf").val("140");
                $("#ecografia\\.anexo\\.derecho").val("aspecto normal");
                $("#ecografia\\.anexo\\.izquierdo").val("aspecto normal");
                $("#ecografia\\.duglas\\.txt").val("libre");
                $("#ecografia\\.douglas\\.com").val("");
                $("#ecografia\\.com").val("");
                makeTable();
            });
        });

        $("#button\\.ecografia\\.cancelar").on("click", function(){
            $("#interface\\.ecografia").addClass("d-none");
            $("#button\\.ecografia\\.nuevo").removeClass("d-none");
            $("#button\\.ecografia\\.guardar").addClass("d-none");
            $("#button\\.ecografia\\.cancelar").addClass("d-none");
            $("#button\\.ecografia\\.imprimir").addClass("d-none");
            $("#ecografia\\.fecha").val("");
            $("#ecografia\\.eg").val("");
            $("#ecografia\\.lcn\\.mm").val("");
            $("#ecografia\\.lcn\\.eg").val("");
            $("#ecografia\\.saco\\.mm").val("");
            $("#ecografia\\.saco\\.eg").val("");
            $("#ecografia\\.utero\\.uno").val("central");
            $("#ecografia\\.utero\\.dos").val("anterior");
            $("#ecografia\\.cuerpo").val("aspecto normal").trigger("change");
            $("#ecografia\\.saco\\.txt").val("normal").trigger("change");
            $("#ecografia\\.saco\\.mm\\.copia").val("");
            $("#ecografia\\.vitelino\\.txt").val("presente");
            $("#ecografia\\.vitelino\\.mm").val("");
            $("#ecografia\\.embrion\\.txt").val("con act. cardiaca (+)").trigger("change");
            $("#ecografia\\.lcn\\.mm\\.copia").val("");
            $("#ecografia\\.fcf").val("140");
            $("#ecografia\\.anexo\\.derecho").val("aspecto normal");
            $("#ecografia\\.anexo\\.izquierdo").val("aspecto normal");
            $("#ecografia\\.duglas\\.txt").val("libre");
            $("#ecografia\\.douglas\\.com").val("");
            $("#ecografia\\.com").val("");
        });

        //calculos
        $("#ecografia\\.dbp\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
                deDBP($("#ecografia\\.eg").val(), $("#ecografia\\.dbp\\.mm").val());
            }
        });

        $("#ecografia\\.dof\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){

            }
        });

        $("#ecografia\\.cc\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
                pctcc($("#ecografia\\.eg").val(),  $("#ecografia\\.cc\\.mm").val());
            }
        });

        $("#ecografia\\.ca\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
                pctca($("#ecografia\\.eg").val(),  $("#ecografia\\.ca\\.mm").val());
            }
        });

        $("#ecografia\\.lf\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
                pctlf($("#ecografia\\.eg").val(),  $("#ecografia\\.lf\\.mm").val())
            }
        });

        $("#ecografia\\.bvm\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
                pctbvm($("#ecografia\\.eg").val(),  $("#ecografia\\.bvm\\.mm").val())
            }
        });

        $("#ecografia\\.lh\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
                pctlh($("#ecografia\\.eg").val(),  $("#ecografia\\.lh\\.mm").val())
            }
        });

        $("#ecografia\\.cerebelo\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
                pctcb($("#ecografia\\.eg").val(),  $("#ecografia\\.cerebelo\\.mm").val())
            }
        });
        //restricciones
        $("#ecografia\\.saco\\.txt").on("change", function(){
            if ($(this).val() == 'no se observa'){
                $("#ecografia\\.saco\\.mm").val("").trigger("change");
                $("#ecografia\\.saco\\.eg").val("");
                $("#ecografia\\.saco\\.mm\\.copia").addClass("d-none");
            }
            else{
                $("#ecografia\\.saco\\.mm\\.copia").removeClass("d-none");
            }
        });

        $("#ecografia\\.embrion\\.txt").on("change", function(){
            if ($(this).val() == 'no se observa aun' || $(this).val() == 'act. no evidenciable' || $(this).val() == 'act.card. y Corp. (-)'){
                $("#ecografia\\.lcn\\.mm").val("").trigger("change");
                $("#ecografia\\.lcn\\.eg").val("");
                $("#ecografia\\.lcn\\.mm\\.copia").addClass("d-none");
                $("#ecografia\\.fcf").val("").addClass("d-none");
            }
            else{
                $("#ecografia\\.lcn\\.mm\\.copia").removeClass("d-none");
                $("#ecografia\\.fcf").removeClass("d-none");
            }
        });

        $("#ecografia\\.douglas\\.txt").on("change", function(){
            if ($(this).val() == 'libre'){
                $("#ecografia\\.douglas\\.com").val("").addClass("d-none");
            }
            else{
                $("#ecografia\\.douglas\\.com").removeClass("d-none");
            }
        });
        //enters
        $("#ecografia\\.lcn\\.mm").keyup(function( event ) {
            if ( event.which == 13 ) {
                event.preventDefault();
                $("#ecografia\\.saco\\.mm").focus();
            }
        });
        $("#ecografia\\.saco\\.mm").keyup(function( event ) {
            if ( event.which == 13 ) {
                event.preventDefault();
                $("#button\\.ecografia\\.guardar").focus();
            }
        });

        //calculos
        $("#ecografia\\.fecha").on("change", function(){
            var FExamen, FUM, EdadGestacional;
            var undia = 1000 * 60 * 60 * 24;
            var unasemana = undia * 7;
            
            FUM = new Date('<?php echo $this->fur->fur_fecha; ?>');
            FExamen = new Date($("#ecografia\\.fecha").val());
            
            EdadGestacional = ((FExamen.getTime() - FUM.getTime()) / unasemana).toFixed(1);

            if (FExamen.getTime() < FUM.getTime()) {
                EdadGestacional = "0";
            } else if (((FExamen.getTime() - FUM.getTime()) / unasemana) > 42) {
                EdadGestacional = "42";
            } else {
                EdadGestacional = Math.floor(EdadGestacional) + "." + Math.round((EdadGestacional - Math.floor(EdadGestacional)) * 7);
            }

            var x = document.getElementById("ecografia.eg");
            x.value = EdadGestacional;
        });

        $("#ecografia\\.lcn\\.mm").on("change", function(){
            $("#ecografia\\.lcn\\.mm\\.copia").val($(this).val());
            if ($.isNumeric($("#ecografia\\.eg").val())){
                $("#ecografia\\.lcn\\.eg").val(eglcn($("#ecografia\\.lcn\\.mm").val()));
            }
        });

        $("#ecografia\\.saco\\.mm").on("change", function(){
            $("#ecografia\\.saco\\.mm\\.copia").val($(this).val());
            if ($.isNumeric($("#ecografia\\.eg").val())){
                $("#ecografia\\.saco\\.eg").val(eglcn($("#ecografia\\.saco\\.mm").val()));
            }
        });
    });

    function makeTable(){

        let encap = {
            accion: "primertrimestre",
        }

        $.post( "<?php echo Config::get('URL'); ?>ecografia/api", encap).done(function( data ) {
            $("#table\\.ecografia").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let fila = '<tr id="' + value.ecografia_id + '"><td>' + value.ecografia_fecha + '</td><td>' + value.ecografia_eg + '</td><td>' + '<button type="button" data-id="' + value.ecografia_id + '" class="btn btn-outline-warning px-3 eliminar-ecografia float-right"><i class="fas fa-trash"></i></button></td></tr>';
                    $("#table\\.ecografia").append(fila);
                });

                $(".eliminar-ecografia").on("click", function(){
                    let ecografia_id = $(this).data("id");

                    $("#dialog\\.title").html("Eliminar ecografia");
                    $("#dialog\\.body").html('<p class="text-center text-danger">¿Está seguro de eliminar la ecografía?</p>');
                    $("#dialog\\.delete").remove();
                    $("#dialog\\.footer").append('<button type="button" class="btn btn-danger" id="dialog.delete" data-id="' + ecografia_id + '">Eliminar</button>');
                    $("#dialog\\.delete").on("click", function(){
                        let region = {accion: "primertrimestreDelete", ecografia_id: $(this).data("id")}

                        $.post( "<?php echo Config::get('URL'); ?>ecografia/api", region).done(function( data ) {
                            $("#table\\.ecografia").empty();
                            makeTable();
                            $("#dialog\\.view").modal("hide");
                        });
                    });
                    $("#dialog\\.view").modal("show");
                });
            }
        });
    };

    $("#ecografia\\.fecha").on("keyup", function(event){
        if ( event.which == 13 ) {
            event.preventDefault();
            $("#ecografia\\.aud\\.mm").focus();
        }
    });

    $("#ecografia\\.aud\\.mm").on("keyup", function(event){
        if ( event.which == 13 ) {
            event.preventDefault();
            $("#ecografia\\.aui\\.mm").focus();
            let ut = pctut($("#ecografia\\.eg").val(), $("#ecografia\\.aud\\.mm").val());
            promUterinas($("#ecografia\\.aud\\.mm").val(), $("#ecografia\\.aui\\.mm").val());
        }
    });

    $("#ecografia\\.aui\\.mm").on("keyup", function(event){
        if ( event.which == 13 ) {
            event.preventDefault();
            $("#ecografia\\.ipau\\.mm").focus();
            let ut = pctut($("#ecografia\\.eg").val(), $("#ecografia\\.aui\\.mm").val());
            ajustarProgreso(ut, "auiPct");
            promUterinas($("#ecografia\\.aud\\.mm").val(), $("#ecografia\\.aui\\.mm").val());
        }
    });

    $("#ecografia\\.auprom\\.mm").on("change", function(event){
        let ut = pctut($("#ecografia\\.eg").val(), $("#ecografia\\.auprom\\.mm").val());
        ajustarProgreso(ut, "aupromPct");
    });

    $("#ecografia\\.ipau\\.mm").on("keyup", function(event){
        if ( event.which == 13 ) {
            event.preventDefault();
            $("#ecografia\\.ipau\\.mm").focus();
            
            let ipau = pctau($("#ecografia\\.eg").val(), $("#ecografia\\.ipacm\\.mm").val());
            ajustarProgreso(ipau, "ipauPct");
            promCCP($("#ecografia\\.ipacm\\.mm").val(), $("#ecografia\\.ipau\\.mm").val());
        }
    });
    $("#ecografia\\.ipacm\\.mm").on("keyup", function(event){
        if ( event.which == 13 ) {
            event.preventDefault();
            $("#ecografia\\.dv\\.mm").focus();

            let ipacm = pctacm($("#ecografia\\.eg").val(), $("#ecografia\\.ipacm\\.mm").val());
            ajustarProgreso(ipacm, "ipacmPct");
            promCCP($("#ecografia\\.ipacm\\.mm").val(), $("#ecografia\\.ipau\\.mm").val());
        }
    });

    $("#ecografia\\.dv\\.mm").on("keyup", function(event){
        if ( event.which == 13 ) {
            event.preventDefault();
            $("#ecografia\\.psmacm\\.mm").focus();
            let dv = pctau($("#ecografia\\.eg").val(), $("#ecografia\\.ipacm\\.mm").val());
            ajustarProgreso(dv, "dvPct");
        }
    });

    $("#ecografia\\.psmacm\\.mm").on("keyup", function(event){
        if ( event.which == 13 ) {
            event.preventDefault();
            $("#button\\.ecografia\\.guardar").focus();
            let psmacm = pctau($("#ecografia\\.eg").val(), $("#ecografia\\.ipacm\\.mm").val());
            ajustarProgreso(psmacm, "psmacmPct");
        }
    });

    function pctut(eg, ut) {
        var pct5 = [], pct95 = [];

        pct5[0] = 1.23;
        pct5[1] = 1.18;pct5[2] = 1.11;pct5[3] = 1.05;pct5[4] = 0.99;pct5[5] = 0.94;
        pct5[6] = 0.89;pct5[7] = 0.85;pct5[8] = 0.81;pct5[9] = 0.78;pct5[10] = 0.74;
        pct5[11] = 0.71;pct5[12] = 0.69;pct5[13] = 0.66;pct5[14] = 0.64;pct5[15] = 0.62;
        pct5[16] = 0.6;pct5[17] = 0.58;pct5[18] = 0.56;pct5[19] = 0.55;pct5[20] = 0.54;
        pct5[21] = 0.52;pct5[22] = 0.51;pct5[23] = 0.51;pct5[24] = 0.51;pct5[25] = 0.49;
        pct5[26] = 0.48;pct5[27] = 0.48;pct5[28] = 0.47;pct5[29] = 0.47;pct5[30] = 0.47;
        
        pct95[0] = 2.84;
        pct95[1] = 2.71;pct95[2] = 2.53;pct95[3] = 2.38;pct95[4] = 2.24;pct95[5] = 2.11;
        pct95[6] = 1.99;pct95[7] = 1.88;pct95[8] = 1.79;pct95[9] = 1.71;pct95[10] = 1.61;
        pct95[11] = 1.54;pct95[12] = 1.47;pct95[13] = 1.41;pct95[14] = 1.35;pct95[15] = 1.3;
        pct95[16] = 1.25;pct95[17] = 1.21;pct95[18] = 1.17;pct95[19] = 1.13;pct95[20] = 1.11;
        pct95[21] = 1.06;pct95[22] = 1.04;pct95[23] = 1.01;pct95[24] = 0.99;pct95[25] = 0.97;
        pct95[26] = 0.95;pct95[27] = 0.94;pct95[28] = 0.92;pct95[29] = 0.91;pct95[30] = 0.91;

        ut = ut.toString();
        ut = ut.replace(',', '.');
        ut = parseFloat(ut);

        if (eg < 10) {
            return 0;
        } 
        else if (eg > 40)
        {
            return 0;
        } 
        else {

            eg = eg - 10;
            var uno = 0;
            var dos = 0;
            var resultado = '';

            if (ut > 0) {
                
                eg = parseInt(eg);
                uno = pct95[eg] - pct5[eg];
                dos = ut - pct5[eg];
                resultado = parseInt(90 / (uno) * (dos) + 5);

                if (resultado > 99) {
                    return 0;
                } 
                else if (resultado < 1) {
                    return 0;
                } 
                else {
                    return resultado;
                }
            }
            else{
                return 0;
            }
        }
    }

    function promUterinas(aud, aui){

        aud = aud.toString();
        aud = aud.replace(',', '.');
        aud = parseFloat(aud);

        aui = aui.toString();
        aui = aui.replace(',', '.');
        aui = parseFloat(aui);

        let uct = parseFloat(aud) + parseFloat(aui);

        if (uct > 0){
            uct = uct /2;
            $("#ecografia\\.auprom\\.mm").val(uct).trigger("change");
        }
    }

    function pctau(eg, aumb) {
        var pct5 = [], pct95 = [];

        pct5[0] = 0.97;
        pct5[1] = 0.95;pct5[2] = 0.94;pct5[3] = 0.92;pct5[4] = 0.9;pct5[5] = 0.89;
        pct5[6] = 0.87;pct5[7] = 0.85;pct5[8] = 0.82;pct5[9] = 0.8;pct5[10] = 0.78;
        pct5[11] = 0.75;pct5[12] = 0.73;pct5[13] = 0.7;pct5[14] = 0.67;pct5[15] = 0.65;
        pct5[16] = 0.62;pct5[17] = 0.58;pct5[18] = 0.55;pct5[19] = 0.52;pct5[20] = 0.49;

        pct95[0] = 1.6;
        pct95[1] = 1.56;pct95[2] = 1.53;pct95[3] = 1.5;pct95[4] = 1.46;pct95[5] = 1.43;
        pct95[6] = 1.4;pct95[7] = 1.37;pct95[8] = 1.35;pct95[9] = 1.32;pct95[10] = 1.29;
        pct95[11] = 1.27;pct95[12] = 1.25;pct95[13] = 1.22;pct95[14] = 1.2;pct95[15] = 1.18;
        pct95[16] = 1.16;pct95[17] = 1.14;pct95[18] = 1.13;pct95[19] = 1.11;pct95[20] = 1.09;
 
        aumb = aumb.toString();
        aumb = aumb.replace(',', '.');
        aumb = parseFloat(aumb);

        if (eg < 20) {
            return 0;
        } 
        else if (eg > 40)
        {
            return 0;
        } 
        else {
            eg = eg - 20;
            eg = parseInt(eg);

            var uno = pct95[eg] - pct5[eg];
            var dos = aumb - pct5[eg];
            var resultado = parseInt(90 / (uno) * (dos) + 5);

            if (resultado > 99) {
                return 0;
            } 
            else if (resultado < 1) {
                return 0;
            } 
            else {
                return resultado;
            }
        }
    }

    function pctacm(eg, acm) {
        var pct5 = [], pct95 = [];

        pct5[0] = 1.24;
        pct5[1] = 1.29;pct5[2] = 1.34;pct5[3] = 1.37;pct5[4] = 1.4;pct5[5] = 1.43;
        pct5[6] = 1.44;pct5[7] = 1.45;pct5[8] = 1.45;pct5[9] = 1.44;pct5[10] = 1.43;
        pct5[11] = 1.41;pct5[12] = 1.38;pct5[13] = 1.34;pct5[14] = 1.3;pct5[15] = 1.25;
        pct5[16] = 1.19;pct5[17] = 1.13;pct5[18] = 1.05;pct5[19] = 0.98;pct5[20] = 0.89;

        pct95[0] = 1.98;
        pct95[1] = 2.12;pct95[2] = 2.25;pct95[3] = 2.36;pct95[4] = 2.45;pct95[5] = 2.53;
        pct95[6] = 2.59;pct95[7] = 2.63;pct95[8] = 2.66;pct95[9] = 2.67;pct95[10] = 2.67;
        pct95[11] = 2.65;pct95[12] = 2.62;pct95[13] = 2.56;pct95[14] = 2.5;pct95[15] = 2.41;
        pct95[16] = 2.31;pct95[17] = 2.2;pct95[18] = 2.07;pct95[19] = 1.92;pct95[20] = 1.76;

        acm = acm.toString();
        acm = acm.replace(',', '.');
        acm = parseFloat(acm);

        if (eg < 20) {
            return 0;
        } 
        else if (eg > 40)
        {
            return 0;
        } 
        else {
            eg = eg - 20;
            eg = parseInt(eg);
            var uno = pct95[eg] - pct5[eg];
            var dos = acm - pct5[eg];
            var resultado = parseInt(90 / (uno) * (dos) + 5);

            if (resultado > 99) {
                return 0;
            } 
            else if (resultado < 1) {
                return 0;
            } 
            else {
                return resultado;
            }
        }
    }

    function promCCP(ipacm, ipau){

        ipacm = ipacm.toString();
        ipacm = ipacm.replace(',', '.');
        ipacm = parseFloat(ipacm);

        ipau = ipau.toString();
        ipau = ipau.replace(',', '.');
        ipau = parseFloat(ipau);

        if (ipau > 0 && ipacm > 0){
            let ccp = parseFloat(ipacm) / parseFloat(ipau);
            ccp = pctccp(eg, ccp);
            ajustarProgreso(ccp, "ccpPct");
        }
    }

    function pctccp(eg, ccp) {
        var pct5 = [], pct95 = [];
        
        pct5[20] = 0.78;
        pct5[21] = 0.87;pct5[22] = 0.95;pct5[23] = 1.02;pct5[24] = 1.09;pct5[25] = 1.15;
        pct5[26] = 1.2;pct5[27] = 1.24;pct5[28] = 1.28;pct5[29] = 1.31;pct5[30] = 1.33;
        pct5[31] = 1.35;pct5[32] = 1.36;pct5[33] = 1.36;pct5[34] = 1.36;pct5[35] = 1.34;
        pct5[36] = 1.32;pct5[37] = 1.3;pct5[38] = 1.26;pct5[39] = 1.22;pct5[40] = 1.18;

        pct95[20] = 1.68;
        pct95[21] = 1.88;pct95[22] = 2.06;pct95[23] = 2.22;pct95[24] = 2.36;
        pct95[25] = 2.49;pct95[26] = 2.6;pct95[27] = 2.7;pct95[28] = 2.78;pct95[29] = 2.84;
        pct95[30] = 2.89;pct95[31] = 2.92;pct95[32] = 2.93;pct95[33] = 2.93;pct95[34] = 2.91;
        pct95[35] = 2.87;pct95[36] = 2.82;pct95[37] = 2.75;pct95[38] = 2.67;pct95[39] = 2.57;
        
        ccp = ccp.toString();
        ccp = ccp.replace(',', '.');
        ccp = parseFloat(ccp);

        if (eg < 20) {
            return 0;
        } 
        else if (eg > 40)
        {
            return 0;
        } 
        else {
            eg = parseInt(eg);
            uno = pct95[eg] - pct5[eg];
            dos = ccp - pct5[eg];
            resultado = parseInt(90 / (uno) * (dos) + 5);

            if (resultado > 99) {
                return 0;
            } 
            else if (resultado < 1) {
                return 0;
            } 
            else {
                return resultado;
            }
        }
    }


    function ajustarProgreso(valor, objeto) {
        $('#' + objeto + ' > .pivote-uno').html('');
        $('#' + objeto + ' > .pivote-dos').html('');
        $('#' + objeto + ' > .pivote-cero').html('|');
        $('#' + objeto + ' > .pivote-centro').html('|');
        $('#' + objeto + ' > .pivote-cien').html('|');
        $('#' + objeto + ' > .pivote-tres').html('');
        $('#' + objeto + ' > .pivote-cuatro').html('');

        if (valor <= 6) {
            $('#' + objeto + ' > .pivote-cero').html('<strong style=\'color:red;\'>X</strong>');
        } 
        else if (valor <= 10) {
            $('#' + objeto + ' > .pivote-uno').css('width', '10%');
            $('#' + objeto + ' > .pivote-uno').html('<strong style=\'color:red;\'>X</strong>');
            $('#' + objeto + ' > .pivote-dos').css('width', '25%');
        } 
        else if (valor <= 20) {
            $('#' + objeto + ' > .pivote-uno').css('width', '17.5%');
            $('#' + objeto + ' > .pivote-uno').html('<strong style=\'color:red;\'>X</strong>');
            $('#' + objeto + ' > .pivote-dos').css('width', '17.5%');
        } 
        else if (valor <= 30) {
            $('#' + objeto + ' > .pivote-uno').css('width', '20%');
            $('#' + objeto + ' > .pivote-dos').css('width', '15%');
            $('#' + objeto + ' > .pivote-dos').html('<strong style=\'color:red;\'>X</strong>');
        } 
        else if (valor <= 40) {
            $('#' + objeto + ' > .pivote-uno').css('width', '25%');
            $('#' + objeto + ' > .pivote-dos').css('width', '10%');
            $('#' + objeto + ' > .pivote-dos').html('<strong style=\'color:red;\'>X</strong>');
        } 
        else if (valor <= 50) {
            $('#' + objeto + ' > .pivote-centro').html('<strong style=\'color:red;\'>X</strong>');
        } 
        else if (valor <= 60) {
            $('#' + objeto + ' > .pivote-tres').css('width', '10%');
            $('#' + objeto + ' > .pivote-tres').html('<strong style=\'color:red;\'>X</strong>');
            $('#' + objeto + ' > .pivote-cuatro').css('width', '25%');
        } 
        else if (valor <= 70) {
            $('#' + objeto + ' > .pivote-tres').css('width', '17.5%');
            $('#' + objeto + ' > .pivote-tres').html('<strong style=\'color:red;\'>X</strong>');
            $('#' + objeto + ' > .pivote-cuatro').css('width', '17.5%');
        } 
        else if (valor <= 80) {
            $('#' + objeto + ' > .pivote-tres').css('width', '20%');
            $('#' + objeto + ' > .pivote-cuatro').css('width', '15%');
            $('#' + objeto + ' > .pivote-cuatro').html('<strong style=\'color:red;\'>X</strong>');
        } 
        else if (valor <= 90) {
            $('#' + objeto + ' > .pivote-tres').css('width', '25%');
            $('#' + objeto + ' > .pivote-cuatro').css('width', '10%');
            $('#' + objeto + ' > .pivote-cuatro').html('<strong style=\'color:red;\'>X</strong>');
        } 
        else {
            $('#' + objeto + ' > .pivote-cien').html('<strong style=\'color:red;\'>X</strong>');
        }
    }
</script>