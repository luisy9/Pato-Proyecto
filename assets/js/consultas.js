const enviarReseña = document.getElementById("enviar-resena");

enviarReseña.addEventListener("submit", (e) => {
  e.preventDefault();
  const nombreUser = document.getElementById("nombre-user").value;
  const apellidoUser = document.getElementById("apellido-user").value;
  const email = document.getElementById("email").value;
  const resena = document.getElementById("resena").value;

  fetch("http://primerentornodeharo.com/Pato-Proyecto/config/consultaFetchDAO.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      nombre: "Luis"
    })
    // body: JSON.stringify({
    //   nombreUser: nombreUser,
    //   apellidoUser: apellidoUser,
    //   email: email,
    //   resena: resena,
    // }),
  });
});
