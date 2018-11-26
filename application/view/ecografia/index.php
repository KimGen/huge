<div class="container">
    <h3 class="text-right my-2">Evaluación ultrasonográfica</h3>
    <dl class="row">
        <dt class="col-1">Paciente:</dt>
        <dd class="col-11"><?php echo $this->paciente->paciente_nombre . ' ' .$this->paciente->paciente_apellido; ?></dd>
    </dl>
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
            <?php if ($this->fur) { ?>
                <dt class="col-2">FUR:</dt>
                <dd class="col-4"><?php echo $this->fur->fur_fecha; ?></dd>
                <dt class="col-2">FPP:</dt>
                <dd class="col-4"><?php echo $this->fur->fpp_fecha; ?></dd>
            <?php } else { ?>
                <div class="col-5">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary btn-lg" id="button.fur.nuevo"><i class="fas fa-plus"></i></button>
                        <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.fur.guardar"><i class="fas fa-save"></i></button>
                        <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.fur.cancelar"><i class="fas fa-ban"></i></button>
                    </div>
                </div>
                <div class="col-7">
                    <div class="alert alert-danger">Paciente sin FUR!</div>
                </div>
                <div class="col-12 d-none" id="interface.fur">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="user.fecha">Fecha de Ultima Mestruacion</label>
                            <input type="date" class="form-control" id="fur.fecha">
                        </div>
                        <div class="form-group col-6">
                            <label for="user.eg">EG</label>
                            <input type="text" class="form-control" id="fur.eg">
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <img class="card-img-top" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16736a1722b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16736a1722b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22101.5%22%20y%3D%2296.9%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                    <h6 class="card-title">Ecografía Obstétrica 1° Trimestre</h6>
                    <p class="card-text">Determinación de edad gestacional</p>
                    <?php if ($this->fur) { ?>
                        <a href="<?php echo Config::get('URL') . 'ecografia/primertrimestre/' . $this->paciente->paciente_rut; ?>" class="btn btn-primary">Ir a exámen</a>
                    <?php } else { ?>
                        <a href="#" class="btn btn-danger">Ingrese una FUR</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16736a1722b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16736a1722b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22101.5%22%20y%3D%2296.9%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                    <h6 class="card-title">Ecografía Obstétrica 2° - 3° Trimestre</h6>
                    <p class="card-text">Valoración del crecimiento intrauterino</p>
                    <?php if ($this->fur) { ?>
                        <a href="#ecoObsSegTrim" class="btn btn-primary">Ir a exámen</a>
                    <?php } else { ?>
                        <a href="#" class="btn btn-danger">Ingrese una FUR</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16736a1722b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16736a1722b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22101.5%22%20y%3D%2296.9%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                    <h6 class="card-title">Flujometría Doppler Materna y/o Fetal</h6>
                    <p class="card-text">Complemento a la biometría de crecimiento</p>
                    <?php if ($this->fur) { ?>
                        <a href="#ecoDoppler" class="btn btn-primary">Ir a exámen</a>
                    <?php } else { ?>
                        <a href="#" class="btn btn-danger">Ingrese una FUR</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        <?php if ($this->fur) { ?>
        <?php } else { ?>
        $("#button\\.fur\\.nuevo").on("click", function(){
            $("#button\\.fur\\.nuevo").addClass("d-none");
            $("#button\\.fur\\.guardar").removeClass("d-none");
            $("#button\\.fur\\.cancelar").removeClass("d-none");
            $("#interface\\.fur").removeClass("d-none");
            $("#fur\\.fecha").val("");
            $("#fur\\.eg").val("");
        });
        $("#button\\.fur\\.guardar").on("click", function(){
            $("#button\\.fur\\.nuevo").removeClass("d-none");
            $("#button\\.fur\\.guardar").addClass("d-none");
            $("#button\\.fur\\.cancelar").addClass("d-none");
            $("#interface\\.fur").addClass("d-none");

            let fur = {
                accion: "furNew",
                paciente_rut: '<?php echo $this->paciente->paciente_rut; ?>',
                fur_fecha: $("#fur\\.fecha").val()
            }

            $.post( "https://crecimientofetal.cl/ecografia/api", fur).done(function( data ) {
                window.location.href = 'https://crecimientofetal.cl/ecografia/index/<?php echo $this->paciente->paciente_rut; ?>';
            });
        });
        $("#button\\.fur\\.cancelar").on("click", function(){
            $("#button\\.fur\\.nuevo").removeClass("d-none");
            $("#button\\.fur\\.guardar").addClass("d-none");
            $("#button\\.fur\\.cancelar").addClass("d-none");
            $("#interface\\.fur").addClass("d-none");
            $("#fur\\.fecha").val("");
            $("#fur\\.eg").val("");
        });
        <?php } ?>
    });
</script>