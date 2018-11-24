<div class="container">
    <h3 class="text-right my-2">Evaluación ultrasonográfica</h3>
    <dl class="row">
        <dt class="col-1">Paciente:</dt>
        <dd class="col-11"><?php echo $this->paciente->paciente_nombre . ' ' .$this->paciente->paciente_apellido; ?></dd>
    </dl>
    <div class="row">
        <div class="col-5">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary btn-lg" id="button.paciente.nuevo"><i class="fas fa-plus"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.guardar"><i class="fas fa-save"></i></button>
                <button type="button" class="btn btn-outline-primary btn-lg d-none" id="button.paciente.cancelar"><i class="fas fa-ban"></i></button>
            </div>
        </div>
        <div class="col-7">
            <?php if ($this->fur) { ?>
            <dl class="row">
                <dt class="col-1">FUR:</dt>
                <dd class="col-11"><?php echo $this->fur->fur_fecha; ?></dd>
            </dl>
            <?php } else { ?>
                <div class="alert alert-danger">Paciente sin FUR!</div>
            <?php } ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <img class="card-img-top" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16736a1722b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16736a1722b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22101.5%22%20y%3D%2296.9%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                    <h6 class="card-title">Ecografía Obstétrica 1° Trimestre</h6>
                    <p class="card-text">Determinación de edad gestacional</p>
                    <a href="<?php echo Config::get('URL') . 'ecografia/primertrimestre/' . $this->paciente->paciente_rut; ?>" class="btn btn-primary">Ir a exámen</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16736a1722b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16736a1722b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22101.5%22%20y%3D%2296.9%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                    <h6 class="card-title">Ecografía Obstétrica 2° - 3° Trimestre</h6>
                    <p class="card-text">Valoración del crecimiento intrauterino</p>
                    <a href="#ecoObsSegTrim" class="btn btn-primary">Ir a exámen</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16736a1722b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16736a1722b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22101.5%22%20y%3D%2296.9%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <div class="card-body">
                    <h6 class="card-title">Flujometría Doppler Materna y/o Fetal</h6>
                    <p class="card-text">Complemento a la biometría de crecimiento</p>
                    <a href="#ecoDoppler" class="btn btn-primary">Ir a exámen</a>
                </div>
            </div>
        </div>
    </div>
</div>