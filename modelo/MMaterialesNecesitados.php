<?php
namespace Modelo;

require_once 'Conexion.php';

class MMaterialesNecesitados extends Conexion {

    public function anadirMaterial($material) {
        $sentencia = $this->getCon()->prepare("INSERT INTO materiales_necesitados(id,nombre,cantidad_necesitada) VALUES (?,?,?)");
        $sentencia->bind_param("iss", $material["id"], $material["nombre"], $material["cantidad_necesitada"]);
        $sentencia->execute();
        $sentencia->close();
    }
   
}
