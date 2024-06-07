const btn = document.querySelector('.btn')
const body = document.querySelector('body')

function mafonction(element) {
    body.removeChild(element)
}

btn.addEventListener('click', () => {
    const div1 = document.createElement('div');
    div1.className = 'div1';
    body.appendChild(div1);

    div1.addEventListener('click', () => {
        mafonction(div1)
    })




    setTimeout(function () {
        const div2 = document.createElement('div');
        div2.className = 'div2';
        body.appendChild(div2);

        div2.addEventListener('click', () => {
            mafonction(div2)
        })



    }, 5000);

    setTimeout(function () {
        const div3 = document.createElement('div');
        div3.className = 'div3';
        body.appendChild(div3);

        div3.addEventListener('click', () => {
            mafonction(div3)
        })
    }, 8000);
})
