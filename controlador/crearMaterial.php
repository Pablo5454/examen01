<?php

use modelo\MMaterialesNecesitados;

require_once '../modelo/MMaterialesNecesitados.php';

$nombre = $_POST['nombre'];
$cantidad_necesitada = $_POST['cantidad_necesitada'];

$material = new MMaterialesNecesitados();
$material->anadirMaterial([
    "nombre"=>$nombre,
    "cantidad_necesitada"=> $cantidad_necesitada
]);

echo "Material añadido correctamente";