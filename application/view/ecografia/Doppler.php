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
                                            <label for="ecografia.dbp.mm">DBP</label>
                                            <input type="text" class="form-control" id="ecografia.dbp.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="dbpDE">Pct.</label>
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
                                            <label for="ecografia.dof.mm">DOF</label>
                                            <input type="text" class="form-control" id="ecografia.dof.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="dofDE">Pct.</label>
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
                                            <label for="ecografia.cc.mm">CC</label>
                                            <input type="text" class="form-control" id="ecografia.cc.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ccDE">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="ccPct">
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
                                            <label for="ecografia.ca.mm">CA</label>
                                            <input type="text" class="form-control" id="ecografia.ca.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="caDE">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="caPct">
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
                                            <label for="ecografia.lf.mm">LF</label>
                                            <input type="text" class="form-control" id="ecografia.lf.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="lfDE">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="lfPct">
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
                                            <label for="ecografia.bvm.mm">BVM</label>
                                            <input type="text" class="form-control" id="ecografia.bvm.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="bvmDE">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="bvmPct">
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
                                            <label for="ecografia.lh.mm">LH</label>
                                            <input type="text" class="form-control" id="ecografia.lh.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="lhDE">Pct.</label>
                                            <div class="progress mt-2 mb-2 mr-sm-2 mb-sm-0" id="lhPct">
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
                                            <label for="ecografia.cerebelo.mm">Diámetro cerebeloso transverso</label>
                                            <input type="text" class="form-control" id="ecografia.cerebelo.mm">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="cerebeloDE">Pct.</label>
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
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="texto" role="tabpanel" aria-labelledby="texto-tab">
                                    <div class="row pt-2">
                                        <div class="form-group col-6">
                                            <label for="ecografia.rut">Presentación</label>
                                            <select class="form-control" id="ecografia.presentacion"><option value="cefalica">Cefálica</option><option value="podalica">Podálica</option><option value="transversa">transversa</option><option value="indiferente">indiferente</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.nombres">Dorso Fetal</label>
                                            <select class="form-control" id="ecografia.dorso.fetal"><option value="anterior">Anterior</option><option value="lateral izquiedo">Lat. Izquierdo</option><option value="posterior">Posterior</option><option value="lateral derecho">Lat. Derecho</option></select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.rut">Actividad cardiaca</label>
                                            <select class="form-control" id="ecografia.actividad.cardiaca"><option value="si">Si</option><option value="no">No</option><select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.nombres">Mov. Fetal</label>
                                            <select class="form-control" id="ecografia.movimiento.fetal"><option value="si">Si</option><option value="no">No</option><select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.nombres">FCF</label>
                                            <select class="form-control" id="ecografia.fcf"><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option><option value="101">101</option><option value="102">102</option><option value="103">103</option><option value="104">104</option><option value="105">105</option><option value="106">106</option><option value="107">107</option><option value="108">108</option><option value="109">109</option><option value="110">110</option><option value="111">111</option><option value="112">112</option><option value="113">113</option><option value="114">114</option><option value="115">115</option><option value="116">116</option><option value="117">117</option><option value="118">118</option><option value="119">119</option><option value="120">120</option><option value="121">121</option><option value="122">122</option><option value="123">123</option><option value="124">124</option><option value="125">125</option><option value="126">126</option><option value="127">127</option><option value="128">128</option><option value="129">129</option><option value="130">130</option><option value="131">131</option><option value="132">132</option><option value="133">133</option><option value="134">134</option><option value="135">135</option><option value="136">136</option><option value="137">137</option><option value="138">138</option><option value="139">139</option><option value="140" selected="">140</option><option value="141">141</option><option value="142">142</option><option value="143">143</option><option value="144">144</option><option value="145">145</option><option value="146">146</option><option value="147">147</option><option value="148">148</option><option value="149">149</option><option value="150">150</option><option value="151">151</option><option value="152">152</option><option value="153">153</option><option value="154">154</option><option value="155">155</option><option value="156">156</option><option value="157">157</option><option value="158">158</option><option value="159">159</option><option value="160">160</option><option value="161">161</option><option value="162">162</option><option value="163">163</option><option value="164">164</option><option value="165">165</option><option value="166">166</option><option value="167">167</option><option value="168">168</option><option value="169">169</option><option value="170">170</option></select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="ecografia.rut">Anatomia fetal</label>
                                            <select type="text" class="form-control" id="ecografia.anatomia.fetal" multiple=""><option value="no evaluada dirigidamente, pero el aspecto morfológico general es normal" selected="selected">No evaluada dirigidamente, pero el aspecto morfológico general es normal</option><option value="Descripcion general detallando distintos segmentos">Descripción general detallando distintos segmentos</option><option value="de aspecto general normal">de aspecto general normal</option><option value="hallazgos de siguientes patologías:">hallazgos ecográficos compatible con:</option></select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="ecografia.nombres"><strong>Comentarios anatomia</strong></label>
                                            <textarea class="form-control" rows="3" id="ecografia.anatomia.com"></textarea>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.rut">Placenta ubicación</label>
                                            <select class="form-control" id="ecografia.placenta.ubicacion"><option value="normal">Normal</option><option value="prev. lateral">previa lateral</option><option value="prev. marginal">previa marginal</option><option value="prev. parcial">previa parcial</option><option value="prev. total">previa total</option></select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.nombres">Placenta inserción</label>
                                            <select class="form-control" id="ecografia.placenta.insercion"><option value="anterior">anterior</option><option value="posterior">posterior</option><option value="fundica">fúndica</option><option value="baja">baja</option><option value="lat. derecha">lateral derecha</option><option value="lat. izquierda">lateral izquierda</option><option value="segmentaria">segmentaria</option></select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="ecografia.rut">Placenta grado (Grannum)</label>
                                            <select class="form-control" id="ecografia.placenta.grado"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.rut">Líquido amniótico</label>
                                            <select class="form-control" id="ecografia.liquido.txt"><option value="normal">Normal</option><option value="disminuido">Disminuido</option><option value="aumentado">Aumentado</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.bvm.copia">BVM</label>
                                            <input type="text" class="form-control" id="ecografia.bvm.mm.copia">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.rut">Cordón umbilical</label>
                                            <select class="form-control" id="ecografia.cordon.umbilical"><option value="inserción central">Inserción central</option><option value="inserción marginal">Inserción marginal</option><option value="inserción velamentosa">Inserción velamentosa</option><option value="inserción no evaluable">Inserción no evaluable</option></select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ecografia.nombres">Número de vasos</label>
                                            <select class="form-control" id="ecografia.numero.vasos"><option value="2">2</option><option selected="selected" value="3">3</option></select>
                                        </div>
                                        <div class="form-group col-12">
                                            <div class="row m-0 p-2 rounded" style="background-color: #6c757d !important;">
                                                <div class="col-6 mt-1">
                                                    <h6><strong class="text-white">Seleccione el tipo de informe ecográfico deseado:</strong></h6>
                                                </div>
                                                <div class="col-6">
                                                    <select id="ecografia.com.select" class="form-control">
                                                        <option value="1" selected="">Informe relativo a crecimiento fetal</option>
                                                        <option value="2">Informe relativo a edad gestacional</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="ecografia.rut">Comentarios</label>
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
            $("#ecografia\\.com").val("Crecimiento (peso) percentil , para gráfica de peso fetal Hadlock* /nLíquido amniótico normal, con bolsillo vertical mayor  mm.");
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
                    let fila = '<tr id="' + value.ecografia_id + '"><td>' + value.ecografia_fecha + '</td><td>' + value.ecografia_eg + '</td><td>' + value.ecografia_PFE + '</td><td>' + value.pac_peso + '<button type="button" data-id="' + value.ecografia_id + '" class="btn btn-outline-warning px-3 eliminar-ecografia float-right"><i class="fas fa-trash"></i></button></td></tr>';
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