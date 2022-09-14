<?php
    require_once("View.php");
    require_once("Model.php");
    $vista = new View($datos);
    echo $vista->drawHTML5();
?>