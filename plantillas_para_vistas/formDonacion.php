<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
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
                        <select class="form-control" id="material" name="material" required>
                            <!--se rellenará de la BBDD-->
                            <option value="" disabled selected>Seleccione un material</option>
                            //Llamada para obtener los datos de la BBDD
                            <?php include '../modelo/ObtenerMateriales.php'; ?>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>