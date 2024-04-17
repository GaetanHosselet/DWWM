const fetchLocations = async () => {
    let allLocations = [];
    let pages;
    
    // Fetch first page to get total number of pages
    const response = await fetch("https://rickandmortyapi.com/api/location");
    const data = await response.json();
    pages = data.info.pages;

    // Fetch all pages
    for (let i = 1; i <= pages; i++) {
        const pageResponse = await fetch(`https://rickandmortyapi.com/api/location?page=${i}`);
        const pageData = await pageResponse.json();
        allLocations.push(...pageData.results);
    }

    return allLocations;
};

fetchLocations()
.then(locations => {
    const table = document.createElement('table');
    const headerRow = table.insertRow();
    const locationNameHeader = headerRow.insertCell(0);
    locationNameHeader.textContent = 'Nom du lieu';
    const locationTypeHeader = headerRow.insertCell(1);
    locationTypeHeader.textContent = 'Type de lieu';

    locations.forEach(location => {
        const row = table.insertRow();
        const locationNameCell = row.insertCell(0);
        locationNameCell.textContent = location.name;
        const locationTypeCell = row.insertCell(1);
        locationTypeCell.textContent = location.type;
    });

    document.body.appendChild(table);
})
.catch(error => console.error('Erreur lors de la récupération des données :', error));