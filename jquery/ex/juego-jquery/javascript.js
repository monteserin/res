var fotos = ["tux1.png", "tux2.png", "tux3.png"];
var user;
$(inicio);

function inicio() {
    var n_aleatorio = Math.floor(Math.random() * fotos.length);
    var foto = fotos[n_aleatorio];
    $('#result').attr('src', "/res/jquery/img/tuxes/" + foto);

    $('.btn').click(function () {
        user = $(this).attr('src');
        if (user ==  "/res/jquery/img/tuxes/"+foto) {
            alert('Has acertado');
        } else {
            alert('Has perdido');
        }
    });
}