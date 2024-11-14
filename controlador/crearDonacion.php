<?php

use modelo\MDonaciones;

require_once '../modelo/MDonaciones.php';

$cantidad = $_POST['cantidad'];
$nota = $_POST['nota'];
$materialId = $_POST['materialId'];

$donacion = new MDonaciones();
$donacion -> anadirDonacion([
    "cantidad"=> $cantidad,
    "nota"=> $nota,
    "materialId"=> $materialId
]);

echo "Donación añadida correctamente";