const addParagraph = (event) => {
    const number = document.querySelector('input').value;
    let code = '';
    for (let i = 0; i < number; i++) {
        code += '<p>Cositas guays</p>';
    }
    document.querySelector('.content').innerHTML = code;
}

document.querySelector('input').addEventListener('input', addParagraph);