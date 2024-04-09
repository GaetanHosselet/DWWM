// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::MODAL::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
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

//:::::::::::::::::::::::::::::::::::::::::::::::::::::: LISTE PERSOS:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
const personnages = [
  {
    nom: "Mhar'Vhine",
    attaque: 10,
    vie: 100,
    image: "galerie/mhar'vhine.png"
  },
  {
    nom: "Aim Y",
    attaque: 10,
    vie: 100,
    image: "galerie/Aim_Y-removebg-preview.png"
  },
  {
    nom: "Tomme'Ha",
    attaque: 10,
    vie: 100,
    image: "galerie/Tomme'Ha.png"
  },
  {
    nom: "SaRa'Pe",
    attaque: 10,
    vie: 100,
    image: "galerie/Sara'Pe.png"
  },
  {
    nom: "Reime'Y",
    attaque: 10,
    vie: 100,
    image: "galerie/Reime'Y.png"
  },
  {
    nom: "Het'Tane",
    attaque: 10,
    vie: 100,
    image: "galerie/Het'Tane.png"
  },
];





function afficherImages() {
  const imagesJoueur1 = document.getElementById("imagesJoueur1");
  // imagesJoueur1.innerHTML = ""; // Réinitialiser la galerie
  const imagesJoueur2 = document.getElementById("imagesJoueur2");
  // imagesJoueur2.innerHTML = ""; // Réinitialiser la galerie
  const infoPersonnage = document.getElementById("infoPersonnage");
  
  personnages.forEach(personnage => {
    const img = document.createElement("img");
    img.src = personnage.image;
    img.alt = personnage.nom;
    img.width = 150; // Taille des images en pixels
    img.height = 150;
    img.style.margin = "5px"; // Espacement entre les images
    
    // Ajoutez un gestionnaire d'événements pour choisir le personnage
    // img.addEventListener("click", () => choisirPersonnage(personnage));

    img.addEventListener("mouseover", () => afficherInfoPersonnage(personnage, img));
    img.addEventListener("mouseout", () => infoPersonnage.style.display = "none");
    
    // Ajouter l'image à la galerie (deux exemplaires)
    imagesJoueur1.appendChild(img.cloneNode(true));
    imagesJoueur2.appendChild(img.cloneNode(true));

    // galerie.appendChild(img);


  });
}

// Définir la fonction pour afficher les informations du personnage au survol de la souris
function afficherInfoPersonnage(personnage, img) {
  const infoPersonnage = document.getElementById("infoPersonnage");
  infoPersonnage.innerHTML = `
    <h3>${personnage.nom}</h3>
    <p>Attaque: ${personnage.attaque}</p>
    <p>Vie: ${personnage.vie}</p>
  `;
  
  infoPersonnage.style.top = `${img.offsetTop + img.height}px`;
  infoPersonnage.style.left = `${img.offsetLeft}px`;
  infoPersonnage.style.display = "block";
}


//fonction pour choisir un perso 

function choisirPersonnage(personnage) {
  console.log("Personnage choisi :", personnage);
}

// fonction pour démarrer le jeu

function demarrerJeu() {
  document.getElementById("accueil").style.display = "none";
  document.getElementById("selection").style.display = "block";
  afficherImages();
  const imgJoueur1 = document.querySelector("#imagesJoueur1");
[...imgJoueur1.children].forEach((element)=>{
  element.addEventListener("mouseover",() => console.log("test"));
});



}

// Evenement au clic sur start
document.getElementById("StartButton").addEventListener("click", demarrerJeu);


