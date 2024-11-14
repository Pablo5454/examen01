<?php
namespace Modelo;

require_once 'Conexion.php';

class MDonaciones extends Conexion {

    public function obtenerOpciones() {
        $sentencia = $this->getCon()->prepare("SELECT * FROM materiales_necesitados");
        $sentencia->execute();

        $resultado = $sentencia->get_result();

        $opciones = "";
        while ($fila = $resultado->fetch_assoc()) {
            $opciones .= '<option value="' . $fila['id'] . '">' . $fila['nombre']  . '</option>';
        }

        $sentencia->close();
        return $opciones;
    }

    public function anadirDonacion($donacion) {
        $sentencia = $this->getCon()->prepare("INSERT INTO ayudas(material_id, cantidad, nota) VALUES (?, ?, ?)");
        $sentencia->bind_param("iis", $donacion["materialId"], $donacion["cantidad"], $donacion["nota"]);
        $sentencia->execute();
        $sentencia->close();
    }


}
