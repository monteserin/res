let code = '';
for (let i = 0; i < 10; i++) {
    const x = Math.floor(Math.random() * 725);
    const y = Math.floor(Math.random() * 483);

    code += ' <img src="https://pablomonteserin.com/res/javascript-es6/ex/mapa/img/goldcoin.png" style="width:50px;position:absolute; margin-left:' + x + 'px; margin-top:' + y + 'px">'
}

document.querySelector('.map').innerHTML = code;