<?php
namespace Modelo;

require_once 'Conexion.php';

class ObtenerMateriales extends Conexion{

    public function obtenerOpciones() {
        $sentencia = $this->getCon()->prepare("SELECT id, nombre FROM materiales_necesitados");
        $sentencia->execute();

        $resultado = $sentencia->get_result();

        $opciones = "";
        while ($fila = $resultado->fetch_assoc()) {
            $opciones .= '<option value="' . $fila['id'] . '">' . $fila['nombre'] . '</option>';
        }

        $sentencia->close();
        return $opciones;
    }
}
