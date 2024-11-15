<?php

use Vista\Vista;
use Modelo\MMaterialesNecesitados;

require_once '../vista/Vista.php';
require_once '../modelo/MMaterialesNecesitados.php';

$modeloMateriales = new MMaterialesNecesitados();

Vista::inicioHtml();
Vista::guardarMaterial();
Vista::finHtml();