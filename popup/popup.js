function mostrarPopup(tipo, titulo, mensagem) {
  const popup = document.getElementById("popup");
  const content = document.getElementById("popup-content");

  content.classList.remove("popup-sucesso", "popup-erro", "popup-alerta", "popup-info");
  if (tipo) content.classList.add("popup-" + tipo);

  document.getElementById("popup-title").innerText = titulo;
  document.getElementById("popup-message").innerText = mensagem;
  popup.style.display = "block";
}

function fecharPopup() {
  document.getElementById("popup").style.display = "none";
}

window.onload = function () {
  if (typeof popupMensagem !== "undefined" && popupMensagem) {
      mostrarPopup(popupMensagem.tipo, popupMensagem.titulo, popupMensagem.mensagem);
  }
}
