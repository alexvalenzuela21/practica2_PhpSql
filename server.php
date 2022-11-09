
<?php

$baseescollida = "";
$consultaInput = "";

$baseescollidaErr = "";
$consultaInputErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["bbdd"])) {
        $baseescollidaErr = "Has de seleccionar una base de dades";
    } else {
        $baseescollida = $_POST["bbdd"];
    }

    if (empty($_POST["consultar"])) {
        $consultaInputErr = "Has de introduir una consulta ";
    } else {
        $consultaInput = $_POST["consultar"];
    }
}
