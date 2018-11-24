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
    </div>
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
            <?php if ($this->paciente) { ?>
                <dt class="col-2">Nombre:</dt>
                <dd class="col-4"><?php echo $this->paciente->paciente_nombre . ' ' .$this->paciente->paciente_apellido; ?></dd>
            <?php } ?>
            <?php if ($this->fur) { ?>
                <dt class="col-2">FUR:</dt>
                <dd class="col-4"><?php echo $this->fur->fur_fecha; ?></dd>
            <?php } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-none" id="interface.ecografia">
                            <h6>Nueva Ecografía</h6>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="ecografia.rut">Fecha de exámen</label>
                                    <input type="date" class="form-control" id="ecografia.fecha">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.nombres">EG al exámen</label>
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
        $("#button\\.ecografia\\.nuevo").on("click", function(){
            $("#interface\\.ecografia").removeClass("d-none");
            $("#button\\.ecografia\\.nuevo").addClass("d-none");
            $("#button\\.ecografia\\.guardar").removeClass("d-none");
            $("#button\\.ecografia\\.cancelar").removeClass("d-none");
            $("#ecografia\\.fecha").val("");
            $("#ecografia\\.eg").val("");
            $("#ecografia\\.lcn\\.mm").val("");
            $("#ecografia\\.lcn\\.eg").val("");
            $("#ecografia\\.saco\\.mm").val("");
            $("#ecografia\\.saco\\.eg").val("");
            $("#ecografia\\.utero\\.uno").val("");
            $("#ecografia\\.utero\\.dos").val("");
            $("#ecografia\\.cuerpo").val("");
            $("#ecografia\\.saco\\.txt").val("");
            $("#ecografia\\.saco\\.mm\\.copia").val("");
            $("#ecografia\\.vitelino\\.txt").val("");
            $("#ecografia\\.vitelino\\.mm").val("");
            $("#ecografia\\.embrion\\.txt").val("");
            $("#ecografia\\.lcn\\.mm\\.copia").val("");
            $("#ecografia\\.fcf").val("");
            $("#ecografia\\.anexo\\.derecho").val("");
            $("#ecografia\\.anexo\\.izquierdo").val("");
            $("#ecografia\\.duglas\\.txt").val("");
            $("#ecografia\\.douglas\\.com").val("");
            $("#ecografia\\.com").val("");
        });

        $("#button\\.ecografia\\.guardar").on("click", function(){
            $("#interface\\.ecografia").addClass("d-none");
            $("#button\\.ecografia\\.nuevo").removeClass("d-none");
            $("#button\\.ecografia\\.guardar").addClass("d-none");
            $("#button\\.ecografia\\.cancelar").addClass("d-none");

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

            $.post( "https://crecimientofetal.cl/ecografia/api", encap).done(function( data ) {
                $("#ecografia\\.fecha").val("");
                $("#ecografia\\.eg").val("");
                $("#ecografia\\.lcn\\.mm").val("");
                $("#ecografia\\.lcn\\.eg").val("");
                $("#ecografia\\.saco\\.mm").val("");
                $("#ecografia\\.saco\\.eg").val("");
                $("#ecografia\\.utero\\.uno").val("");
                $("#ecografia\\.utero\\.dos").val("");
                $("#ecografia\\.cuerpo").val("");
                $("#ecografia\\.saco\\.txt").val("");
                $("#ecografia\\.saco\\.mm\\.copia").val("");
                $("#ecografia\\.vitelino\\.txt").val("");
                $("#ecografia\\.vitelino\\.mm").val("");
                $("#ecografia\\.embrion\\.txt").val("");
                $("#ecografia\\.lcn\\.mm\\.copia").val("");
                $("#ecografia\\.fcf").val("");
                $("#ecografia\\.anexo\\.derecho").val("");
                $("#ecografia\\.anexo\\.izquierdo").val("");
                $("#ecografia\\.duglas\\.txt").val("");
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
            $("#ecografia\\.fecha").val("");
            $("#ecografia\\.eg").val("");
            $("#ecografia\\.lcn\\.mm").val("");
            $("#ecografia\\.lcn\\.eg").val("");
            $("#ecografia\\.saco\\.mm").val("");
            $("#ecografia\\.saco\\.eg").val("");
            $("#ecografia\\.utero\\.uno").val("");
            $("#ecografia\\.utero\\.dos").val("");
            $("#ecografia\\.cuerpo").val("");
            $("#ecografia\\.saco\\.txt").val("");
            $("#ecografia\\.saco\\.mm\\.copia").val("");
            $("#ecografia\\.vitelino\\.txt").val("");
            $("#ecografia\\.vitelino\\.mm").val("");
            $("#ecografia\\.embrion\\.txt").val("");
            $("#ecografia\\.lcn\\.mm\\.copia").val("");
            $("#ecografia\\.fcf").val("");
            $("#ecografia\\.anexo\\.derecho").val("");
            $("#ecografia\\.anexo\\.izquierdo").val("");
            $("#ecografia\\.duglas\\.txt").val("");
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
        //copias
        $("#ecografia\\.saco\\.mm").on("change", function(){
            $("#ecografia\\.saco\\.mm\\.copia").val($(this).val());
        });
        $("#ecografia\\.lcn\\.mm").on("change", function(){
            $("#ecografia\\.lcn\\.mm\\.copia").val($(this).val());
        });
    });

    function makeTable(){

        let encap = {
            accion: "primertrimestre",
        }

        $.post( "https://crecimientofetal.cl/ecografia/api", encap).done(function( data ) {
            $("#table\\.ecografia").empty();
            if (Object.keys(data).length > 0) {
                $.each(data, function(i,value){
                    let fila = '<tr id="' + value.ecografia_id + '"><td>' + value.ecografia_fecha + '</td><td>' + value.ecografia_eg + '</td><td>' + value.ecografia_lcn_mm + '</td><td>' + value.ecografia_saco_mm + '<button type="button" data-id="' + value.ecografia_id + '" class="btn btn-outline-warning px-3 eliminar-ecografia float-right"><i class="fas fa-trash"></i></button></td></tr>';
                    $("#table\\.ecografia").append(fila);
                });

                $(".eliminar-ecografia").on("click", function(){
                    let ecografia_id = $(this).data("id");

                    $("#dialog\\.title").html("Eliminar ecografia");
                    $("#dialog\\.body").html('<p class="text-center text-danger">Está seguro de eliminar la ecografía?</p>');
                    $("#dialog\\.delete").remove();
                    $("#dialog\\.footer").append('<button type="button" class="btn btn-danger" id="dialog.delete" data-id="' + ecografia_id + '">Eliminar</button>');
                    $("#dialog\\.delete").on("click", function(){
                        let region = {accion: "primertrimestreDelete", ecografia_id: $(this).data("id")}

                        $.post( "https://crecimientofetal.cl/ecografia/api", region).done(function( data ) {
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
</script>