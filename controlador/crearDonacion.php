<?php

use modelo\MMaterialesNecesitados;

require_once '../modelo/MMaterialesNecesitados.php';

$cantidad = $_POST['cantidad'];
$nota = $_POST['nota'];
$materialId = $_POST['materialId'];

$donacion = new MMaterialesNecesitados();
$donacion -> anadirDonacion([
    "cantidad"=> $cantidad,
    "nota"=> $nota,
    "materialId"=> $materialId
]);

$donacion -> restarDonacion([
    "cantidad"=> $cantidad,
    "materialId"=> $materialId
]);

echo "Donación añadida correctamente";