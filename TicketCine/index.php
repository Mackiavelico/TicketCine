<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Ticket Cine</title>
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

    <body>
        <div style="display: flex; justify-content: center; align-items: flex-start; height: 80vh;">
            <form action="boleta.php" method="post">
                <div class="form-floating">
                    <select class="form-select" name="pelicula" id="floatingSelect" required
                        aria-label="Floating label select example">
                        <option value="" selected>Selecciona...</option>
                        <option value="1">Alicia en el País de las Maravillas</option>
                        <option value="2">Volver al Futuro IV</option>
                        <option value="3">Terminator 5</option>
                    </select>
                    <label for="floatingSelect">Elige la película que deseas ver:</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" name="categoria" id="floatingSelect" required
                        aria-label="Floating label select example">
                        <option value="" selected>Selecciona...</option>
                        <option value="menor">Niño</option>
                        <option value="adulto">Adulto</option>
                        <option value="mayor">Adulto Mayor</option>
                    </select>
                    <label for="floatingSelect">Elige la categoría del ticket</label>
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control" name="cantidad" id="floatingCantidad" required
                        placeholder="Cantidad">
                    <label for="floatingCantidad">Cantidad de tickets:</label>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success">Elegir</button>
                    <button type="reset" class="btn btn-danger">borrar</button>
                    
                </div>

                <hr>
                </form>
        </div>
        
        </div>
        <hr>
        <footer>
            &copy; Desarrollado por José Montecinos 2023
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </body>

</html>