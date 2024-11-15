<?php

namespace Vista;

class Vista {

    public static function mostraTitulo($titulo) {
            echo "<h1>" . $titulo . "</h1>";
        
    }

    public static function inicioHtml(){?>

        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>

        <body></body>
    <?php
    }

    
    public static function formDonacion($materiales){?>
    
        <div class="container">
            <div class="row">
                <div class="col">

                    <form method="post" action="../controlador/crearDonacion.php">
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                        </div>
                        <div class="mb-3">
                            <label for="nota" class="form-label">Nota</label>
                            <input type="text" class="form-control" id="nota" name="nota" required>
                        </div>
                        <div class="mb-3">
                            <label for="material" class="form-label">Material</label>
                            <select class="form-control" id="material" name="materialId" required>
                                <!--se rellenará de la BBDD-->
                                <option value="" disabled selected>Seleccione un material</option>
                                <?php
                                    foreach ($materiales as $material) {
                                        echo('<option value="'.$material['id'].'">'.$material['nombre'].'</option>');
                                    }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    <?php
    }//fin cuerpo

    public static function guardarMaterial(){?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="post" action="../controlador/crearMaterial.php">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name = "nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="cantidad_necesitada" class="form-label">Cantidad Necesitada</label>
                            <input type="number" class="form-control" id="cantidad_necesitada" name ="cantidad_necesitada" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <?php    
    }
            
    public static function finHtml(){?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

        <?php
            }
}
