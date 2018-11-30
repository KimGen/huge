<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="text-right my-3">Ecografía Obstétrica Primer Trimestre</h4>
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
                <dd class="col-2"><?php echo $this->fur->fur_fecha; ?></dd>
                <dt class="col-2">FPP:</dt>
                <dd class="col-2"><?php echo $this->fur->fpp_fecha; ?></dd>
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
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="ecografia.rut">Fecha de exámen</label>
                                            <input type="date" class="form-control" id="ecografia.fecha">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.nombres">Edad Gestacional al exámen</label>
                                            <input type="text" class="form-control" id="ecografia.eg" disabled>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.apellidos">Medida de embrión</label>
                                            <input type="text" class="form-control" id="ecografia.lcn.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.nacimiento">EG x LCN</label>
                                            <input type="text" class="form-control" id="ecografia.lcn.eg" disabled>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.nacionalidad">Promedio de Saco</label>
                                            <input type="text" class="form-control" id="ecografia.saco.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.pais">EG x Saco</label>
                                            <input type="text" class="form-control" id="ecografia.saco.eg" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="texto" role="tabpanel" aria-labelledby="texto-tab">
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="ecografia.rut">Utero Ubicacion 1</label>
                                            <select class="form-control" id="ecografia.utero.uno"><option value="central">central</option><option value="lateralizado a la izquierda">lateralizado a la izquierda</option><option value="lateralizado a la derecha">lateralizado a la derecha</option></select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.nombres">Utero Ubicacion 2</label>
                                            <select class="form-control" id="ecografia.utero.dos"><option value="anterior">anterior</option><option value="posterior">posterior</option></select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.rut">Cuerpo Uternino</label>
                                            <select class="form-control" id="ecografia.cuerpo"><option value="aspecto normal">aspecto normal</option><option value="nodulo unico">nodulo unico</option><option value="múltiples nódulos">múltiples nódulos</option><option value="malformaciones">malformaciones</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.nombres">Saco Gestacional</label>
                                            <select class="form-control" id="ecografia.saco.txt"><option value="normal">normal</option><option value="no se observa">no se observa</option><option value="múltiple">múltiple</option><option value="con pseudosaco">con pseudosaco</option><option value="con dpmto.parcial">con dpmto.parcial</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.rut">mm</label>
                                            <input type="text" class="form-control d-none" id="ecografia.saco.mm.copia" disabled>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.nombres">Saco Vitelino</label>
                                            <select class="form-control" id="ecografia.vitelino.txt"><option value="presente">presente</option><option value="no se observa" selected="">no se observa </option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.rut">Medida de saco vitelino</label>
                                            <input type="text" class="form-control" id="ecografia.vitelino.mm">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.nombres">Embrión</label>
                                            <select class="form-control" id="ecografia.embrion.txt"><option value="no se observa aun" selected="">no se observa aun</option><option value="act. no evidenciable">act. no evidenciable</option><option value="act. cardiaca evidenciable">act. cardiaca evidenciable</option><option value="con act. cardiaca (+)">con act. cardiaca (+)</option><option value="act. card. y Corp.(+)">act. card. y Corp.(+)</option><option value="act. card. y Corp. (-)">act. card. y Corp. (-)</option></select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.rut">mm</label>
                                            <input type="text" class="form-control d-none" id="ecografia.lcn.mm.copia" disabled>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.nombres">FCF</label>
                                            <select class="form-control d-none" id="ecografia.fcf"><option value="(+) inicial">(+) inicial</option><option value=" <90">&lt; 90</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option><option value="101">101</option><option value="102">102</option><option value="103">103</option><option value="104">104</option><option value="105">105</option><option value="106">106</option><option value="107">107</option><option value="108">108</option><option value="109">109</option><option value="110">110</option><option value="111">111</option><option value="112">112</option><option value="113">113</option><option value="114">114</option><option value="115">115</option><option value="116">116</option><option value="117">117</option><option value="118">118</option><option value="119">119</option><option value="120">120</option><option value="121">121</option><option value="122">122</option><option value="123">123</option><option value="124">124</option><option value="125">125</option><option value="126">126</option><option value="127">127</option><option value="128">128</option><option value="129">129</option><option value="130">130</option><option value="131">131</option><option value="132">132</option><option value="133">133</option><option value="134">134</option><option value="135">135</option><option value="136">136</option><option value="137">137</option><option value="138">138</option><option value="139">139</option><option value="140" selected="">140</option><option value="141">141</option><option value="142">142</option><option value="143">143</option><option value="144">144</option><option value="145">145</option><option value="146">146</option><option value="147">147</option><option value="148">148</option><option value="149">149</option><option value="150">150</option><option value="151">151</option><option value="152">152</option><option value="153">153</option><option value="154">154</option><option value="155">155</option><option value="156">156</option><option value="157">157</option><option value="158">158</option><option value="159">159</option><option value="160">160</option><option value="161">161</option><option value="162">162</option><option value="163">163</option><option value="164">164</option><option value="165">165</option><option value="166">166</option><option value="167">167</option><option value="168">168</option><option value="169">169</option><option value="170">170</option><option value=" > 170">&gt; 170</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.rut">Anexo derecho</label>
                                            <select class="form-control" id="ecografia.anexo.derecho"><option value="aspecto normal">aspecto normal</option><option value="masa sólida">masa sólida</option><option value="masa eco negativa">masa eco negativa</option><option value="con ovario">con ovario</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.nombres">Anexo Izquierdo</label>
                                            <select class="form-control" id="ecografia.anexo.izquierdo"><option value="aspecto normal">aspecto normal</option><option value="masa sólida">masa sólida</option><option value="masa eco negativa">masa eco negativa</option><option value="con ovario">con ovario</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.rut">Douglas</label>
                                            <select class="form-control" id="ecografia.douglas.txt"><option value="libre">libre</option><option value="ocupado">ocupado</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.nombres">Comentarios Douglas</label>
                                            <textarea class="form-control d-none" id="ecografia.douglas.com"></textarea>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="ecografia.rut">Comentarios adicionales</label>
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
                                    <th scope="col">Saco</th>
                                    <th scope="col">LCN</th>
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
                <button type="button" class="btn btn-outline-primary" id="button.ecografia.lcn">Gráfico LCN</button>
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
<script src="https://code.highcharts.com/highcharts.js"></script>
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
            $("#ecografia\\.com").val("Fum operacional: <?php echo $this->fur->fur_fecha; ?>/nFecha probable de parto: <?php echo $this->fur->fpp_fecha; ?>");
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

        $("#button\\.ecografia\\.lcn").on("click", function(){
            $("#dialog\\.title").html("Grafico de LCN");
            $("#dialog\\.delete").remove();
            $("#dialog\\.view").modal("show");

            $('#dialog\\.body').html("<div class='row'><div class='col'><div id='graficoLcnBaseView'></div></div></div>");

            let encap = {accion: "primertrimestre"}

            $.post( "<?php echo Config::get('URL'); ?>ecografia/api", encap).done(function( response ) {
                $("#table\\.ecografia").empty();
                if (Object.keys(response).length > 0) {
                    $('#graficoLcnBaseView').highcharts({
                        title: {
                            text: 'LCN 6 a 15 semanas',
                            x: -20
                        },
                        xAxis: {
                            categories: ['6', '7', '8', '9', '10', '11', '12', '13', '14', '15']
                        },
                        yAxis: {
                            title: {
                                text: 'Milimetros (mm)'
                            },
                            tickPositions: [0.2, 1.1, 2.2, 3.3, 4.4, 5.5, 6.6, 7.7, 8.8, 9.9, 11]
                        },
                        credits: {
                            enabled: false
                        },
                        colors: ['#313131', '#313131', '#313131'],
                        plotOptions: {
                            series: {
                                enableMouseTracking: false
                            }
                        },
                        series: [{
                            name: '(-) 2DE',
                            type: "line",
                            marker: {
                                enabled: false
                            },
                            data: [0.26, 0.77, 1.4, 2.05, 2.62, 3.55, 4.68, 5.82, 6.98, 8.02],
                            dashStyle: 'shortdot'
                        }, {
                            name: 'Media',
                            type: "line",
                            marker: {
                                enabled: false
                            },
                            data: [0.38, 0.89, 1.54, 2.25, 2.95, 4.05, 5.29, 6.65, 7.90, 9.01]
                        }, {
                            name: '(+) 2DE',
                            type: "line",
                            marker: {
                                enabled: false
                            },
                            data: [0.53, 1.04, 1.71, 2.49, 3.32, 4.64, 6.08, 7.57, 8.91, 10.01],
                            dashStyle: 'shortdot'
                        }, {
                            type: "line",
                            name: 'LCN (Hadlock y col. Radiology 182. 501, 1992)',
                            dashStyle: "Dot",
                            marker: {
                                symbol: 'square'
                            },
                            lineWidth: 0,
                            data: (function() {
                                var data = [];
                                var I = 1;

                                var data = [];
                                $.each(response, function(i,value){

                                    var egLcn = parseInt(value.ecografia_eg);
                                    var lcn = parseInt(value.ecografia_lcn_mm);
                                    lcn = parseFloat(lcn) / 10;
                                    if (egLcn > 5 || egLcn < 16){
                                        for (i; i <= egLcn; i++) {
                                            data.push({ y: 0, });
                                        }
                                        data.push({
                                            y: lcn,
                                        });
                                        i++;
                                    }
                                });
                                return data;
                            }())
                        }]
                    });
                }
                else{
                    $('#dialog\\.body').html("<p>No hay datos</p>");
                }
            });
        });
        //calculos
        $("#ecografia\\.fecha").on("change", function(){
            var FExamen, FUM, EdadGestacional;
            var undia = 1000 * 60 * 60 * 24;
            var unasemana = undia * 7;
            
            FUM = new Date('<?php echo $this->fur->fur_fecha; ?>');
            FExamen = new Date($(this).val());
            
            EdadGestacional = ((FExamen.getTime() - FUM.getTime()) / unasemana).toFixed(1);

            if (FExamen.getTime() < FUM.getTime()) {
                EdadGestacional = "0";
            } else if (((FExamen.getTime() - FUM.getTime()) / unasemana) > 42) {
                EdadGestacional = "42";
            } else {
                EdadGestacional = Math.floor(EdadGestacional) + "." + Math.round((EdadGestacional - Math.floor(EdadGestacional)) * 7);
            }

            $("#ecografia\\.eg").val(EdadGestacional);
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
                    let fila = '<tr id="' + value.ecografia_id + '"><td>' + value.ecografia_fecha + '</td><td>' + value.ecografia_eg + '</td><td>' + value.ecografia_saco_mm + '</td><td>' + value.ecografia_lcn_mm + '<button type="button" data-id="' + value.ecografia_id + '" class="btn btn-outline-warning px-3 eliminar-ecografia float-right"><i class="fas fa-trash"></i></button></td></tr>';
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
    }

    function eglcn(lcn) {

        var LCN = [[],[]];

        LCN[0][0] = 0.09; LCN[0][1] = 0.2; LCN[0][2] = 0.37;
        LCN[0][3] = 0.57; LCN[0][4] = 0.7; LCN[0][5] = 0.8;
        LCN[0][6] = 0.9; LCN[0][7] = 1; LCN[0][8] = 1.1;
        LCN[0][9] = 1.12; LCN[0][10] = 1.13; LCN[0][11] = 1.18;
        LCN[0][12] = 1.27; LCN[0][13] = 1.38; LCN[0][14] = 1.47;
        LCN[0][15] = 1.58; LCN[0][16] = 1.65; LCN[0][17] = 1.72;
        LCN[0][18] = 1.87; LCN[0][19] = 1.96; LCN[0][20] = 2.05;
        LCN[0][21] = 2.18; LCN[0][22] = 2.25; LCN[0][23] = 2.35;
        LCN[0][24] = 2.54; LCN[0][25] = 2.62; LCN[0][26] = 2.7;
        LCN[0][27] = 2.9; LCN[0][28] = 3.08; LCN[0][29] = 3.16;
        LCN[0][30] = 3.4; LCN[0][31] = 3.51; LCN[0][32] = 3.57;
        LCN[0][33] = 3.76; LCN[0][34] = 3.85; LCN[0][35] = 4.05;
        LCN[0][36] = 4.18; LCN[0][37] = 4.46; LCN[0][38] = 4.55;
        LCN[0][39] = 4.66; LCN[0][40] = 4.88; LCN[0][41] = 5.07;
        LCN[0][42] = 5.29; LCN[0][43] = 5.46; LCN[0][44] = 5.66;
        LCN[0][45] = 5.87; LCN[0][46] = 6.01; LCN[0][47] = 6.27;
        LCN[0][48] = 6.37; LCN[0][49] = 6.65; LCN[0][50] = 6.77;
        LCN[0][51] = 7.08; LCN[0][52] = 7.19; LCN[0][53] = 7.39;
        LCN[0][54] = 7.57; LCN[0][55] = 7.68; LCN[0][56] = 7.98;
        LCN[0][57] = 8.09; LCN[0][58] = 8.35; LCN[0][59] = 8.48;
        LCN[0][60] = 8.56; LCN[0][61] = 8.76; LCN[0][62] = 8.88;
        LCN[0][63] = 9.09;

        LCN[1][0] = 0; LCN[1][1] = 5.5; LCN[1][2] = 6;
        LCN[1][3] = 6.2; LCN[1][4] = 6.4; LCN[1][5] = 6.5;
        LCN[1][6] = 6.6; LCN[1][7] = 7.1; LCN[1][8] = 7.1;
        LCN[1][9] = 7.1; LCN[1][10] = 7.2; LCN[1][11] = 7.3;
        LCN[1][12] = 7.4; LCN[1][13] = 7.5; LCN[1][14] = 7.6;
        LCN[1][15] = 8; LCN[1][16] = 8.1; LCN[1][17] = 8.2;
        LCN[1][18] = 8.3; LCN[1][19] = 8.4; LCN[1][20] = 8.5;
        LCN[1][21] = 8.6; LCN[1][22] = 9; LCN[1][23] = 9.1;
        LCN[1][24] = 9.2; LCN[1][25] = 9.3; LCN[1][26] = 9.4;
        LCN[1][27] = 9.5; LCN[1][28] = 10; LCN[1][29] = 10.1;
        LCN[1][30] = 10.2; LCN[1][31] = 10.3; LCN[1][32] = 10.4;
        LCN[1][33] = 10.5; LCN[1][34] = 10.6; LCN[1][35] = 11;
        LCN[1][36] = 11.1; LCN[1][37] = 11.2; LCN[1][38] = 11.3;
        LCN[1][39] = 11.4; LCN[1][40] = 11.5; LCN[1][41] = 11.6;
        LCN[1][42] = 12; LCN[1][43] = 12.1; LCN[1][44] = 12.2;
        LCN[1][45] = 12.3; LCN[1][46] = 12.4; LCN[1][47] = 12.5;
        LCN[1][48] = 12.6; LCN[1][49] = 13; LCN[1][50] = 13.1;
        LCN[1][51] = 13.2; LCN[1][52] = 13.3; LCN[1][53] = 13.4;
        LCN[1][54] = 13.5; LCN[1][55] = 13.6; LCN[1][56] = 14;
        LCN[1][57] = 14.1; LCN[1][58] = 14.2; LCN[1][59] = 14.3;
        LCN[1][60] = 14.4; LCN[1][61] = 14.5; LCN[1][62] = 14.6;
        LCN[1][63] = 15;

        lcn = lcn.toString();
        lcn = lcn.replace(",", ".");
        lcn = parseFloat(lcn);

        if (isNaN(lcn) != true){
            if (lcn > 90) {
                return 0;
            }
            else if (lcn < 1){
                return 0;
            }
            else {

                var ValLCN1 = lcn / 10;

                for (i = 1; i <= 63; i ++ ) {
                if (LCN[0][i] >= ValLCN1) {
                    var eglcn = LCN[1][i];
                    i = 63;
                }
                }
                return eglcn;
            }
        }
        else{
            return 0;
        }
    };

    function egsaco(saco) {

        var y = [];

            y[5] =4.2;    y[6] =4.3;    y[7] =4.4;    y[8] =4.5;
            y[9] =4.6;    y[10] =5;    y[11] =5.1;    y[12] =5.2;
            y[13] =5.3;    y[14] =5.4;    y[15] =5.5;    y[16] =5.6;
            y[17] =6;    y[18] =6.1;    y[19] =6.2;    y[20] =6.3;
            y[21] =6.4;    y[22] =6.5;    y[23] =6.6;    y[24] =7;
            y[25] =7.1;    y[26] =7.2;    y[27] =7.3;    y[28] =7.4;
            y[29] =7.5;    y[30] =7.6;    y[31] =8;    y[32] =8.1;
            y[33] =8.2;    y[34] =8.3;    y[35] =8.4;    y[36] =8.5;
            y[37] =8.6;    y[38] =9;    y[39] =9.1;    y[40] =9.2;
            y[41] =9.3;    y[42] =9.4;    y[43] =9.5;    y[44] =9.6;
            y[45] =9.6;    y[46] =10;    y[47] =10.1;    y[48] =10.2;
            y[49] =10.3;    y[50] =10.4;    y[51] =10.5;    y[52] =11;
            y[53] =11.1;    y[54] =11.2;    y[55] =11.3;    y[56] =11.4;
            y[57] =11.5;    y[58] =11.6;    y[59] =12;    y[60] =12.1;
            y[61] =12.2;
            
            saco = saco.replace(",", ".");
            var prs = parseInt(saco);

            if (prs < 5) {
                return 0;
            }
            else if (prs > 61) {
                return 0;
            }
            else {
                var egsaco = y[prs];
                return egsaco;
            }
    };


    function crearInformeEcoPrimTrim(){
	
	    var sacovitelinotxt = "";
        if ($('#ecografia\\.vitelino\\.txt option:selected').text() == "no se observa"){
            sacovitelinotxt = ".";
        }
        else{
            
	     sacovitelinotxt = " de diametro " + $('#ecografia\\.vitelino\\.mm').val() +" mm.";
        }

        var sacogestacionaltxt = $("#ecografia\\.saco\\.mm").val();

        if (sacogestacionaltxt > 0){
            sacogestacionaltxt = " diametro promedio " + sacogestacionaltxt +" mm.";
        }
        else{
             sacogestacionaltxt = ".";
		}
		
	    //si solo tiena saco
        if ($('#ecografia\\.lcn\\.mm').val() < 1 && $('#ecografia\\.saco\\.mm').val() > 1){
            var InformeString = "<div class='container-fluid'> <h3 class='page-header text-center'>Evaluación ecografía obstétrica de primer trimestre</h3></div><span style='border-top: 1px solid #000;width: 100% !important;display: block;border-bottom: 2px solid #000;padding-top: 2px;margin-bottom:15px;'></span><div class='container-fluid'> <p><strong>Paciente Sra. (Srta.): </strong>:PACIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Edad Materna: </strong> :EDADMATERNA años.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Fecha de Exámen: </strong>:FEXAMEN</p><p><strong> ID Paciente: </strong>:IDPACIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Motivo de exámen: </strong> :MOTIVO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Patología Obstétrica: </strong>:PATOLOGIAOBSTETRICA</p></div><div class='container-fluid'> <p><strong style='color:#045dab;'>ANTECEDENTES</strong> </p><p><strong>FUM: </strong> :FUM <br><strong>EG (UPM): </strong> :EG semanas</p></div><div class='container-fluid'> <p><strong style='color:#045dab;'>DESCRIPCIÓN</strong> </p><p>Cuerpo Uterino :LINEA1 <br>Saco Gestacional :LINEA2 <br>Saco Vitelino :LINEA3 <br>Embrión :LINEA4 <br>Exploración anexial derecha :LINEA5 <br>Exploración anexial izquierda :LINEA6 <br>Exploración de Douglas :LINEA7</p><p></p><p></p><p><strong style='color:#045dab;'>:TITULOBIOMETRIAS</strong> </p><p>:LINEA12 <br>:LINEA13</p><p></p><p></p></div><div class='container-fluid'> <p><strong style='color:#045dab;'>COMENTARIOS Y OBSERVACIONES</strong><span style='color:#045dab;'> (Adicionar comentarios del examinador)</span> </p><p style='max-width: 700px;text-align: justify;'>:COMENTARIO</p></div><div class='container-fluid'> <p class='text-right top40'>Ecografista Dr(a): <strong>:ECOGRAFISTA</strong> </p><span style='border-top: 1px solid #000;width: 100% !important;display: block;'></span> <p>Fecha Informe: :DATEINFORME</p><span style='border-top: 2px solid #000;width: 100% !important;display: block;'></span> <p class='pie-pagina' style='border-bottom:0;'>Referencia saco gestacional Hellman LM, Kobayashi M., Fillisti L. Am J Onstet Gynecol 1968; 103(6):789-800 <br>Referencia Edad menstrual por LCN Hadlock FP, Shan YP, Kanon JD y cols.: Radiology 182:501, 1992. <br>Referencia Diámetro biparital según gráfica de Hadlock y col. 1984 <br>Herramienta informática diseñada por Dr. Rudecindo Lagos S. Médico gineco-obstetra ultrasonografista y Cristopher Castro G. Ingenieria Civil.<br><strong>El software tiene por objetivo favorecer el análisis preliminar de los datos obtenidos en el exámen ecográfico, la interpretación clínica de los mismos,<br>es responsabilidad exclusiva de quien realiza y certifica este documento.</strong> </p></div>";
        }
        else if ($('#ecografia\\.lcn\\.mm').val() < 1 && $('#ecografia\\.saco\\.mm').val() < 1 && sacogestacionaltxt == "."){
            var InformeString = "<div class='container-fluid'> <h3 class='page-header text-center'>Evaluación ecografía obstétrica de primer trimestre</h3></div><span style='border-top: 1px solid #000;width: 100% !important;display: block;border-bottom: 2px solid #000;padding-top: 2px;margin-bottom:15px;'></span><div class='container-fluid'> <p><strong>Paciente Sra. (Srta.): </strong>:PACIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Edad Materna: </strong> :EDADMATERNA años.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Fecha de Exámen: </strong>:FEXAMEN</p><p><strong> ID Paciente: </strong>:IDPACIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Motivo de exámen: </strong> :MOTIVO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Patología Obstétrica: </strong>:PATOLOGIAOBSTETRICA</p></div><div class='container-fluid'> <p><strong style='color:#045dab;'>ANTECEDENTES</strong> </p><p><strong>FUM: </strong> :FUM <br><strong>EG (UPM): </strong> :EG semanas</p></div><div class='container-fluid'> <p><strong style='color:#045dab;'>DESCRIPCIÓN</strong> </p><p>Cuerpo Uterino :LINEA1 <br>Exploración anexial derecha :LINEA5 <br>Exploración anexial izquierda :LINEA6 <br>Exploración de Douglas :LINEA7</p><p></p><p></p><p><strong style='color:#045dab;'>:TITULOBIOMETRIAS</strong> </p><p>:LINEA12 <br>:LINEA13</p><p></p><p></p><p><strong style='color:#045dab;'>HIPÓTESIS DIAGNÓSTICA</strong> </p><p>:LINEA8 :LINEA9 <br>:LINEA10 <br>:LINEA11</p></div><div class='container-fluid'> <p><strong style='color:#045dab;'>COMENTARIOS Y OBSERVACIONES</strong> </p><p style='max-width: 700px;text-align: justify;'>:COMENTARIO</p></div><div class='container-fluid'> <p class='text-right top40'>Ecografista Dr(a): <strong>:ECOGRAFISTA</strong> </p><span style='border-top: 1px solid #000;width: 100% !important;display: block;'></span> <p>Fecha Informe: :DATEINFORME</p><span style='border-top: 2px solid #000;width: 100% !important;display: block;'></span> <p class='pie-pagina' style='border-bottom:0;'>Referencia saco gestacional Hellman LM, Kobayashi M., Fillisti L. Am J Onstet Gynecol 1968; 103(6):789-800 <br>Referencia Edad menstrual por LCN Hadlock FP, Shan YP, Kanon JD y cols.: Radiology 182:501, 1992. <br>Referencia Diámetro biparital según gráfica de Hadlock y col. 1984 <br>Herramienta informática diseñada por Dr. Rudecindo Lagos S. Médico gineco-obstetra ultrasonografista y Cristopher Castro G. Ingenieria Civil.<br><strong>El software tiene por objetivo favorecer el análisis preliminar de los datos obtenidos en el exámen ecográfico, la interpretación clínica de los mismos,<br>es responsabilidad exclusiva de quien realiza y certifica este documento.</strong> </p></div>";
        }
        else
        {
            var InformeString = "<div class='container-fluid'> <h3 class='page-header text-center'>Evaluación ecografía obstétrica de primer trimestre</h3></div><span style='border-top: 1px solid #000;width: 100% !important;display: block;border-bottom: 2px solid #000;padding-top: 2px;margin-bottom:15px;'></span><div class='container-fluid'> <p><strong>Paciente Sra. (Srta.): </strong>:PACIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Edad Materna: </strong> :EDADMATERNA años.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Fecha de Exámen: </strong>:FEXAMEN</p><p><strong> ID Paciente: </strong>:IDPACIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Motivo de exámen: </strong> :MOTIVO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> Patología Obstétrica: </strong>:PATOLOGIAOBSTETRICA</p></div><div class='container-fluid'> <p><strong style='color:#045dab;'>ANTECEDENTES</strong> </p><p><strong>FUM: </strong> :FUM <br><strong>EG (UPM): </strong> :EG semanas</p></div><div class='container-fluid'> <p><strong style='color:#045dab;'>DESCRIPCIÓN</strong> </p><p>Cuerpo Uterino :LINEA1 <br>Saco Gestacional :LINEA2 <br>Saco Vitelino :LINEA3 <br>Embrión :LINEA4 <br>Exploración anexial derecha :LINEA5 <br>Exploración anexial izquierda :LINEA6 <br>Exploración de Douglas :LINEA7</p><p></p><p></p><p><strong style='color:#045dab;'>:TITULOBIOMETRIAS</strong> </p><p>:LINEA12 <br>:LINEA13</p><p></p><p></p><p><strong style='color:#045dab;'>HIPÓTESIS DIAGNÓSTICA</strong> </p><p>:LINEA8 :LINEA9 <br>:LINEA10 <br>:LINEA11</p></div><div class='container-fluid'> <p><strong style='color:#045dab;'>COMENTARIOS Y OBSERVACIONES</strong> </p><p style='max-width: 700px;text-align: justify;'>:COMENTARIO</p></div><div class='container-fluid'> <p class='text-right top40'>Ecografista Dr(a): <strong>:ECOGRAFISTA</strong> </p><span style='border-top: 1px solid #000;width: 100% !important;display: block;'></span> <p>Fecha Informe: :DATEINFORME</p><span style='border-top: 2px solid #000;width: 100% !important;display: block;'></span> <p class='pie-pagina' style='border-bottom:0;'>Referencia saco gestacional Hellman LM, Kobayashi M., Fillisti L. Am J Onstet Gynecol 1968; 103(6):789-800 <br>Referencia Edad menstrual por LCN Hadlock FP, Shan YP, Kanon JD y cols.: Radiology 182:501, 1992. <br>Referencia Diámetro biparital según gráfica de Hadlock y col. 1984 <br>Herramienta informática diseñada por Dr. Rudecindo Lagos S. Médico gineco-obstetra ultrasonografista y Cristopher Castro G. Ingenieria Civil.<br><strong>El software tiene por objetivo favorecer el análisis preliminar de los datos obtenidos en el exámen ecográfico, la interpretación clínica de los mismos,<br>es responsabilidad exclusiva de quien realiza y certifica este documento.</strong> </p></div>";
        }

        var fcftexto = $("#embrion").val();

        if (fcftexto == 'no se observa aun'){
              fcftexto = ".";
        }
        else if (fcftexto == 'act. no evidenciable'){
              fcftexto = ".";
        }
        else{
              if ($("#ecografia\\.fcf").val() == '(+) inicial'){
                  fcftexto = " frecuencia cardiaca fetal " + $("#ecografia\\.fcf option:selected").text();
              }
              else {
                   fcftexto = " frecuencia cardiaca fetal de " + $("#fecografia\\.fcf option:selected").text() +" x min.";
              }
        }

        var douglasinforme = '';
	
        if ($("#ecografia\\.douglas\\.txt").val() == 'ocupado'){
               douglasinforme = $("#ecografia\\.douglas\\.com").val();
        }
        else
        {
               douglasinforme = ".";
        }

        var LINEA1 = $("#ecografia\\.utero\\.uno option:selected").text() + " " + $("#ecografia\\.utero\\.dos option:selected").text() + ", " + $("#ecografia\\.cuerpo option:selected").text() + ".";
        var LINEA2 = $("#ecografia\\.saco\\.txt option:selected").text() + sacogestacionaltxt;
        var LINEA3 = $("#ecografia\\.vitelino\\.txt option:selected").text() + sacovitelinotxt;
        var LINEA4 = $("#ecografia\\.embrion\\.txt option:selected").text() + fcftexto;
        var LINEA5 = $("#ecografia\\.anexo\\.derecho option:selected").text();
        var LINEA6 = $("#ecografia\\.anexo\\.izquierdo option:selected").text();
        var LINEA7 = $("#ecografia\\.douglas\\.txt option:selected").text() + ", " + douglasinforme;
        var LINEA12 = '';
        var LINEA8 = '';
        if ($('#lcn').val() > 0){
	        var LINEA9 = "Utero " + $("#ecografia\\.utero\\.uno option:selected").text() + " " + $("#ecografia\\.utero\\.dos option:selected").text() + ", " + $("#ecografia\\.cuerpo option:selected").text() + ".";
	        var LINEA10 = "Exploración anexial derecha " + $("#ecografia\\.anexo\\.derecho option:selected").text();
            var LINEA11 = "Exploración anexial izquierda " + $("#ecografia\\.anexo\\.izquierdo option:selected").text();
        }
	    else{
	        var LINEA9 = "Gestación Inicial<br>Utero " + $("ecografia\\.utero\\.uno option:selected").text() + " " + $("#ecografia\\.utero\\.dos option:selected").text() + ", " + $("#ecografia\\.cuerpo option:selected").text() + ".";
	        var LINEA10 = "Exploración anexial " + $("#ecografia\\.anexo\\.derecho option:selected").text();
            var LINEA11 = "";
	        LINEA12 = "Embrion no se observa";
	    }
	
        if (sacogestacionaltxt > 0){
            LINEA12 = "Saco gestacional diámetro promedio de " + sacogestacionaltxt +" mm.<br>";
            LINEA8 = "Edad gestacional estimada " + $("#ecografia\\.saco\\.eg").val() + " por saco gestacional.<br>";
                    //eliminar referencias que no son alusivas a saco
                    //comprobar si no hay lcn
            //if ($("#lcn").val()( < 1){
            //    $("#referencia-eco1").html("Referencia saco gestacional Hellman LM, Kobayashi M., Fillisti L. Am J Onstet Gynecol 1968; 103(6):789-800<br><br>Software diseñado por Dr. Rudecindo Lagos S. Médico gineco-obstetra ultrasonografista y Cristopher Castro G. Ingenieria Civil.<br>Este software tiene por objetivo favorecer el análisis preliminar de los datos obtenidos en el exámen ecográfico, la interpretación clínica de los mismos,<br>es responsabilidad exclusiva de quien realiza y certifica este documento.");
            //}
        }

        if ($('#ecografia\\.lcn\\.mm').val() > 0) {
            LINEA12 = "Largo embrionario máximo de " + $("#ecografia\\.lcn\\.mm").val() + " mm.";
            LINEA8 = "Edad gestacional estimada " + $("#ecografia\\.lcn\\.eg").val() + " semanas por LCN.<br>";
        }
	    var LINEA13 = '';
	
        if ($('eco1-dbp').val() > 0){
            LINEA13 = "DBP: " + $("eco1-dbp").val() + "mm";
        }

	    var TITULOBIOMETRIAS = 'BIOMETRÍAS EMBRIO/FETAL';
	
        if ($('#ecografia\\.lcn\\.mm').val() < 1) {
            if ($('#eco1-dbp').val() < 1) {
                if (sacogestacionaltxt < 1){
                    LINEA12 = '';
                    LINEA8 = '';
                    TITULOBIOMETRIAS = '';
                }
            }
        }
	
        var paciente = '<?php echo $this->paciente->paciente_nombre . ' ' . $this->paciente->paciente_apellido; ?>';
        var idpaciente = '<?php echo $this->paciente->paciente_rut; ?>';
        var motivo = $( '#motivo-examen option:selected').text();
        var ecografista = $( '#ecografista option:selected').text();

        var fur = '<?php echo $this->fur->fur_fecha; ?>';
        var fexamen = $( "#ecografia\\.fecha").val();
        var eg = $( "#ecografia\\.eg").val();
	
        InformeString = InformeString.replace(":PACIENTE", paciente);
        InformeString = InformeString.replace(":IDPACIENTE", idpaciente);
        InformeString = InformeString.replace(":MOTIVO", motivo);
        InformeString = InformeString.replace(":ECOGRAFISTA", ecografista);
        
        let now = new Date();
        let day = ("0" + now.getDate()).slice(-2);
        let month = ("0" + (now.getMonth() + 1)).slice(-2);

        var dateInf = (day)+"/"+(month)+"/"+now.getFullYear();
	
        var comentario = $("#ecografia\\.com").val();
        if (typeof comentario !== 'undefined'){
            comentario = comentario.replace(/\r?\n/g, "<br>");
        }
        else{
            comentario='';
        }
	
        var patologiaObstetrica = $( '#patologiaObstetricaUno option:selected').text();
        var edadmaterna = $( "select[name='edad_materna']").val();
        
        InformeString = InformeString.replace(":FUM", fur);
        InformeString = InformeString.replace(":EDADMATERNA", edadmaterna);
        InformeString = InformeString.replace(":FEXAMEN", fexamen);
        InformeString = InformeString.replace(":EG", eg);
        InformeString = InformeString.replace(":LINEA1", LINEA1);
        InformeString = InformeString.replace(":LINEA2", LINEA2);
        InformeString = InformeString.replace(":LINEA3", LINEA3);
        InformeString = InformeString.replace(":LINEA4", LINEA4);
        InformeString = InformeString.replace(":LINEA5", LINEA5);
        InformeString = InformeString.replace(":LINEA6", LINEA6);
        InformeString = InformeString.replace(":LINEA7", LINEA7);
        InformeString = InformeString.replace(":LINEA8", LINEA8);
        InformeString = InformeString.replace(":LINEA9", LINEA9);
        InformeString = InformeString.replace(":LINEA10", LINEA10);
        InformeString = InformeString.replace(":LINEA11", LINEA11);
        InformeString = InformeString.replace(":LINEA12", LINEA12);
        InformeString = InformeString.replace(":LINEA13", LINEA13);
        InformeString = InformeString.replace(":TITULOBIOMETRIAS", TITULOBIOMETRIAS);
        InformeString = InformeString.replace(":COMENTARIO", comentario);
        InformeString = InformeString.replace(":DATEINFORME", dateInf);
        InformeString = InformeString.replace(":PATOLOGIAOBSTETRICA", patologiaObstetrica);
        
        imprInforme(InformeString);
    }

    function imprInforme(muestra) {
        var ficha = muestra;
        var document = '<!DOCTYPE html><html lang="es-CL"><head><meta charset="utf-8"><title>Impresión de Gráficos</title><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"><link rel="stylesheet" href="consulta.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">:ESTILO</head><body><div class="container"><div style="width:35%;text-align:center;" class="membrete">:MEMBRETE</div></div><div class="container" style="margin-top:50px !important;">:DATOS</div>:FUNCION</body></html>';
        var ventimp = window.open(" ", "popimpr");
        var estilo = '<style>@media print{*{margin:0;padding:0;border:0}p,th,td{font-size:11px;line-height:17px;margin-bottom:7px}th,td{margin:0 !important;padding:0 !important}.pie-pagina{font-size:9px}.pie-pagina-dos{font-size:10px}#lineclear{clear:both}h3{font-size:130%;text-align:center}h3::first-letter{font-size:100%}.membrete::first-letter{font-size:14px;}.membrete::first-line{font-size:14px;}.membrete{font-size:10px;}}</style>';
        var funcion = "<script>document.addEventListener('DOMContentLoaded',function(event){var ventimp=window;ventimp.print();ventimp.close();});<\/script>";

        document = document.replace(":DATOS", ficha);
        document = document.replace(":ESTILO", estilo);
        document = document.replace(":FUNCION", funcion);
        document = document.replace(new RegExp('invisible', 'g'), "");
        document = document.replace(":MEMBRETE", "");

        ventimp.document.write(document);
        ventimp.document.close();
    }
</script>