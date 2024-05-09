<head>
    <link rel="stylesheet" href="css/vcpro.css">
    <script src="js/al.js"></script>
</head>
<body>

        <div class="border border-dark" id="lot">
            <div class="border border-dark" id="fon"></div>
            <div id="ur" class="border border-dark">
                <h5 id="tit">Grupo</h5>
                <h5 id="int">Integrantes</h5>
                <div id="ade" class="border border-dark">
                    <ul class="list-group">
                        <li class="list-group-item">Usuario</li>
                        <li class="list-group-item">Usuario</li>
                        <li class="list-group-item">Usuario</li>
                        <li class="list-group-item">Usuario</li>
                        <li class="list-group-item">Usuario</li>
                      </ul>
                </div>
                <a href="home.php?pg=203">
                <button id="bo" type="button" onclick="le();" class="btn btn-danger">Crear proyecto</button>
                </a>
            </div>
        </div>
    </div>
</body>
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
    width: 43000%;
    height: 100%; 
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
    background-color: pink;
}
#tit{
    text-align: center;
    margin-top: 2%;
}
#ur{
    height: 50%;
    width: 71%;
    position: absolute;
    transform: translate(-50%, -50%);
    left: 55%;
    top: 60%;
    border-radius: 2em;
}
#int{
    margin-top: 5%;
    margin-left: 10.5%;
}
#ade{
    height: 50%;
    width: 80%;
    transform: translate(13%, 7%);
}
#bo{
    transform: translate(-65%, 100%);
}
</style>