<?php
class Controller{
    protected $views,$model;

    public function __construct()
    {
        $this->views = new Views(); 
        $this->cargarModel();
    }//fin constructor


    public function cargarModel()
    {
        $model = get_class($this)."Model";
        $ruta = "Models/".$model.".php";
        //echo "*********************** La ruta es: $ruta ";
        if (file_exists($ruta)) {
            require_once $ruta;
            $this->model = new $model();
        }else{
            echo "Error en cargarModel de Controller";
        }
    }//fn cargarModel
}


?>