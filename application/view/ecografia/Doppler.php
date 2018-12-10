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
                <dt class="col-2">Nombre:</dt>
                <dd class="col-2"><?php echo $this->paciente->paciente_nombre . ' ' .$this->paciente->paciente_apellido; ?></dd>
            <?php } ?>
            <?php if ($this->fur) { ?>
                <dt class="col-2">FUR:</dt>
                <dd class="col-2"><?php $date=date_create($this->fur->fur_fecha); echo date_format($date,"d/m/Y"); ?></dd>
                <dt class="col-2">FPP:</dt>
                <dd class="col-2"><?php $date2=date_create($this->fur->fpp_fecha); echo date_format($date2,"d/m/Y"); ?></dd>
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
                                            <input type="text" class="form-control" id="ecografia.auprom.mm">
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
                                            <input type="text" class="form-control" id="ecografia.ccp.mm">
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
                                        <div class="form-group col-12">
                                            <label for="ecografia.motivo">Motivo del exámen</label>
                                            <select class="form-control" id="ecografia.motivo"><option value="RCIU Emb. Previo">RCIU Emb. Previo</option><option value="RCIU No PEG > p10">RCIU No PEG &gt; p10</option><option value="RCIU Moderado < p10">RCIU Moderado &lt; p10</option><option value="RCIU Severo < p3">RCIU Severo &lt; p3</option><option value="Seguimiento Evolución">Seguimiento Evolución</option><option value="Síndrome Hipertensivo">Síndrome Hipertensivo</option><option value="Preeclampsia">Preeclampsia</option><option value="Desnutrición Materna">Desnutrición Materna</option><option value="Amenaza Pto. Prematuro">Amenaza Pto. Prematuro</option><option value="Tabaquismo">Tabaquismo</option><option value="Otra Patología ARO">Otra Patología ARO</option><option value="Sin Patología ARO">Sin Patología ARO</option><option value="Estudio Doppler" selected>Estudio Doppler</option><option value="Estudio Doppler materno">Estudio Doppler materno</option><select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="ecografia.antecedentes">Antecedentes Obstétricos</label>
                                            <select class="form-control" id="ecografia.antecedentes"><option value="RCIU Emb. Previo">RCIU Emb. Previo</option><option value="RCIU No PEG > p10">RCIU No PEG &gt; p10</option><option value="RCIU Moderado < p10">RCIU Moderado &lt; p10</option><option value="RCIU Severo < p3">RCIU Severo &lt; p3</option><option value="Síndrome Hipertensivo">Síndrome Hipertensivo</option><option value="Desnutrición Materna">Desnutrición Materna</option><option value="Amenaza Pto. Prematuro">Amenaza Pto. Prematuro</option><option value="Tabaquismo">Tabaquismo</option><option value="Otra Patología ARO">Otra Patología ARO</option><option value="Sin Patología ARO">Sin Patología ARO</option></select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="ecografia.presentacion">Presentacion</label>
                                            <select class="form-control" id="ecografia.presentacion"><option value="cefalica" selected="">Cefalica</option><option value="podalica">Podálica</option><option value="transversa">Transversa</option><option value="indiferente">Indiferente</option></select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="ecografia.motilidad">Motilidad Fetal</label>
                                            <select class="form-control" id="ecografia.motilidad"><option value="hiperactivo" selected="">Hiperactivo</option><option value="activo">Activo</option><option value="hipoactivo">Hipoactivo</option><option value="inmovil">Inmovil</option></select>
                                        </div>
                                        <div class="form-group col-12">
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

</script>