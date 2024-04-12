let data = {
    "Loki" : { "nom" : "Loki", "hp" : 115, "atk" : 10 ,},
    "Thanos" : { "nom" : "Thanos", "hp" : 150, "atk" : 8},
    "Rocket" : { "nom" : "Rocket", "hp" : 85, "atk" : 16},
    "Thor" : { "nom" : "Thor", "hp" : 100, "atk" : 12}
}

let joueur1;
let joueur2;



//  BOUTON START

const buttonStart = document.querySelector ('.buttonStart');
const selectPerso = document.querySelector ('.selectPerso');
const combat = document.querySelector ('.combat')
const imgP1 = document.querySelector ('.imgP1')
const imgP2 = document.querySelector ('.imgP2')

const nameP1 = document.querySelector ('.nameP1')
const nameP2 = document.querySelector ('.nameP2')
const P1HP = document.querySelector ('.P1HP')
const P2HP = document.querySelector ('.P2HP')
const P1ATK = document.querySelector ('.P1ATK')
const P2ATK = document.querySelector ('.P2ATK')



buttonStart.addEventListener('click', () => {
    selectPerso.style.display = "none";
    combat.style.display = "flex";
    const pseudoP1 = document.querySelector ('.pseudoJoueur1').value;
    const pseudoP2 = document.querySelector ('.pseudoJoueur2').value;

    if (selectPerso1 === "Loki"){
        imgP1.style.backgroundImage = "url(./img/lokiimg.png)"
        joueur1 = data.Loki
        nameP1.textContent = pseudoP1
        P1HP.textContent = joueur1.hp
        P1ATK.textContent = joueur1.atk

    }
    if (selectPerso1 === "Thanos"){
        imgP1.style.backgroundImage = "url(./img/thanosimg.png)"
        joueur1 = data.Thanos
        nameP1.textContent = pseudoP1
        P1HP.textContent = joueur1.hp
        P1ATK.textContent = joueur1.atk
    }
    if (selectPerso1 === "Thor"){
        imgP1.style.backgroundImage = "url(./img/thorimg.png)"
        joueur1 = data.Thor
        nameP1.textContent = pseudoP1
        P1HP.textContent = joueur1.hp
        P1ATK.textContent = joueur1.atk
    }
    if (selectPerso1 === "Rocket"){
        imgP1.style.backgroundImage = "url(./img/rocketimg.png)"
        joueur1 = data.Rocket
        nameP1.textContent = pseudoP1
        P1HP.textContent = joueur1.hp
        P1ATK.textContent = joueur1.atk
    }
    if (selectPerso2 === "Loki"){
        imgP2.style.backgroundImage = "url(./img/lokiimg.png)"
        joueur2 = data.Loki
        nameP2.textContent = pseudoP2
        P2HP.textContent = joueur2.hp
        P2ATK.textContent = joueur2.atk
    
    }
    if (selectPerso2 === "Thanos"){
        imgP2.style.backgroundImage = "url(./img/thanosimg.png)"
        joueur2 = data.Thanos
        nameP2.textContent = pseudoP2
        P2HP.textContent = joueur2.hp
        P2ATK.textContent = joueur2.atk
    }
    if (selectPerso2 === "Thor"){
        imgP2.style.backgroundImage = "url(./img/thorimg.png)"
        joueur2 = data.Thor
        nameP2.textContent = pseudoP2
        P2HP.textContent = joueur2.hp
        P2ATK.textContent = joueur2.atk
    }
    if (selectPerso2 === "Rocket"){
        imgP2.style.backgroundImage = "url(./img/rocketimg.png)"
        joueur2 = data.Rocket
        nameP2.textContent = pseudoP2
        P2HP.textContent = joueur2.hp
        P2ATK.textContent = joueur2.atk
    }
})

// BOUTON PSEUDO MODALE
const buttonPseudo = document.querySelector ('.buttonPseudo')
const modalePseudo = document.querySelector ('.modalePseudo')

buttonPseudo.addEventListener('click', () => {
    modalePseudo.style.display = "flex";
})

window.onclick = function(event) {
    if (event.target == modalePseudo) {
      modalePseudo.style.display = "none";
    }
  }

const span = document.getElementsByClassName("close")[0];  

span.onclick = function() {
    modalePseudo.style.display = "none";
  }

//  BOUTON TUTO MODALE

const buttonTuto = document.querySelector ('.buttonTuto')
const modaleTuto = document.querySelector ('.modaleTuto')

buttonTuto.addEventListener ('click', () => {
    modaleTuto.style.display = "flex";
} )

const closeTuto = document.getElementsByClassName("closeTuto")[0];

closeTuto.onclick = function() {
    modaleTuto.style.display = "none";
  }


// SELECT PERSO 1

const selectLokiP1 = document.querySelector('.lokiP1');
const selectThanosP1 = document.querySelector('.thanosP1');
const selectThorP1 = document.querySelector ('.thorP1');
const selectRocketP1 = document.querySelector ('.rocketP1')
let selectPerso1 = "";



