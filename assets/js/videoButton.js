const video = document.getElementById("vide_promocional");
const boton_carta = document.getElementById("boton_carta");
video.addEventListener("timeupdate", (e) => {
  if (video.currentTime >= 29) {
    boton_carta.style.display = "block";
  }
  if(video.currentTime >= 37){
    boton_carta.style.display = "none";
  }
});
