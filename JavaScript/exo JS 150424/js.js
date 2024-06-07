let btn = document.querySelector(".btn")
let curseur = document.querySelector(".curseur")
let rec = document.querySelector(".rec")

btn.addEventListener('click', function () {
    curseur.style.display = 'block';
});

rec.addEventListener('mousemove', function (event) {
    if (curseur.style.display === 'block') {
        curseur.style.left = event.clientX + 'px';
        curseur.style.top = event.clientY + 'px' ;
    }
})