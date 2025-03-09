const img = document.querySelector('img');
let i = 0;

const changeImg = () => {
	i++;
	img.setAttribute('src', i % 2 === 0 ? 'https://pablomonteserin.com/res/javascript-es6/ex/cambiar-src-indefinidamente/img/PinguLinux_Ying_Yang.png' : 'https://pablomonteserin.com/res/javascript-es6/ex/cambiar-src-indefinidamente/img/PinguLinux_Yoda.jpg');
}

img.addEventListener('click', changeImg);