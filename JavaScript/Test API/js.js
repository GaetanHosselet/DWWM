// Fonction pour récupérer les informations sur un Pokémon à partir de son nom
function getPokemonInfo(nomPokemon) {
    fetch(`https://tyradex.vercel.app/api/v1/pokemon/${nomPokemon.toLowerCase()}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Pokémon non trouvé');
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
            // Appeler la fonction pour afficher les informations sur le Pokémon sur la page
            afficherPokemonInfo(data);
        })
        .catch(error => {
            console.error('Une erreur s\'est produite :', error);
            // Afficher un message d'erreur sur la page
            const pokemonInfoDiv = document.getElementById('pokemonInfo');
            pokemonInfoDiv.innerHTML = '<p>Pokémon non trouvé. Veuillez entrer un nom de Pokémon valide.</p>';
        });
}

// Fonction pour afficher les informations sur le Pokémon sur la page
function afficherPokemonInfo(data) {
    const pokemonInfoDiv = document.getElementById('pokemonInfo');
    pokemonInfoDiv.innerHTML = `
        <p><strong>Nom:</strong> ${data.name.fr}</p>
        <p><strong>Type:</strong> ${data.types.map(types => types.name).join(',')}</p >
        <p><strong>Taille:</strong> ${data.height}</p>
        <p><strong>Poids:</strong> ${data.weight}</p>
        <p><strong>Stats:</strong> ${data.stats.map(stats =>`${stats.name}: ${stats.base}`).join(', ')}</p>
`;
}

// Demander à l'utilisateur d'entrer le nom du Pokémon
let nomPokemon = prompt("Entrez le nom d'un Pokémon :");

// Appeler la fonction pour récupérer les informations sur le Pokémon
if (nomPokemon) {
    getPokemonInfo(nomPokemon);
} else {
    alert('Nom de Pokémon non valide. Veuillez entrer un nom de Pokémon.');
}