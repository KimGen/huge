<?php

class EcografiaController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
        Auth::checkAuthentication();
    }

    /**
     * Handles what happens when user moves to URL/index/index - or - as this is the default controller, also
     * when user moves to /index or enter your application at base level
     */
    public function index($paciente = "")
    {
        if ($paciente == ""){
            Session::add('feedback_negative', 'Debe seleccionar un paciente');
            Redirect::to("pacientes/");
        }
        else{
            $elPaciente = PacientesModel::getPaciente($paciente);
            $fur = FurModel::getFur($paciente);
            $this->View->render('ecografia/index', array(
                'paciente' => $elPaciente,
                'fur' => $fur,
                'eg' => self::calcularEg($fur->fur_fecha)
            ));
        }
    }

    public function primertrimestre($paciente = "")
    {
        if ($paciente == ""){
            Session::add('feedback_negative', 'Debe seleccionar un paciente');
            Redirect::to("pacientes/");
        }
        else{
            $elPaciente = PacientesModel::getPaciente($paciente);
            $fur = FurModel::getFur($paciente);
            $this->View->render('ecografia/PrimerTrimestre', array(
                'paciente' => $elPaciente,
                'fur' => $fur,
                'eg' => self::calcularEg($fur->fur_fecha)
            ));
        }
    }

    public function segundotrimestre($paciente = "")
    {
        if ($paciente == ""){
            Session::add('feedback_negative', 'Debe seleccionar un paciente');
            Redirect::to("pacientes/");
        }
        else{
            $elPaciente = PacientesModel::getPaciente($paciente);
            $fur = FurModel::getFur($paciente);
            $this->View->render('ecografia/SegundoTrimestre', array(
                'paciente' => $elPaciente,
                'fur' => $fur,
                'eg' => self::calcularEg($fur->fur_fecha)
            ));
        }
    }

    public function doppler($paciente = "")
    {
        if ($paciente == ""){
            Session::add('feedback_negative', 'Debe seleccionar un paciente');
            Redirect::to("pacientes/");
        }
        else{
            $elPaciente = PacientesModel::getPaciente($paciente);
            $fur = FurModel::getFur($paciente);
            $this->View->render('ecografia/Doppler', array(
                'paciente' => $elPaciente,
                'fur' => $fur,
                'eg' => self::calcularEg($fur->fur_fecha)
            ));
        }
    }

    public function api(){
        $accion = Request::post('accion');
        $resultado = "";

        switch ($accion) {
            case "nacionalidad":
                $resultado = NacionalidadModel::getAllNacionalidad();
                break;
            case "furNew":
                $resultado = FurModel::createFur(Request::post('paciente_rut'),Request::post('fur_fecha'));
                break;
            case "furUpdate":
                $resultado = FurModel::updateFur(Request::post('paciente_rut'),Request::post('fur_fecha'));
                break;
            case "primertrimestre":
                $resultado = EcografiaModel::getAllEcografias('primertrimestre');
                break;
            case "primertrimestreNew":
                $resultado = EcografiaModel::createEcografia('primertrimestre', Request::post('data'));
                break;
            case "primertrimestreUpdate":
                $resultado = EcografiaModel::updateEcografia('primertrimestre', Request::post('data'));
                break;
            case "primertrimestreDelete":
                $resultado = EcografiaModel::deleteEcografia('primertrimestre', Request::post('ecografia_id'));
                break;
        }

        return $this->View->renderJSON($resultado);
    }

    private function calcularEg($FUR){
        $date=date_create($FUR);
        $hoy = getdate();
        $d = $hoy['mday'];
        $m = $hoy['mon'];
        $y = $hoy['year'];

        $diff = $date->diff(date_create($y . "-" .$m . "-" . $d));
        $EG = ($diff->days) / 7;
        $truncar = 10**0;
        $EG = intval($EG * $truncar) / $truncar;
        return $EG = $EG . "." .(($diff->days) -($EG*7));
    }
}