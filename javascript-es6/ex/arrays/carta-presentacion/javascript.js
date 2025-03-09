document.querySelectorAll('input[type="radio"]').forEach((radio) => {
    radio.addEventListener('change', (event) => {
        let txt = '';
        document.querySelectorAll('input[type="radio"]:checked').forEach((radioChecked) => {
            txt += '<p>' + radioChecked.closest('p').textContent + '</p>';
        });
        document.querySelector('.result').innerHTML = txt;
    });
});