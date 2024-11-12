<?php
namespace Modelo;

require_once 'Conexion.php';

class MAyudas extends Conexion {


    public function eliminarAyuda($id) {
        $sentencia = $this->getCon()->prepare("DELETE FROM ayudas WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $sentencia->close();
    }
}
