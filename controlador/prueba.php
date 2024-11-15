<?php
// Ejemplo de importacion y uso

use Vista\Vista;

require_once '../vista/Vista.php';


Vista::inicioHtml();
Vista::mostraTitulo("index me ha mandado aqui");
Vista::finHtml();