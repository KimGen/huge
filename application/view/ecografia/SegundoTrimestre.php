<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="text-right my-3">Ecografía Obstétrica Segundo, Tercer Trimestre</h4>
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
                            <h6>Nueva Ecografía</h6>
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
                                    <label for="ecografia.apellidos">DBP</label>
                                    <input type="text" class="form-control" id="ecografia.dbp.mm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.nacimiento">Pct.</label>
                                    <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="dbpDE">
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
                                    <label for="ecografia.nacionalidad">DOF</label>
                                    <input type="text" class="form-control" id="ecografia.dof.mm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.pais">Pct.</label>
                                    <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="dofDE">
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
                                    <label for="ecografia.nacionalidad">CC</label>
                                    <input type="text" class="form-control" id="ecografia.cc.mm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.pais">Pct.</label>
                                    <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="ccDE">
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
                                    <label for="ecografia.nacionalidad">CA</label>
                                    <input type="text" class="form-control" id="ecografia.ca.mm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.pais">Pct.</label>
                                    <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="caDE">
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
                                    <label for="ecografia.nacionalidad">LF</label>
                                    <input type="text" class="form-control" id="ecografia.lf.mm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.pais">Pct.</label>
                                    <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="lfDE">
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
                                    <label for="ecografia.nacionalidad">BVM</label>
                                    <input type="text" class="form-control" id="ecografia.bvm.mm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.pais">Pct.</label>
                                    <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="bvmDE">
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
                                    <label for="ecografia.nacionalidad">LH</label>
                                    <input type="text" class="form-control" id="ecografia.lh.mm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.pais">Pct.</label>
                                    <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="lhDE">
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
                                    <label for="ecografia.nacionalidad">Diámetro cerebeloso transverso</label>
                                    <input type="text" class="form-control" id="ecografia.cerebelo.mm">
                                </div>
                                <div class="form-group col-6">
                                    <label for="ecografia.pais">Pct.</label>
                                    <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="cerebeloDE">
                                        <div class="progress-bar bg-light text-primary pivote-cero" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                        <div class="progress-bar bg-light text-primary pivote-uno" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-light text-primary pivote-dos" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-light text-primary pivote-centro" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 14%">|</div>
                                        <div class="progress-bar bg-light text-primary pivote-tres" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-light text-primary pivote-cuatro" role="progressbar" style="width: 14%" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-light text-primary pivote-cien" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 15%">|</div>
                                    </div>
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
                                        <th scope="col">PFE</th>
                                        <th scope="col">Pct. Peso</th>
                                        <th scope="col">Pct. CC/CA</th>
                                        <th scope="col">Pct. CA</th>
                                        <th scope="col">Pct. BVM</th>
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
            }
        });

        $("#ecografia\\.ca\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
            }
        });

        $("#ecografia\\.lf\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
            }
        });

        $("#ecografia\\.bvm\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
            }
        });

        $("#ecografia\\.lh\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
            }
        });

        $("#ecografia\\.cerebelo\\.mm").on("change", function(){
            if ($.isNumeric($("#ecografia\\.eg").val())){
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

    function deDBP(eg, dbp) {
        var DBPMenos2DE = [];
        var DBPMas2DE = [];

        DBPMenos2DE[0] = 14;  DBPMenos2DE[1] = 17;
        DBPMenos2DE[2] = 19;  DBPMenos2DE[3] = 25;
        DBPMenos2DE[4] = 29;  DBPMenos2DE[5] = 33;
        DBPMenos2DE[6] = 34;  DBPMenos2DE[7] = 38;
        DBPMenos2DE[8] = 41;  DBPMenos2DE[9] = 43;
        DBPMenos2DE[10] = 46; DBPMenos2DE[11] = 49;
        DBPMenos2DE[12] = 52; DBPMenos2DE[13] = 54;
        DBPMenos2DE[14] = 57; DBPMenos2DE[15] = 61;
        DBPMenos2DE[16] = 63; DBPMenos2DE[17] = 65;
        DBPMenos2DE[18] = 69; DBPMenos2DE[19] = 69;
        DBPMenos2DE[20] = 74; DBPMenos2DE[21] = 74;
        DBPMenos2DE[22] = 77; DBPMenos2DE[23] = 78;
        DBPMenos2DE[24] = 78; DBPMenos2DE[25] = 81;
        DBPMenos2DE[26] = 85; DBPMenos2DE[27] = 88;

        DBPMas2DE[0] = 25;    DBPMas2DE[1] = 29;
        DBPMas2DE[2] = 33;    DBPMas2DE[3] = 35;
        DBPMas2DE[4] = 41;    DBPMas2DE[5] = 42;
        DBPMas2DE[6] = 46;    DBPMas2DE[7] = 50;
        DBPMas2DE[8] = 52;    DBPMas2DE[9] = 56;
        DBPMas2DE[10] = 59;   DBPMas2DE[11] = 63;
        DBPMas2DE[12] = 66;   DBPMas2DE[13] = 70;
        DBPMas2DE[14] = 71;   DBPMas2DE[15] = 75;
        DBPMas2DE[16] = 77;   DBPMas2DE[17] = 81;
        DBPMas2DE[18] = 83;   DBPMas2DE[19] = 87;
        DBPMas2DE[20] = 88;   DBPMas2DE[21] = 91;
        DBPMas2DE[22] = 94;   DBPMas2DE[23] = 95;
        DBPMas2DE[24] = 97;   DBPMas2DE[25] = 99;
        DBPMas2DE[26] = 97;   DBPMas2DE[27] = 106;

        dbp = dbp.toString();
        dbp = dbp.replace(",", ".");
        dbp = parseFloat(dbp);

        if (eg < 12 || eg > 40) {
            return '';
        } else {
            eg = eg - 12;
            eg = parseInt(eg);

            var uno = DBPMas2DE[eg] - DBPMenos2DE[eg];
            var dos = dbp - DBPMenos2DE[eg];
            var resultado = (parseInt(95 / (uno) * (dos) + 3));
            ajustarProgreso(resultado, "dbpDE");
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

    function ajustarProgreso(valor, objeto) {
        $("#" + objeto + " > .pivote-uno").html("");
        $("#" + objeto + " > .pivote-dos").html("");
        $("#" + objeto + " > .pivote-cero").html("|");
        $("#" + objeto + " > .pivote-centro").html("|");
        $("#" + objeto + " > .pivote-cien").html("|");
        $("#" + objeto + " > .pivote-tres").html("");
        $("#" + objeto + " > .pivote-cuatro").html("");

        if (valor <= 6) {
            $("#" + objeto + " > .pivote-cero").html("<strong style='color:red;'>X</strong>");
        } else if (valor <= 10) {
            $("#" + objeto + " > .pivote-uno").css("width", "10%");
            $("#" + objeto + " > .pivote-uno").html("<strong style='color:red;'>X</strong>");
            $("#" + objeto + " > .pivote-dos").css("width", "25%");
        } else if (valor <= 20) {
            $("#" + objeto + " > .pivote-uno").css("width", "17.5%");
            $("#" + objeto + " > .pivote-uno").html("<strong style='color:red;'>X</strong>");
            $("#" + objeto + " > .pivote-dos").css("width", "17.5%");
        } else if (valor <= 30) {
            $("#" + objeto + " > .pivote-uno").css("width", "20%");
            $("#" + objeto + " > .pivote-dos").css("width", "15%");
            $("#" + objeto + " > .pivote-dos").html("<strong style='color:red;'>X</strong>");
        } else if (valor <= 40) {
            $("#" + objeto + " > .pivote-uno").css("width", "25%");
            $("#" + objeto + " > .pivote-dos").css("width", "10%");
            $("#" + objeto + " > .pivote-dos").html("<strong style='color:red;'>X</strong>");
        } else if (valor <= 50) {
            $("#" + objeto + " > .pivote-centro").html("<strong style='color:red;'>X</strong>");
        } else if (valor <= 60) {
            $("#" + objeto + " > .pivote-tres").css("width", "10%");
            $("#" + objeto + " > .pivote-tres").html("<strong style='color:red;'>X</strong>");
            $("#" + objeto + " > .pivote-cuatro").css("width", "25%");
        } else if (valor <= 70) {
            $("#" + objeto + " > .pivote-tres").css("width", "17.5%");
            $("#" + objeto + " > .pivote-tres").html("<strong style='color:red;'>X</strong>");
            $("#" + objeto + " > .pivote-cuatro").css("width", "17.5%");
        } else if (valor <= 80) {
            $("#" + objeto + " > .pivote-tres").css("width", "20%");
            $("#" + objeto + " > .pivote-cuatro").css("width", "15%");
            $("#" + objeto + " > .pivote-cuatro").html("<strong style='color:red;'>X</strong>");
        } else if (valor <= 90) {
            $("#" + objeto + " > .pivote-tres").css("width", "25%");
            $("#" + objeto + " > .pivote-cuatro").css("width", "10%");
            $("#" + objeto + " > .pivote-cuatro").html("<strong style='color:red;'>X</strong>");
        } else {
            $("#" + objeto + " > .pivote-cien").html("<strong style='color:red;'>X</strong>");
        }
    }

</script>