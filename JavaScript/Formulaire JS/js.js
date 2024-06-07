const formulaire = document.getElementById('Formulaire')

formulaire.addEventListener("submit", function(event){
    event.preventDefault();

    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const tel = document.getElementById('tel').value;
    const message = document.getElementById('message').value;

    const objet = {
        'nom' : nom,
        'prenom' : prenom,
        'numéro de tel' : tel,
        'message' : message,
    }

    console.log(objet)
})