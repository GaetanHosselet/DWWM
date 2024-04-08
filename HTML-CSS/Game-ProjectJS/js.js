// Sélectionne le bouton d'ouverture du modal
var btn = document.getElementById("btnt");

// Sélectionne le modal lui-même
var modal = document.getElementById("myModal");

// Sélectionne le bouton de fermeture du modal
var span = document.getElementsByClassName("close")[0];

// Ouvre le modal lorsqu'on clique sur le bouton
btn.onclick = function() {
  modal.style.display = "block";
}

// Ferme le modal lorsqu'on clique sur le bouton de fermeture (×)
span.onclick = function() {
  modal.style.display = "none";
}

// Ferme le modal lorsqu'on clique en dehors du modal
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}