selectLokiP1.addEventListener('click', () => {
    selectLokiP1.style.borderColor = "yellow"
    selectThanosP1.style.borderColor ="#50aaff"
    selectThorP1.style.borderColor ="#50aaff"
    selectRocketP1.style.borderColor ="#50aaff"
    selectPerso1 = "Loki";
    console.log(selectPerso1);
})

selectThanosP1.addEventListener('click', () => {
    selectThanosP1.style.borderColor = "yellow"
    selectLokiP1.style.borderColor ="#50aaff"
    selectThorP1.style.borderColor ="#50aaff"
    selectRocketP1.style.borderColor ="#50aaff"
    selectPerso1 ="Thanos";
    console.log(selectPerso1);
})

selectThorP1.addEventListener('click', () => {
    selectThorP1.style.borderColor = "yellow"
    selectThanosP1.style.borderColor ="#50aaff"
    selectLokiP1.style.borderColor ="#50aaff"
    selectRocketP1.style.borderColor ="#50aaff"
    selectPerso1 ="Thor";
    console.log(selectPerso1);

})

selectRocketP1.addEventListener('click', () => {
    selectRocketP1.style.borderColor = "yellow"
    selectThanosP1.style.borderColor ="#50aaff"
    selectThorP1.style.borderColor ="#50aaff"
    selectLokiP1.style.borderColor ="#50aaff"
    selectPerso1 ="Rocket";
    console.log(selectPerso1);

})

// SELECT PERSO 2

const selectLokiP2 = document.querySelector('.lokiP2');
const selectThanosP2 = document.querySelector('.thanosP2');
const selectThorP2 = document.querySelector ('.thorP2');
const selectRocketP2 = document.querySelector ('.rocketP2')
let selectPerso2 = "";


selectLokiP2.addEventListener('click', () => {
    selectLokiP2.style.borderColor = "yellow"
    selectThanosP2.style.borderColor ="#50aaff"
    selectThorP2.style.borderColor ="#50aaff"
    selectRocketP2.style.borderColor ="#50aaff"
    selectPerso2 ="Loki";
    console.log(selectPerso2);
})

selectThanosP2.addEventListener('click', () => {
    selectThanosP2.style.borderColor = "yellow"
    selectLokiP2.style.borderColor ="#50aaff"
    selectThorP2.style.borderColor ="#50aaff"
    selectRocketP2.style.borderColor ="#50aaff"
    selectPerso2 ="Thanos";
    console.log(selectPerso2);
})

selectThorP2.addEventListener('click', () => {
    selectThorP2.style.borderColor = "yellow"
    selectThanosP2.style.borderColor ="#50aaff"
    selectLokiP2.style.borderColor ="#50aaff"
    selectRocketP2.style.borderColor ="#50aaff"
    selectPerso2 ="Thor";
    console.log(selectPerso2);
})

selectRocketP2.addEventListener('click', () => {
    selectRocketP2.style.borderColor = "yellow"
    selectThanosP2.style.borderColor ="#50aaff"
    selectLokiP2.style.borderColor ="#50aaff"
    selectThorP2.style.borderColor ="#50aaff"
    selectPerso2 ="Rocket";
    console.log(selectPerso2);
})

//  LE COMBAT COMMENCE

const btnAttaqueP1 = document.querySelector ('.btnAttaqueP1')
const hpP2 = document.querySelector ('.hpP2')

btnAttaqueP1.addEventListener ('click', () => {
    joueur2.hp = joueur2.hp - joueur1.atk
    P2HP.textContent = joueur2.hp
    hpP2.textContent = joueur2.hp
    btnAttaqueP1.disabled = true;
    btnAttaqueP2.disabled = false;
    btnAttaqueP2.style.borderColor = "Yellow";
    btnAttaqueP2.style.borderWidth = "7px";
    btnAttaqueP1.style = "none";
    
    if (joueur2.hp <=0) {
        btnAttaqueP1.disabled = true;
        btnAttaqueP2.disabled = true;
        alert ('JOUEUR 1 GAGNE')
    }
})

const btnAttaqueP2 = document.querySelector ('.btnAttaqueP2')
const hpP1 = document.querySelector ('.hpP1')

btnAttaqueP2.addEventListener ('click', () => {
    joueur1.hp = joueur1.hp - joueur2.atk
    P1HP.textContent = joueur1.hp
    hpP1.textContent = joueur1.hp
    btnAttaqueP2.disabled = true;
    btnAttaqueP1.disabled = false;
    btnAttaqueP1.style.borderColor = "Yellow";
    btnAttaqueP1.style.borderWidth = "7px";
    btnAttaqueP2.style = "none";

    

    if (joueur1.hp <=0) {
        btnAttaqueP1.disabled = true;
        btnAttaqueP2.disabled = true;
        alert ('JOUEUR 2 GAGNE')
    }
})










