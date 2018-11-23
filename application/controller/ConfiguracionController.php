<?php

class ConfiguracionController extends Controller
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
        $this->View->render('configuracion/index');
    }

    public function api(){
        $accion = Request::post('accion');
        $resultado = "";

        switch ($accion) {
            case "nacionalidad":
                $resultado = NacionalidadModel::getAllNacionalidad();
                break;
            case "nacionalidadNew":
                $resultado = NacionalidadModel::createNacionalidad(Request::post('nacionalidad_nombre'));
                break;
            case "nacionalidadEliminar":
                $resultado = NacionalidadModel::deleteNacionalidad(Request::post('nacionalidad_id'));
                break;
            case "region":
                $resultado = RegionModel::getAllRegion(Request::post('nacionalidad_nombre'));
                break;
            case "regionNew":
                $resultado = RegionModel::createRegion(Request::post('nacionalidad_nombre'), Request::post('region_text'));
                break;
            case "regionEliminar":
                $resultado = RegionModel::deleteRegion(Request::post('region_id'));
                break;
            case "prevision":
                $resultado = PrevisionModel::getAllPrevision();
                break;
            case "previsionNew":
                $resultado = PrevisionModel::createPrevision(Request::post('prevision_text'));
                break;
            case "previsionEliminar":
                $resultado = PrevisionModel::deletePrevision(Request::post('prevision_id'));
                break;
            case "lugar":
                $resultado = LugarModel::getAllLugares();
                break;
            case "lugarNew":
                $resultado = LugarModel::createLugar(Request::post('lugar_text'));
                break;
            case "lugarEliminar":
                $resultado = LugarModel::deleteLugar(Request::post('lugar_id'));
                break;
        }

        return $this->View->renderJSON($resultado);
    }
}
