<?php

include("Controller.php");

spl_autoload_register(function ($class_name) {
    include $class_name . '.php' ;
});

$ctrlPlayer = new Controller();

$id = filter_var((isset($_GET["id"])), FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE) ? $_GET["id"] : null;


if(isset($_GET["action"])){
    switch ($_GET["action"]) {

      //liste:
      case "viewPlayer" : $ctrlPlayer->viewPlayer(); break;

      case "addPlayer" : $ctrlPlayer->addPlayer(); break;

    }
}

?>