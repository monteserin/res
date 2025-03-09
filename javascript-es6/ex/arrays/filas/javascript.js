const trs = document.querySelectorAll('tr');

trs.forEach((tr) => {
    tr.addEventListener('click', () => {
        trs.forEach((tr) => {
            tr.style.backgroundColor = 'transparent';
        });
        tr.style.backgroundColor = 'olive';
        tr.querySelector('input[type=radio]').checked = true;
    });
});