<?php

use modelo\MDonaciones;

require_once '../modelo/MDonaciones.php';

$cantidad = $_POST['cantidad'];
$nota = $_POST['nota'];
$material = $_POST['material'];

$donacion = new MDonaciones();
$donacion -> anadirDonacion([
    "cantidad"=> $cantidad,
    "nota"=> $nota,
    "material"=> $material
]);

echo "Donación añadida correctamente";