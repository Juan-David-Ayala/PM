<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link href="css/vreg.css" rel="stylesheet">
  <script src="js/al.js"></script>
</head>
<body>
<form>
    <main class="form-signin w-100 m-auto">
      <center>
        <div style="text-align: center;">
          <img class="mb-4" src="img/PM-removebg-preview.jpg" alt="" width="150" height="70">
          <h1 class="h3 mb-3 fw-normal">
            <hr>
          </h1>
          <div class="ajus">
            <div>
            <div class="from-group">
              <span>Nombre</span>
              <input type="text" placeholder="Ingrese nombre">
            </div>
            <br>
            </div>
            <div class="from-group" id="espa">
              <span>NIT</span>
              <input type="text" placeholder="Ingrese nit">
            </div>
            <div>
              <div class="from-group" id="espa">
              <span>Email</span>
              <input type="email" placeholder="Ingrese correo">
            </div>
            <br>
            </div>
            <div class="from-group" id="espa">
              <span>Ubicacion</span>
              <input type="text" placeholder="Ingrese ubicacion">
            </div>
            <div class="mb-3" id="espa">
              <label for="disabledSelect" class="form-label">Tipo de institucion</label>
              <select id="disabledSelect" class="form-select">
                <option>Tipo</option>
                <option>Publica</option>
                <option>Privada</option>
                <option>Tecnica</option>
              </select>
            </div>
            <div class="from-group" id="espa">
              <span>Contraseña</span>
              <input type="pasword" placeholder="Ingrese contraseña">
            </div>
          </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary me-md-2" type="button">Regresar</button>
          <a>
          <button class="btn btn-primary" onclick="ale();" type="button">Registrar</button>
          </a>
        </div>
        </div>
          </div>
        </div>
      </center>
    </main>
  </form>
</body>
</html>
  
  