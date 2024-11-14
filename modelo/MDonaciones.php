<?php
namespace Modelo;

require_once 'Conexion.php';

class MDonaciones extends Conexion {


    public function anadirDonacion($donacion) {
        $sentencia = $this->getCon()->prepare("INSERT INTO ayudas(material_id, cantidad, nota) VALUES (?, ?, ?)");
        $sentencia->bind_param("iis", $donacion["material"], $donacion["cantidad"], $donacion["nota"]);
        $sentencia->execute();
        $sentencia->close();
    }
}
