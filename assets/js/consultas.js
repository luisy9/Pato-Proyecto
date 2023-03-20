const enviarReseña = document.getElementById("enviar-resena");
enviarReseña.addEventListener("submit", (e) => {
  e.preventDefault();
  const nombreUser = document.getElementById("nombre-user").value;
  const apellidoUser = document.getElementById("apellido-user").value;
  const email = document.getElementById("email").value;
  const contra = document.getElementById("contra").value;
  const id_pedidos = document.getElementById("id_pedidos").value;
  const resena = document.getElementById("resena").value;
  const estrellas = document.querySelector(
    'input[name="estrellas"]:checked'
  ).value;
  //Consultas
  //POST
  fetch("http://primerentornodeharo.com/Pato-Proyecto/home/consultaFetchPOST", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      nombreUser: nombreUser,
      apellidoUser: apellidoUser,
      email: email,
      contra: contra,
      resena: resena,
      id_pedidos: id_pedidos,
      estrellas: estrellas,
    }),
  })
    .then((res) => res.json())
    .then((data) => {
      if (data == 0) {
        notie.alert({
          type: 3,
          text: "Ya has hecho una reseña de este pedido",
          stay: true,
        });
      } else {
        notie.alert({ type: 1, text: "Reseña enviada", stay: true });
      }
    });
});
