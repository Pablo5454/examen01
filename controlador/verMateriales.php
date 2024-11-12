<?php

use Modelo\MMaterialesNecesitados;
use Vista\Vista;

require_once '../modelo/MMaterialesNecesitados.php';
require_once '../vista/Vista.php';
$material = $_GET['id'];

$material = new MMaterialesNecesitados();

Vista::mostraTitulo("Un titulo $material");
