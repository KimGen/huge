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
    };

    function pctcc(eg, cc) {

        var pct3 = [],
            pct97 = [];

        pct3[0] = 64;   pct3[1] = 74;
        pct3[2] = 88;   pct3[3] = 100;
        pct3[4] = 113;  pct3[5] = 126;
        pct3[6] = 137;  pct3[7] = 149;
        pct3[8] = 161;  pct3[9] = 172;
        pct3[10] = 183; pct3[11] = 194;
        pct3[12] = 204; pct3[13] = 214;
        pct3[14] = 224; pct3[15] = 233;
        pct3[16] = 242; pct3[17] = 250;
        pct3[18] = 258; pct3[19] = 267;
        pct3[20] = 274; pct3[21] = 280;
        pct3[22] = 287; pct3[23] = 293;
        pct3[24] = 299; pct3[25] = 303;
        pct3[26] = 308; pct3[27] = 311;
        pct3[28] = 315;

        pct97[0] = 81;  pct97[1] = 94;
        pct97[2] = 106; pct97[3] = 120;
        pct97[4] = 135; pct97[5] = 150;
        pct97[6] = 165; pct97[7] = 179;
        pct97[8] = 193; pct97[9] = 206;
        pct97[10] = 219; pct97[11] = 232;
        pct97[12] = 243; pct97[13] = 256;
        pct97[14] = 268; pct97[15] = 279;
        pct97[16] = 290; pct97[17] = 300;
        pct97[18] = 310; pct97[19] = 319;
        pct97[20] = 328; pct97[21] = 336;
        pct97[22] = 343; pct97[23] = 351;
        pct97[24] = 358; pct97[25] = 363;
        pct97[26] = 368; pct97[27] = 373;
        pct97[28] = 377;

        eg = Math.trunc(eg);
        cc = parseInt(cc);

        if (eg < 12 || eg > 40) {

        } else {
            eg = eg - 12;
            eg = parseInt(eg);
            var uno = pct97[eg] - pct3[eg];
            var dos = cc - pct3[eg];
            ajustarProgreso(parseInt(95 / (uno) * (dos) + 3), "ccPct");
        }
    };

    function pctca(eg, ca) {

        var pct3 = [],
            pct97 = [];

        pct3[0] = 42;    pct3[1] = 52;
        pct3[2] = 64;    pct3[3] = 75;
        pct3[4] = 86;    pct3[5] = 97;
        pct3[6] = 109;   pct3[7] = 119;
        pct3[8] = 131;   pct3[9] = 141;
        pct3[10] = 151;  pct3[11] = 161;
        pct3[12] = 171;  pct3[13] = 181;
        pct3[14] = 191;  pct3[15] = 200;
        pct3[16] = 209;  pct3[17] = 218;
        pct3[18] = 227;  pct3[19] = 236;
        pct3[20] = 245;  pct3[21] = 253;
        pct3[22] = 261;  pct3[23] = 269;
        pct3[24] = 277;  pct3[25] = 285;
        pct3[26] = 292;  pct3[27] = 299;
        pct3[28] = 307;

        pct97[0] = 71;   pct97[1] = 79;
        pct97[2] = 92;   pct97[3] = 102;
        pct97[4] = 113;  pct97[5] = 127;
        pct97[6] = 141;  pct97[7] = 155;
        pct97[8] = 170;  pct97[9] = 183;
        pct97[10] = 192; pct97[11] = 209;
        pct97[12] = 223; pct97[13] = 235;
        pct97[14] = 248; pct97[15] = 260;
        pct97[16] = 271; pct97[17] = 284;
        pct97[18] = 295; pct97[19] = 306;
        pct97[20] = 318; pct97[21] = 329;
        pct97[22] = 339; pct97[23] = 349;
        pct97[24] = 359; pct97[25] = 370;
        pct97[26] = 380; pct97[27] = 389;
        pct97[28] = 399;

        eg = Math.trunc(eg);
        ca = parseInt(ca);

        if (eg < 12 || eg > 40) {

        } else {
            eg = eg - 12;
            eg = parseInt(eg);
            var uno = pct97[eg] - pct3[eg];
            var dos = ca - pct3[eg];
            var resultado = parseInt(95 / (uno) * (dos) + 3);
            ajustarProgreso(resultado, "caPct");
        }
    };

    function pctlf(eg, lf) {

        var pct3 = [],
        pct97 = [];

        pct3[0] = 7;    pct3[1] = 9;
        pct3[2] = 12;   pct3[3] = 15;
        pct3[4] = 17;   pct3[5] = 21;
        pct3[6] = 23;   pct3[7] = 26;
        pct3[8] = 28;   pct3[9] = 30;
        pct3[10] = 33;  pct3[11] = 35;
        pct3[12] = 38;  pct3[13] = 40;
        pct3[14] = 42;  pct3[15] = 44;
        pct3[16] = 46;  pct3[17] = 48;
        pct3[18] = 50;  pct3[19] = 52;        pct3[20] = 53;
        pct3[21] = 55;  pct3[22] = 57;
        pct3[23] = 59;  pct3[24] = 60;
        pct3[25] = 62;  pct3[26] = 64;
        pct3[27] = 65;  pct3[28] = 66;
        pct97[0] = 12;  pct97[1] = 14;
        pct97[2] = 17;  pct97[3] = 20;
        pct97[4] = 23;  pct97[5] = 27;
        pct97[6] = 31;  pct97[7] = 34;
        pct97[8] = 38;  pct97[9] = 40;
        pct97[10] = 43; pct97[11] = 47;
        pct97[12] = 50; pct97[13] = 52;
        pct97[14] = 56; pct97[15] = 58;
        pct97[16] = 62; pct97[17] = 64;
        pct97[18] = 66; pct97[19] = 68;
        pct97[20] = 71; pct97[21] = 73;
        pct97[22] = 75; pct97[23] = 78;
        pct97[24] = 80; pct97[25] = 82;
        pct97[26] = 84; pct97[27] = 86;
        pct97[28] = 88;

        eg = Math.trunc(parseFloat(eg));
        lf = parseInt(lf);

        if (eg < 12|| eg > 40) {

        } else {
            eg = eg - 12;
            eg = parseInt(eg);
            var uno = pct97[eg] - pct3[eg];
            var dos = lf - pct3[eg];
            var resultado = parseInt(95 / (uno) * (dos) + 3);
            ajustarProgreso(resultado, "lfPct");
        }
    }

    function pctbvm(eg, bvm) {

        var pct5 = [],
        pct95 = [];

        pct5[0] = 23;   pct5[1] = 25;
        pct5[2] = 27;   pct5[3] = 28;
        pct5[4] = 29;   pct5[5] = 29;
        pct5[6] = 30;   pct5[7] = 30;
        pct5[8] = 30;   pct5[9] = 30;
        pct5[10] = 30;  pct5[11] = 30;
        pct5[12] = 30;  pct5[13] = 29;
        pct5[14] = 29;  pct5[15] = 29;
        pct5[16] = 29;  pct5[17] = 29;
        pct5[18] = 28;  pct5[19] = 28;
        pct5[20] = 27;  pct5[21] = 26;
        pct5[22] = 24;  pct5[23] = 23;
        pct5[24] = 21;

        pct95[0] = 59;  pct95[1] = 62;
        pct95[2] = 64;  pct95[3] = 66;
        pct95[4] = 67;  pct95[5] = 68;
        pct95[6] = 68;  pct95[7] = 68;
        pct95[8] = 68;  pct95[9] = 68;
        pct95[10] = 68; pct95[11] = 69;
        pct95[12] = 69; pct95[13] = 69;
        pct95[14] = 69; pct95[15] = 70;
        pct95[16] = 71; pct95[17] = 72;
        pct95[18] = 72; pct95[19] = 72;
        pct95[20] = 71; pct95[21] = 70;
        pct95[22] = 68; pct95[23] = 66;
        pct95[24] = 62;

        eg = parseFloat(eg);
        bvm = parseInt(bvm);

        if (eg < 16 || eg > 40) {

        } else {
        eg = eg - 16;
        eg = parseInt(eg);

        var uno = pct95[eg] - pct5[eg];
        var dos = bvm - pct5[eg];
        var resultado = parseInt(90 / (uno) * (dos) + 5);
        ajustarProgreso(resultado, "bvmPct");
        }
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

    function pctlh(eg, lh) {

        var pct05 = [];
        var pct95 = [];

        pct05[12] = 4.8;  pct95[12] = 12.3;
        pct05[13] = 7.6;  pct95[13] = 15.1;
        pct05[14] = 10.3; pct95[14] = 17.9;
        pct05[15] = 13.1; pct95[15] = 20.7;
        pct05[16] = 15.8; pct95[16] = 23.5;
        pct05[17] = 18.5; pct95[17] = 26.3;
        pct05[18] = 21.2; pct95[18] = 29.1;
        pct05[19] = 23.8; pct95[19] = 31.6;
        pct05[20] = 26.3; pct95[20] = 34.2;
        pct05[21] = 28.8; pct95[21] = 36.7;
        pct05[22] = 31.2; pct95[22] = 39.2;
        pct05[23] = 33.5; pct95[23] = 41.6;
        pct05[24] = 35.7; pct95[24] = 43.9;
        pct05[25] = 37.9; pct95[25] = 46.1;
        pct05[26] = 39.9; pct95[26] = 48.1;
        pct05[27] = 41.9; pct95[27] = 50.1;
        pct05[28] = 43.7; pct95[28] = 52.1;
        pct05[29] = 45.5; pct95[29] = 53.9;
        pct05[30] = 47.2; pct95[30] = 55.6;
        pct05[31] = 48.9; pct95[31] = 57.3;
        pct05[32] = 50.4; pct95[32] = 58.9;
        pct05[33] = 52.1; pct95[33] = 60.5;
        pct05[34] = 53.4; pct95[34] = 62.1;
        pct05[35] = 54.8; pct95[35] = 63.5;
        pct05[36] = 56.2; pct95[36] = 64.9;
        pct05[37] = 57.6; pct95[37] = 66.4;
        pct05[38] = 59.8; pct95[38] = 67.8;
        pct05[39] = 60.4; pct95[39] = 69.3;
        pct05[40] = 61.9; pct95[40] = 70.8;

        eg = Math.trunc(eg);
        var lh = parseInt(lh);

        if (eg < 12 || eg > 40) {

        } else {
            eg = parseInt(eg);
            var uno = pct95[eg] - pct05[eg];
            var dos = lh - pct05[eg];
            var resultado = (parseInt(95 / (uno) * (dos) + 5));
            ajustarProgreso(resultado, "lhPct");
        }
    }

    function pctcb(eg, cb) {

        //cerebelo segun Hill
        var pct2ds = [];
        var pctmedia = [];
        var pct2dsmas = [];

        pct2ds[0] = 12;        pct2ds[1] = 14;
        pct2ds[2] = 15;        pct2ds[3] = 16;
        pct2ds[4] = 17;        pct2ds[5] = 18;
        pct2ds[6] = 19;        pct2ds[7] = 20;
        pct2ds[8] = 21;        pct2ds[9] = 22;
        pct2ds[10] = 24;        pct2ds[11] = 26;
        pct2ds[12] = 27;        pct2ds[13] = 29;
        pct2ds[14] = 30;        pct2ds[15] = 31;
        pct2ds[16] = 33;        pct2ds[17] = 36;
        pct2ds[18] = 37;        pct2ds[19] = 38;
        pct2ds[20] = 40;        pct2ds[21] = 40;
        pct2ds[22] = 40;        pct2ds[23] = 41;
        pct2ds[24] = 42;        pct2ds[25] = 44;

        pctmedia[0] = 15;        pctmedia[1] = 16;
        pctmedia[2] = 17;        pctmedia[3] = 18;
        pctmedia[4] = 20;        pctmedia[5] = 20;
        pctmedia[6] = 22;        pctmedia[7] = 23;
        pctmedia[8] = 24;        pctmedia[9] = 26;
        pctmedia[10] = 28;        pctmedia[11] = 30;
        pctmedia[12] = 31;        pctmedia[13] = 33;
        pctmedia[14] = 34;        pctmedia[15] = 37;
        pctmedia[16] = 39;        pctmedia[17] = 41;
        pctmedia[18] = 43;        pctmedia[19] = 46;
        pctmedia[20] = 47;        pctmedia[21] = 49;
        pctmedia[22] = 51;        pctmedia[23] = 51;
        pctmedia[24] = 52;        pctmedia[25] = 52

        pct2dsmas[0] = 18;        pct2dsmas[1] = 18;
        pct2dsmas[2] = 19;        pct2dsmas[3] = 20;
        pct2dsmas[4] = 22;        pct2dsmas[5] = 23;
        pct2dsmas[6] = 25;        pct2dsmas[7] = 26;
        pct2dsmas[8] = 27;        pct2dsmas[9] = 30;
        pct2dsmas[10] = 32;        pct2dsmas[11] = 34;
        pct2dsmas[12] = 34;        pct2dsmas[13] = 37;
        pct2dsmas[14] = 38;        pct2dsmas[15] = 41;
        pct2dsmas[16] = 43;        pct2dsmas[17] = 46;
        pct2dsmas[18] = 48;        pct2dsmas[19] = 53;
        pct2dsmas[20] = 56;        pct2dsmas[21] = 58;
        pct2dsmas[22] = 60;        pct2dsmas[23] = 62;
        pct2dsmas[24] = 62;        pct2dsmas[25] = 62;

        eg = Math.trunc(eg);
        cb = parseInt(cb);

        if (eg < 15 || eg > 40) {

        } else {
            eg = eg - 15;
            eg = parseInt(eg);
            var uno = pct2dsmas[eg] - pct2ds[eg];
            var dos = cb - pct2ds[eg];
            var resultado = parseInt(95 / (uno) * (dos));
            ajustarProgreso(resultado, "cerebeloDE");
        }
    }
</script>