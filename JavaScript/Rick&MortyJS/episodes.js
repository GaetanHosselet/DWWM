
const fetchEpisodes = async () => {
    let allEpisodes = [];
    let pages;
    
    // Fetch first page to get total number of pages
    const response = await fetch("https://rickandmortyapi.com/api/episode");
    const data = await response.json();
    pages = data.info.pages;

    // Fetch all pages
    for (let i = 1; i <= pages; i++) {
        const pageResponse = await fetch(`https://rickandmortyapi.com/api/episode?page=${i}`);
        const pageData = await pageResponse.json();
        allEpisodes.push(...pageData.results);
    }

    return allEpisodes;
};

fetchEpisodes()
.then(episodes => {
    const table = document.createElement('table');
    const headerRow = table.insertRow();
    const episodeNumberHeader = headerRow.insertCell(0);
    episodeNumberHeader.textContent = 'Numéro de l\'épisode';
    const episodeNameHeader = headerRow.insertCell(1);
    episodeNameHeader.textContent = 'Intitulé de l\'épisode';
    const airDateHeader = headerRow.insertCell(2);
    airDateHeader.textContent = 'Date de sortie';

    episodes.forEach(episode => {
        const row = table.insertRow();
        const episodeNumberCell = row.insertCell(0);
        episodeNumberCell.textContent = episode.episode;
        const episodeNameCell = row.insertCell(1);
        episodeNameCell.textContent = episode.name;
        const airDateCell = row.insertCell(2);
        airDateCell.textContent = episode.air_date;
    });

    document.body.appendChild(table);
})
.catch(error => console.error('Erreur lors de la récupération des données :', error));


