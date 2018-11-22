<?php

class PacientesController extends Controller
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
    public function index()
    {
        $this->View->render('pacientes/index');
    }

    public function get()
    {
        $this->View->renderJSON(PacientesModel::getAllPacientes());
    }

    public function new()
    {
        $this->View->renderJSON(PacientesModel::createPaciente(Request::post('paciente_rut'), Request::post('paciente_nombre'), Request::post('paciente_apellido'), Request::post('paciente_email'), Request::post('paciente_nacimiento'), Request::post('paciente_prevision'), Request::post('paciente_nacionalidad'), Request::post('paciente_region')));
    }

    public function update()
    {
        $this->View->renderJSON(PacientesModel::updatePaciente(Request::post('paciente_rut'), Request::post('paciente_nombre'), Request::post('paciente_apellido'), Request::post('paciente_email'), Request::post('paciente_nacimiento'), Request::post('paciente_prevision'), Request::post('paciente_nacionalidad'), Request::post('paciente_region')));
    }
}
