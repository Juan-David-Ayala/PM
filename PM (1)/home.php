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
        <script src="js/al.js"></script>
    <link rel="stylesheet" href="css/hometi.css">
    <link rel="stylesheet" href="css/Indesti.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/vcfas.css">
    <link rel="stylesheet" href="css/vcgru.css">
    <link rel="stylesheet" href="css/vconp.css">
    <link rel="stylesheet" href="css/vcpro.css">
    <link rel="stylesheet" href="css/vcurso.css">
    <link rel="stylesheet" href="css/vcurso1.css">
    <link rel="stylesheet" href="css/vini.css">
    <link rel="stylesheet" href="css/vlise.css">
    <link rel="stylesheet" href="css/vper.css">
    <link rel="stylesheet" href="css/vperfil.css">
    <link rel="stylesheet" href="css/vreg.css">
    <link rel="stylesheet" href="css/vusu.css">
    <link rel="stylesheet" href="css/vusuario.css">
</head>

<body>
    <header class=" d-flex ">
        <div>
            <img src="img/PM-removebg-preview.jpg" alt="" class="position-absolute top-0 end-0 ">
        </div>
        <div id="un">
            <a href="INDEX.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="45" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
            </a>
        </div>
        <div class="d-flex" id="an">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="45" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
            <h6 id="no">Usuario</h6>
        </div>
        


    </header>
    <?php
        include ("mh.php");
    ?>
     <section>
  <?php
            require_once ("home.php");
            $pg = isset ($_GET["pg"]) ? $_GET["pg"] : NULL;
            if(!$pg)
                require_once ("views/vinihom.php");
            if($pg == 199)
                require_once ("views/vinihom.php");
            if($pg == 203)
                require_once ("views/vcfas.php");
            if($pg == 204)
                require_once ("views/vcgru.php");
            if($pg == 206)
                require_once ("views/vconp.php");
            if($pg == 208)
                require_once ("views/vcpro.php");
            if($pg == 209)
                require_once ("views/vcurso1.php");
            if($pg == 210)
                require_once ("views/vcursos.php");
            if($pg == 211)
                require_once ("views/vperfil.php");
            if($pg == 212)
                require_once ("views/vusu.php");
            if($pg == 213)
                require_once ("views/vusuario.php");
            if($pg == 214)
                require_once ("views/vreg.php");
            if($pg == 215)
                require_once ("views/vlise.php");
            
        ?>
    </section>      
</body>

</html>