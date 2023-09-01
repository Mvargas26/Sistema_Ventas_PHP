<?php
spl_autoload_register(function($class){
    if (file_exists("Config/App/".$class.".php")) {
        //echo "************************** Entro al autoload :$class ";
        require_once "Config/App/". $class.".php";
    }
})
?>