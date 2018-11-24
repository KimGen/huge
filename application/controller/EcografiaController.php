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
                'fur' => $fur
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
            $paciente = PacientesModel::getPaciente($paciente);
            $this->View->render('ecografia/PrimerTrimestre', array(
                'paciente' => $paciente
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
            case "nacionalidadEliminar":
                $resultado = NacionalidadModel::deleteNacionalidad(Request::post('nacionalidad_id'));
                break;
        }

        return $this->View->renderJSON($resultado);
    }
}
