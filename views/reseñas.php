<body>
    <section id="" class="container-fluid sectionMesas" style="background-image: URL(../assets/images/mesas.jpg);">
        <h2 class="textoContact py-4">Reseñas</h2>
        <div class="div-form">
            <div class="container-form mx-4">
                <form id="enviar-resena" action=addResenas>
                    <div class="px-3 pt-4">
                        <input class="form-control" placeholder="Nombre" id="nombre-user">
                    </div>
                    <div class="pt-3 px-3">
                        <input class="form-control" placeholder="Apellido" id="apellido">
                    </div>
                    <div class="pt-3 px-3">
                        <input type="email" class="form-control" placeholder="Correo Electronico" id="correo">
                    </div>
                    <div class="pt-3 px-3">
                        <input type="password" class="form-control" placeholder="Contraseña" id="contra">
                    </div>
                    <div class="pt-3 px-3">
                        <input class="form-control py-4" placeholder="Reseña" id="reseña">
                    </div>
                    <div class="pt-4 px-3">
                        <button style="float:left;" class="botonStyleContacto">Aceptar</button>
                        <button type="submit" style="float:right;" id="botonContacto1" class="botonStyleContacto">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>