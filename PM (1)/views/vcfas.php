<body>
    <header class=" d-flex ">
        <div>
            <img src="img/PM-removebg-preview.jpg" alt="" class="position-absolute top-0 end-0 ">
        </div>
    </header>
        <div class="border border-dark" id="lot">
            <div class="border border-dark" id="fon"></div>
            <div id="act" class="border border-dark">
                <div>
                    <h5 id="tit">Nombre de actividad</h5>
                    <input type="text" name="" id="bar">
                </div>
                <div>
                    <h5 id="til">Fecha de entrega</h5>
                    <input type="date" id="bal">
                </div>
                <div id="caj">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Usuario</li>
                        <li class="list-group-item">Usuario</li>
                        <li class="list-group-item">Usuario</li>
                        <li class="list-group-item">Usuario</li>
                        <li class="list-group-item">Usuario</li>
                    </ul>
                    <a>
                    <button id="mod" type="button" onclick="lu();" class="btn btn-primary">Guardar</button>
                    </a>
                <div id="ho">
                    <div id="bi" class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-secondary me-md-2" type="button">Crear Fases</button>
                    </div>
                    <div>
                        <div id="bo" class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-secondary me-md-2" type="button">Crear Actividades</button>
                    </div>
                        <div id="bu" class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-secondary me-md-2" type="button">Entregar</button>
                    </div>
                </div>
                </div>
        </div>
    </div>
<style>
    *{
    margin: 0px;
    padding: 0px;
}
body{
    background-size: 60% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-image: url(img/11.jpg);
}
header{
    width: 50%;
    height: 13.5%;
}
#in{
    background-repeat: no-repeat;
    width: 100%;
    height: 86.5%;
}
#lot{
    background-color: white;
    width: 440%;
    height: 100%; 
    transform: translate(1%, -15%);
}
#es{
    width: 9%;
}
h6{
    margin-top: 6%;
    float: right;
    padding-left: 1%;
    margin-bottom: 9%;
}
#un{
    float: right;
    padding-left: 3%;
    padding-right: 2%;
    padding-top: 3%;
}
#an{
    float: right;
    padding-right: 3%;
    padding-top: 3%;
}
#no{
    text-align: center;
     margin-top: 14%;
     padding-left: 10%;
     margin-bottom: 29%;
   
}
#ne{
    padding-top: 4%;
}
#fon{
    height: 15%;
    width: 100%;
    background-color: purple;
}
#act{
    height: 50%;
    width: 70%;
    transform: translate(23%, 40%);
}
#tit{
    transform: translate(-85%, 200%);
}
#bar{
    width: 40%;
    transform: translate(10%, -300%);
}
#til{
    transform: translate(-200%, -1200%);
}
#bal{
    transform: translate(-40%, -1100%);
}
#caj{
    width: 20%;
    transform: translate(350%, -100%);
}
#mod{
    transform: translate(50%, 50%);
}
#ho{
    transform: translate(20%, -450%);
}
</style>