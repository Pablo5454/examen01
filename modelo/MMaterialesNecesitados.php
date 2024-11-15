<?php
namespace Modelo;

require_once 'Conexion.php';

class MMaterialesNecesitados extends Conexion {

    public function anadirMaterial($material) {
        $sentencia = $this->getCon()->prepare("INSERT INTO materiales_necesitados (nombre, cantidad_necesitada) VALUES (?, ?)");
        $sentencia->bind_param("si", $material["nombre"], $material["cantidad_necesitada"]);
        $sentencia->execute();
        $sentencia->close();
    }

    public function materiales() {
        $resultado = $this->getCon()->query("select * from materiales_necesitados");

        $materiales = [];
        while ($fila = $resultado->fetch_assoc()){
            $materiales[] = $fila;
        }
        
        return $materiales;
    }

    public function anadirDonacion($donacion) {
        $sentencia = $this->getCon()->prepare("INSERT INTO ayudas (material_id, cantidad, nota) VALUES (?, ?, ?)");
        $sentencia->bind_param("iis", $donacion["materialId"], $donacion["cantidad"], $donacion["nota"]);
        $sentencia->execute();
        $sentencia->close();
    }

    public function restarDonacion($donacion){
        $sentencia = $this->getCon()->prepare("UPDATE materiales_necesitados SET cantidad_necesitada = cantidad_necesitada - ? WHERE id = ?");
        $sentencia->bind_param("ii", $donacion["cantidad"], $donacion["materialId"]);
        $sentencia->execute();
        $sentencia->close();
    }
}