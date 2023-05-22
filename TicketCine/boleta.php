<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Confirmar compra</title>
</head>

<body>
    <header>
        <nav>
            <div class="d-flex justify-content-start">
                <div>
                    <a href="https://es-la.facebook.com/">
                        <img src="IMG/facebook.png" alt="Facebook" width="30" height="30">
                    </a>
                    <a href="#">
                        <img src="IMG/instagram.png" alt="Instagram" width="30" height="30">
                    </a>
                    <a href="#">
                        <img src="IMG/twitter.png" alt="Twitter" width="30" height="30">
                    </a>
                </div>
            </div>
        </nav>
        <div class="arriba">
            <hr>
            <h1>Compra Ticket y Punto</h1>
            <hr>
        </div>
    </header>
    <hr>
    <nav><a href="index.php">Volver</a></nav>
    <hr>
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores del formulario
        $peliculaSeleccionada = $_POST["pelicula"];
        $categoriaSeleccionada = $_POST["categoria"];
        $cantidad = $_POST["cantidad"];

        // Verificar si se seleccionó una película y una categoría
        if ($peliculaSeleccionada != "Selecciona..." && $categoriaSeleccionada != "Selecciona...") {
            // Obtener el nombre y precio de la película según el valor seleccionado
            $nombrePelicula = "";
            $precioDescuento = 0;
            $descuento = 0;
            $precioPelicula = 0;
            $porcentaje = 0;

            switch ($peliculaSeleccionada) {
                case "1":
                    $nombrePelicula = "Alicia en el País de las Maravillas";
                    $precioPelicula = 1000;
                    switch ($categoriaSeleccionada) {
                        case "menor":
                            $desc = 0.30;
                            $descuento = $precioPelicula * $desc;
                            $precioDescuento = $precioPelicula - $descuento;
                            $porcentaje = 30;
                            break;
                        case "adulto":
                            $desc = 0.05;
                            $descuento = $precioPelicula * $desc;
                            $precioDescuento = $precioPelicula - $descuento;
                            $porcentaje = 5;
                            break;
                        case "mayor":
                            $desc = 0.55;
                            $descuento = $precioPelicula * $desc;
                            $precioDescuento = $precioPelicula - $descuento;
                            $porcentaje = 55;
                            break;
                    }
                    break;
                case "2":
                    $nombrePelicula = "Volver al Futuro IV";
                    $precioPelicula = 2000;
                    switch ($categoriaSeleccionada) {
                        case "menor":
                            $desc = 0.30;
                            $descuento = $precioPelicula * $desc;
                            $precioDescuento = $precioPelicula - $descuento;
                            $porcentaje = 30;
                            break;
                        case "adulto":
                            $desc = 0.05;
                            $descuento = $precioPelicula * $desc;
                            $precioDescuento = $precioPelicula - $descuento;
                            $porcentaje = 5;
                            break;
                        case "mayor":
                            $desc = 0.55;
                            $descuento = $precioPelicula * $desc;
                            $precioDescuento = $precioPelicula - $descuento;
                            $porcentaje = 55;
                            break;
                    }
                    break;
                case "3":
                    $nombrePelicula = "Terminator 5";
                    $precioPelicula = 3000;
                    switch ($categoriaSeleccionada) {
                        case "menor":
                            $desc = 0.30;
                            $descuento = $precioPelicula * $desc;
                            $precioDescuento = $precioPelicula - $descuento;
                            $porcentaje = 30;
                            break;
                        case "adulto":
                            $desc = 0.05;
                            $descuento = $precioPelicula * $desc;
                            $precioDescuento = $precioPelicula - $descuento;
                            $porcentaje = 5;
                            break;
                        case "mayor":
                            $desc = 0.55;
                            $descuento = $precioPelicula * $desc;
                            $precioDescuento = $precioPelicula - $descuento;
                            $porcentaje = 55;
                            break;
                    }
                    break;
            }

            // Calcular el total de la compra
            $total = $precioDescuento * $cantidad;

            // Mostrar la información de la película y el total si se seleccionó alguna
            if ($nombrePelicula != "" && $precioDescuento != 0) {
                echo "<p>Nombre de la película: $nombrePelicula</p>";
                echo "<p>Categoría del ticket: $categoriaSeleccionada</p>";
                echo "<p>Precio Película: $$precioPelicula</p>";
                echo "<p>Descuento $porcentaje%: $$descuento</p>";
                echo "<p>Cantidad de ticket: $cantidad</p>";
                echo "<p>Total a Pagar: $$total</p>";
            }
        } else {
            // Mostrar un mensaje de error si no se seleccionó película o categoría
            echo "<p>No se ha seleccionado ninguna película o categoría.</p>";
        }
    }
    ?>



    <button type="submit" class="btn btn-success" values ="opcion ">Imprimir Ticket Qr</button>
    <hr>

        <div class="tabla-contedor">
            <table>
                <tr>
                    <td class="column1" rowspan="7"><img src="IMG/imagenQR.png" alt="QR Ticket"></td>
                    <td class="column2"><?php echo "Nombre de la película:<h6> $nombrePelicula</h6>";?></td>
                </tr>
                <tr>
                    <td class="column2"><?php echo "Ticket para: $categoriaSeleccionada";?></td>
                </tr>
                <tr>
                    <td class="column2"><?php echo "Precio Película: $$precioPelicula";?></td>
                </tr>
                <tr>
                    <td class="column2"><?php echo "Descuento otorgado $porcentaje%: $$descuento";?></td>
                </tr>
                <tr>
                    <td class="column2"><?php echo "El ticket es valido para : $cantidad $categoriaSeleccionada";?></td>
                </tr>
                <tr>
                    <td class="column2"><?php echo "<p>Total a Pagar: _______________________ $$total</p>";?></td>
                </tr>
            </table>
        </div>

        <footer>
            &copy; Desarrollado por José Montecinos 2023
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</body>

</html>