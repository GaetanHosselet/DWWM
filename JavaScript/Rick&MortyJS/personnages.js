const personnages = async () => {
    // la fonction est définie en "async" pour nous permettre d'utiliser "await" par la suite, qui permettra de mieux gérer le temps de chargement.
    let allPersonnages = [];
    // ici nous créons une variable tableau vide pour stocker les personnages
    let pages;
    // cette variable est la pour stocker le nombre de resultats, et parcourir toutes les pages grace à la boucle for.
    
    // le await sert à mettre en pause l'éxecution du code jusqu'a ce qu'une promesse soit résolue. Dans mon cas, jusqu'à ce que toutes les données de l'API soient traitées. Le await n'est utilisable que dans les fonctions "Async"
    const response = await fetch("https://rickandmortyapi.com/api/character");
    const data = await response.json();
    // ci-dessus on extrait les données en JSON
    pages = data.info.pages;
    
    // ci-dessus nous récupérons les informations de l'API, notament la première page et le nombre total de pages.

    // cette boucle for me sert à parcourir toutes les pages de l'API personnages, et les personnages qui vont avec.
    for (let i = 1; i <= pages; i++) {
        const pageResponse = await fetch(`https://rickandmortyapi.com/api/character?page=${i}`);
        // le $ ci dessus permet d'insérer des variables dans une chaine de carractère.
        const pageData = await pageResponse.json();
        allPersonnages.push(...pageData.results);
    }

    return allPersonnages;
    // le return est utilisé pour renvoyer le resultat de l'opération async effectuée par la fonction. Async doit absolument retourner une promesse. Le return allpersonnages permet de renvoyer ce tableau une fois que tous les personnages ont été récupérés. 

    // EN RESUME :Nous créons notre fonction (personnages) async pour pouvoir utiliser await et nous permettre de gérer le temps de chargement de toutes les données. Ensuite nous créons une variable (allPersonnages) pour stocker le tableau, la structure. Nous créons ensuite une variable (pages) pour stocker tous les resultats et les parcourir avec une boucle for. Ensuite nous créons la constant 'response' avec await fetch pour optenir le nombre total de page, que nous allons extraires en .json grace à la const data. Ensuite nous indiquons que pages =data.info.pages pour récupérer le nomnbre totale de pages et l'utiliser dans une boucle for. Dans la boucle for nous parcourons toutes les pages, nous créons ensuite un fetch de l'api en ajoutant la valeur de notre 'i'. Nous créons ensuite une const'pagedata' pour extraire en .json. Puis nous faisons un push pour ajouter tous les éléments à la fin du tableau. les 3 petits points"..." sont la pour la propoagation des éléments.
};

personnages()
.then(characters => {
    const characterContainer = document.createElement('div');
    characterContainer.className = 'character-container';

    characters.forEach(character => {
        const characterCard = document.createElement('div');
        characterCard.className = 'character-card';

        const characterImage = document.createElement('img');
        characterImage.src = character.image;
        characterImage.alt = character.name;

        const characterName = document.createElement('h3');
        characterName.textContent = character.name;

        characterCard.appendChild(characterImage);
        characterCard.appendChild(characterName);
        characterContainer.appendChild(characterCard);
    });

    document.body.appendChild(characterContainer);
})