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
    public function index($paciente)
    {
        if (!$paciente || $paciente == ""){
            Session::add('feedback_negative', 'Debe seleccionar un paciente');
            Redirect::to("pacientes");
        }
        else{
            $this->View->render('ecografia/index');
        }
    }

    public function primertrimestre()
    {
        $this->View->render('ecografia/PrimerTrimestre');
    }
}
