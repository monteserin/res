const fotos = ["tux1.png", "tux2.png", "tux3.png"];
let user;
window.addEventListener('load', inicio);

function inicio() {
    var n_aleatorio = Math.floor(Math.random() * fotos.length);
    var foto = fotos[n_aleatorio];
    document.querySelector('#result').src = 'img/' + foto;

    document.querySelectorAll('.btn').forEach(obj =>{
        obj.addEventListener('click', () => {
        user = obj.src;
        console.log('user: ' + user + ', foto: ' + '/curso/assets/tux/'+foto)
        if (user == 'img/'+foto) {
            alert('Has acertado');
        } else {
            alert('Has perdido');
        }
    });
});
}