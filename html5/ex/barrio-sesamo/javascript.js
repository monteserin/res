function pintarCara() {
    const eyeSize = document.getElementById('edad').value;
    const noiseSize = document.getElementById('gradoFanatismo').value;
    let c = document.getElementById('canvas');
    let ctx = c.getContext('2d');
    ctx.fillStyle = "orange";

    //CARA
    ctx.beginPath();
    //centrox, centroy, radio, inicio del arco en radianes, fin del arco en radianes (2*PI rad es un arco completo), sentido de dibujo
    ctx.arc(245, 240, 200, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fill();
    // OJOS
    ctx.fillStyle = "blue";

    ctx.beginPath();
    //centrox, centroy, radio, inicio del arco en radianes, fin del arco en radianes (2*PI rad es un arco completo), sentido de dibujo
    ctx.arc(180, 180, eyeSize, 0, Math.PI * 2, true);

    ctx.arc(320, 180, eyeSize, 0, Math.PI * 2, true);

    ctx.closePath();
    ctx.fill();

    //NARIZ
    ctx.fillStyle = "red";

    ctx.beginPath();
    //centrox, centroy, radio, inicio del arco en radianes, fin del arco en radianes (2*PI rad es un arco completo), sentido de dibujo
    ctx.arc(250, 300, noiseSize, 0, Math.PI * 2, true);


    ctx.closePath();
    ctx.fill();
    //BOCA
    ctx.fillStyle = "white";

    ctx.beginPath();
    //centrox, centroy, radio, inicio del arco en radianes, fin del arco en radianes (2*PI rad es un arco completo), sentido de dibujo
    ctx.arc(250, 400, noiseSize, Math.PI, Math.PI * 2, true);


    ctx.closePath();
    ctx.fill();
}
