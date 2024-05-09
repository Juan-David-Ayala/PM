<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/vusu.css">
</head>

<body>
    <header class=" d-flex ">
    <?php
        include ("mh.php");
    ?>
        <div class="border border-dark" id="lot">
            <div class="ur">
            </div>
            <div>
                <button id="bo" type="button" class="btn btn-danger">Registrar</button>
            </div>
            <div class="border border-dark" id="bus">
                <div id="text">
                    <h6>Nombres</h6>
                </div>
                <div id="text2">
                    <h6>Cursos</h6>
                </div>
            </div>
            <div class="border border-dark" id="bu"></div>
            <div id="fom2">
                <form action="/action_page.php">
                    <label for="lname">Apellidos</label><br>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="fname">No.Identificacion</label><br>
                    <input type="text" id="fname" name="fname"><br>
                </form>
            </div>
            <div id="fom3">
                <form action="/action_page.php">
                    <label for="lname">Apellidos</label><br>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="lname">Fecha de nacimiento</label><br>
                    <label for="birthday"></label>
                    <input type="date" id="birthday" name="birthday">
                </form>
            </div>
            <div>
                <button id="bot2" type="button" class="btn btn-danger">Guardar</button>
            </div>
            <div id="par">
                <form>
                    <input type="text" id="fname" name="fname" value="Buscar"><br>
                </form>          
            </div>
            <div id="text8">
                <h6>REGISTRAR ESTUDIANTES</h6>
            </div>       
        </div>
    </div>
</body>

</html>