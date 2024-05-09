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
  <link rel="stylesheet" href="css/Indesti.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  position-absolute bottom-20 end-0 " id="menu">
      <div class="container-fluid  ">
        <button class="navbar-toggler border border-dark " type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
          include ("menu.php");
        ?>
      </div>
    </nav>
    <section>
  <?php
            require_once ("INDEX.php");
            $pg = isset ($_GET["pg"]) ? $_GET["pg"] : NULL;
            if(!$pg)
                require_once ("views/vini.php");
            if($pg == 200)
                require_once ("views/vini.php");
            if($pg == 201)
                require_once ("views/login.php");
            if($pg == 202)
                require_once ("views/vreg.php");
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
