let prompt = prompt('entrez un nom de pokemon')

fetch('https://tyradex.vercel.app/api/v1/pokemon')
.then (reponse => reponse.json ())
.then (data => {
    prompt = data.name
    console.log (data)
})