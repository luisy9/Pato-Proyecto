<?php
include("header.php");
?>

<html>

<head>
    <title>Platilla de bootstrapp</title>

    <meta charset="UTF-8" />
    <meta name="description" content="DescripciĆ³ web" />
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
    <section id="" class="container-fluid sectionMesas" style="background-image: URL(assets/images/mesas.jpg);">
        <h2 class="textoContact py-4">Contacta</h2>
        <div class="container-xxl contenedorContact pt-3">
            <div class="row py-4 px-3 justify-content-between mb-3">
                <div class="col-6 col-ms-12 py-3 px-4 mb-3 formStyle">
                    <h3 class="text-center h3Form">Formulario de Contacto</h3>
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
                            <input type="password" class="form-control py-4" placeholder="Descripcion" id="exampleInputPassword1">
                        </div>
                        <div class="py-4 divBotones">
                            <button type="submit" style="float:left;" class="botonStyleContacto">Aceptar</button>
                            <button type="submit" style="float:right;" id="botonContacto1" class="botonStyleContacto">Cancelar</button>
                        </div>
                    </form>
                </div>

                <div class="col-6 col-ms-12 py-3 px-4 LocalizacionStyle">
                    <h3 class="text-center h3Form">Localizacion</h3>
                    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=carrer%20riera%20de%20la%20salut%20santfeliu%20de%20llobregat%204+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">
                        </a></iframe>
                    <p class="mt-2 stylePLoca">Nos encontramos en la Riera de la Salud, 4
                        Barcelona</p>
                </div>
            </div>
    </section>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>





<?php

include("footer.html");

?>