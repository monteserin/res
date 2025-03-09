const showMenu = () => {
    document.querySelector('.panel').classList.toggle('active');
}

document.querySelector('.hamburguer').addEventListener('click', showMenu)