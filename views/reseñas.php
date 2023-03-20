<body>
    <section id="" class="container-fluid sectionMesas" style="background-image: URL(../assets/images/mesas.jpg);">
        <h2 class="textoContact py-4">Reseñas</h2>
        <div class="div-form">
            <div class="container container-form-reseñas px-1 pb-4">
                <form id="enviar-resena">
                    <div class="px-3 pt-4">
                        <input class="form-control" name="nombreUser" placeholder="Nombre" id="nombre-user">
                    </div>
                    <div class="pt-3 px-3">
                        <input class="form-control" name="apellidoUser" placeholder="Apellido" id="apellido-user">
                    </div>
                    <div class="pt-3 px-3">
                        <select id="id_pedidos" name="id_pedidos">
                            <?php foreach ($pedidos as $pedido) { ?>
                                <option value="<?php echo $pedido["id_pedido"] ?>"><?php echo $pedido["id_pedido"] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="pt-3 px-3">
                        <input type="email" class="form-control" name="email" placeholder="Correo Electronico" id="email">
                    </div>
                    <div class="pt-3 px-3">
                        <input type="password" class="form-control" name="contra" placeholder="Contraseña" id="contra">
                    </div>
                    <div class="form-estrellas">
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5">
                            <label for="radio1">★</label>
                            <input id="radio2" type="radio" name="estrellas" value="4">
                            <label for="radio2">★</label>
                            <input id="radio3" type="radio" name="estrellas" value="3">
                            <label for="radio3">★</label>
                            <input id="radio4" type="radio" name="estrellas" value="2">
                            <label for="radio4">★</label>
                            <input id="radio5" type="radio" name="estrellas" value="1">
                            <label for="radio5">★</label>
                        </p>
                    </div>
                    <div class="pt-3 px-3">
                        <input class="form-control py-4" name="resena" placeholder="Reseña" id="resena">
                    </div>
                    <div class="pt-4 px-3">
                        <button style="float:left;" class="botonStyleReseñasAceptar">Aceptar</button>
                        <button style="float:right;" id="botonContacto1" class="botonStyleReseñasCancelar">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>