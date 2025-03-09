const lightboxContainer = document.querySelector('#lightboxContainer');

const showPopup = () => {
    lightboxContainer.style.display = 'block';
}

const hidePopup = () => {
    lightboxContainer.style.display = 'none';
}
document.querySelector('.btn').addEventListener('click', showPopup);
document.querySelector('.btnClose').addEventListener('click', hidePopup);