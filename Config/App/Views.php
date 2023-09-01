<?php
class Views{

    public function getView($controlador, $vista)
    {
        $controlador = get_class($controlador);
           $rutaBase = "Views/";

        if ($controlador !== "Home") {
            $rutaBase .= $controlador . "/";
        }

        $rutaCompleta = $rutaBase . $vista . ".php";

        if (file_exists($rutaCompleta)) {
            require $rutaCompleta;
        } else {
            echo "La vista no existe.";
        }
    }
}
?>