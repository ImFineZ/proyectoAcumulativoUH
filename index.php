<?php


//******importante******/
require_once "control/control.php"; // esta es la mejor forma de llamar las clases

$objControl = new control(); //instanciacion( instancia=objControl, new crea objetos, control() es el contructor de clase control)
$objControl->gestor_solicitudes();

?>