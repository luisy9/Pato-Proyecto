<?php
include("header.php");
?>






<html>

<head>
    <title>Platilla de bootstrapp</title>

    <meta charset="UTF-8" />
    <meta name="description" content="Descripció web" />
    <meta name="keywords" content="Paraules clau" />
    <meta name="author" content="Autor" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/full_estil.css" rel="stylesheet" type="text/css" media="screen" />

    <meta http-equiv="refresh" content="2000" />
</head>

<body>
    <section id="" class="container-fluid sectionMesas py-3 d-flex justify-content-center align-items-center" style="background-image: URL(assets/images/mesas.jpg);">
    <h1><h1>
        <div class="container contenedorRegi">
            <div class="row py-4 px-3">
                <div class="col-6 col-ms-12 py-3 formStyleCerrar">
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Apellido" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Correo Electronico" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Contraseña" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 py-4">
                            <button type="submit" id="botonContact" class="botonStyleRegi mb-2 ">Aceptar</button>
                            <button type="submit" id="botonContact1" class="botonStyleRegi mb-2 ">Cancelar</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 divImg">
                    <img class="divImagenPatito rounded mx-auto d-block" src="assets/images/patoGordo.png">
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>

<?php

include("footer.html");

?>