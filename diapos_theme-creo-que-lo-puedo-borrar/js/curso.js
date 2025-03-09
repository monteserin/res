
window.addEventListener('load', inicioTrampeado);

let cont;
let isRemote;
function inicioTrampeado() {

    const amor = document.querySelector('#amor');
    if (amor == null) console.log('ESTA PÁGINA NO TIENE AMOR :(')
    if (location.href.indexOf("https://pablomonteserin.com/") == 0) {
        isRemote = true;
    }
    /*   const indice = document.createElement('a');
       indice.setAttribute('id', 'mostrarIndice');
       indice.setAttribute('class', 'monteserin_button');
       indice.innerHTML = '&nbsp; Índice';

       if(isRemote){
           cont = document.querySelector('.site-container main');
       }else{  
           cont = document.querySelector('body');
       }
           cont.prepend(indice);
           
*/
    var enlacesIndice = document.querySelectorAll('#amor.verIndice a[href^="#"]'); // Coge siempre la primera ocurrencia
    appendIndex();

    anadirNumerosALosLiDelIndice();
    desplegarSubmenusDelIndice();
    seleccionarCodigoFuenteAlHacerDobleClick();
    buscarlaURLDeLaPaginaEnLaQueEstoyParaGenerarLosBotonesDeSiguienteAnterior();
    desplegarLiPadre();
    irALosEnlacesDelIndice(enlacesIndice);
    redimIframes();
    highlightLinks(enlacesIndice)
    //incogerHeader();
    colorearArticles();
}





function appendIndex() {
    const body = document.querySelector('body');
    var newEl = document.createElement('div');
    newEl.classList.add('wonderfulIndex');
    newEl.innerHTML = '<input type="checkbox" id="mostrarIndice"><label for="mostrarIndice" class="hamburger-icon my-auto"><span></span></label>';
    body.prepend(newEl);
    mostrarOcultarIndice();

}
function colorearArticles() {
    document.querySelectorAll("main.curso article").forEach((obj, i) => {
        const colorClass = i % 2 == 0 ? 'bg-light' : 'noBack';
        obj.classList.add(colorClass);
    });
}

function incogerHeader() {
    const obj = document.querySelector('h1');
    // let distanciaInicial = document.querySelector('h1').getBoundingClientRect().top// + window.scrollY;;
    /*let distanciaInicial = getDistanceBetweenElements(
        document.querySelector('body'),
        document.querySelector('h1')
    );*/
    //let distanciaInicial = getOffsetTop(document.querySelector('h1')) -window.scrollY;
    //   let distanciaInicial = document.querySelector('h1').pageYOffset;

    //let distanciaInicial = getCoords(document.querySelector('h1')).top;
    //  console.log('distanciaInicial: ' + obj.clientTop);
    console.log('distanciaInicial: ' + obj.getBoundingClientRect().top);
    const elH1 = document.querySelector('.monteserin_curso');
    incogeObjects(elH1);
    window.onscroll = function (e) {
        incogeObjects(elH1);
    }
}

function incogeObjects(obj) {
    let dist = window.scrollY;
    console.log('dist2 vale: ' + dist)
    if (dist > 30) {
        obj.classList.add('scrolled');
    } else {
        obj.classList.remove('scrolled');
    }
}
function redimIframes() {
    document.querySelectorAll(".monteserin_iframe").forEach(obj => {
        obj.style.width = "100%";
        monteserinHeight = obj.clientWidth * 0.67;
        obj.style.height = monteserinHeight + 'px';
    });
}

function irALosEnlacesDelIndice(enlacesIndice) {
    enlacesIndice.forEach(obj => {
        obj.addEventListener('click', e => {
            e.preventDefault();
            alert(11111111)
            const currentURL = location.href;
            const currentURLWithoutHashtag = currentURL.substring(0, currentURL.lastIndexOf('/'));
            console.log(currentURLWithoutHashtag);
            const href = obj.getAttribute('href');
            // THE GOTO FUNCTIONS IS DEFINED AS WORDPRESS PLUGIN (monteserin-scroll)
            goto(href);
        })
    });

}

function SelectText(element) {
    var doc = document,
        text = element,
        range, selection;
    if (doc.body.createTextRange) {
        range = document.body.createTextRange();
        range.moveToElementText(text);
        range.select();
    } else if (window.getSelection) {
        selection = window.getSelection();
        range = document.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
    }
}


function siguienteAnterior(posicion, elementosLista) {
    if (isRemote) {
        let prevEnlace = "";
        let nextEnlace = "";
        const liSiguiente = elementosLista[posicion + 1];
        const liAnterior = elementosLista[posicion - 1];
        if (liSiguiente != null) {
            const aSiguiente = liSiguiente.querySelector('a');
            if (aSiguiente != null && aSiguiente.getAttribute('href') != '#') {
                nextEnlace = '<a class="monteserin_button" href="' + aSiguiente.getAttribute("href") + '">Siguiente</a>';
            } else {
                nextEnlace = '<a class="monteserin_button" href="' + elementosLista[posicion + 2].querySelector('a').getAttribute("href") + '">Siguiente</a>';
            }
        }

        if (liAnterior != null && !liAnterior.querySelector(':scope > a').classList.contains('hasChildren')) {
            const aAnterior = liAnterior.querySelector('a');
            if (aAnterior != null && aAnterior.getAttribute('href') != '#') {
                prevEnlace = '<a class="monteserin_button" href="' + aAnterior.getAttribute("href") + '">Anterior</a>';
            } else {
                prevEnlace = '<a class="monteserin_button" href="' + elementosLista[posicion - 2].querySelector('a').getAttribute("href") + '">Anterior</a>';
            }
        }

        const enlaces_alante_atras = document.createElement('div');
        enlaces_alante_atras.setAttribute('id', 'enlaces_alante_atras');
        enlaces_alante_atras.innerHTML = prevEnlace + nextEnlace;


        cont.prepend(enlaces_alante_atras);


    }
}

function desplegarLiPadre() {
    const currentLI = document.querySelector("li.activoMonteserin");
    if (currentLI != null) {
        const ulPadre = currentLI.parentNode;
        ulPadre.classList.toggle('desplegado');
    } else {
        console.log('No hay ningún li con el class .activoMonteserin puesto, pero si no hay lis desplegables en el menú, esto no es un problema');
    }
}

/*Añadir los números (con css no podría recuperar sus valores usando js)*/
function anadirNumerosALosLiDelIndice() {
    const lisPrimerNivel = document.querySelectorAll("#inicio_del_documento.indice > ol  > li")
    lisPrimerNivel.forEach((liPrimerNivel, i) => {
        const n = i + 1;
        var span = document.createElement('span');
        span.innerHTML = n;
        liPrimerNivel.insertBefore(span, liPrimerNivel.firstChild);

        if (liPrimerNivel.querySelector(':scope > a') != null && liPrimerNivel.querySelector(':scope > a').classList.contains('hasChildren')) {
            const lisSegundoNivel = liPrimerNivel.querySelectorAll(":scope > ol > li");
            lisSegundoNivel.forEach((liSegundoNivel, j) => {
                const n2 = j + 1;
                var span = document.createElement('span');
                span.innerHTML = n + '.' + n2;
                liSegundoNivel.insertBefore(span, liSegundoNivel.firstChild);
            })
        }
    });
}

function desplegarSubmenusDelIndice() {
    document.querySelectorAll('a.hasChildren').forEach((obj) => {
        obj.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            obj.parentNode.querySelector('ol').classList.toggle('desplegado');
        })
    });
}

function mostrarOcultarIndice() {
    const mostrarIndiceObj = document.querySelector("#mostrarIndice");
    mostrarIndiceObj.addEventListener('click', (e) => evaluateIndexCheckBox(e));
}


function evaluateIndexCheckBox(e) {
    e.stopPropagation();
    const mostrarIndiceObj = document.querySelector("#mostrarIndice");

    if (mostrarIndiceObj.checked) {
        window.addEventListener('click', detectaPulsacionEnPantalla);
        amor.classList.add('desplegado');
    } else {
        window.removeEventListener('click', detectaPulsacionEnPantalla);
        amor.classList.remove('desplegado');

    }
}

function detectaPulsacionEnPantalla(e) {
    e.stopPropagation();
    const mostrarIndiceObj = document.querySelector("#mostrarIndice");
    if (amor.classList.contains('desplegado') == true && !document.getElementById('amor').contains(e.target) && !document.querySelector('.hamburger-icon').contains(e.target)) {
        mostrarIndiceObj.checked = false;
        amor.classList.remove('desplegado');

    } else if (document.querySelector('.hamburger-icon').contains(e.target)) {
        amor.classList.remove('desplegado');
    }


}
function seleccionarCodigoFuenteAlHacerDobleClick() {
    var pres = document.querySelectorAll("pre"); // Coge siempre la primera ocurrencia
    for (var i = 0; i < pres.length; i++) {
        pres[i].ondblclick = function (e) {
            SelectText(this.getElementsByTagName("code")[0]);
        }
    }
}

function buscarlaURLDeLaPaginaEnLaQueEstoyParaGenerarLosBotonesDeSiguienteAnterior() {
    const losH2 = document.querySelectorAll("h2");
    const elementosLista = document.querySelectorAll("#inicio_del_documento.indice > ol li");
    const urlHref = location.href;

    elementosLista.forEach((elLi, i) => {
        const elEnlace = elLi.querySelector(":scope > a");
        let href = "";
        if (elEnlace != null) {
            href = elLi.querySelector(":scope > a").getAttribute('href');
            losH2.forEach((elH2) => {
                if (elEnlace.innerHTML.toLowerCase() == elH2.innerHTML.toLowerCase()) {
                    const miObj = elLi.querySelector(':scope > span');
                    if (miObj != null) {
                        const elNumero = miObj.innerHTML;
                        elH2.innerHTML = elNumero + ' - ' + elH2.innerHTML;
                    } else {
                        console.log('Esto no va muy fino: ' + href);
                        console.log('quizás el id asociado a este href no debería ser un H2');
                    }

                }
            });
        }

        if (urlHref.startsWith('https://pablomonteserin.com' + href) && href != '' && (urlHref.length == ("https://pablomonteserin.com" + href).length)) {

            elLi.classList.add("activoMonteserin");
            siguienteAnterior(i, elementosLista);
        }

    });
}

function getPosition(element) {
    var xPosition = 0;
    var yPosition = 0;

    while (element) {
        xPosition += (element.offsetLeft - element.scrollLeft + element.clientLeft);
        yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
        element = element.offsetParent;
    }

    return { x: xPosition, y: yPosition };
}

const getOffsetTop = element => {
    let offsetTop = 0;
    while (element) {
        offsetTop += element.offsetTop;
        element = element.offsetParent;
    }
    return offsetTop;
}

function highlightLinks(enlacesIndice) {
    window.addEventListener('scroll', () => {
        const fromTop = window.scrollY;

        let id = '';
        enlacesIndice.forEach(function (obj) {
            const href = obj.getAttribute('href')
            if (href != '#') {
                const objectInPage = document.querySelector(href);
                if (objectInPage == null) {
                    console.log('no existe un elmento con el href ' + href);
                }
                const positionY = getOffsetTop(objectInPage) - headerOffset - 7;
                if (positionY < fromTop) {

                    id = objectInPage.getAttribute('id');
                }
            }
        });

        document.querySelectorAll('#amor a').forEach(obj => {
            obj.classList.remove('activeLinkInIndex');
        })
        if (id == '') {
            document.querySelector('#amor a:first-of-type').classList.add('activeLinkInIndex');
        } else {
            document.querySelector('#amor a[href="#' + id + '"]').classList.add('activeLinkInIndex');
        }
    });
}

function getPositionAtCenter(element) {
    const { top, left, width, height } = element.getBoundingClientRect();
    return {
        x: left + width / 2,
        y: top + height / 2
    };
}

function getDistanceBetweenElements(a, b) {
    const aPosition = getPositionAtCenter(a);
    const bPosition = getPositionAtCenter(b);

    return Math.hypot(aPosition.x - bPosition.x, aPosition.y - bPosition.y);
}

function getCoords(elem) { // crossbrowser version
    var box = elem.getBoundingClientRect();

    var body = document.body;
    var docEl = document.documentElement;

    var scrollTop = window.pageYOffset || docEl.scrollTop || body.scrollTop;
    var scrollLeft = window.pageXOffset || docEl.scrollLeft || body.scrollLeft;

    var clientTop = docEl.clientTop || body.clientTop || 0;
    var clientLeft = docEl.clientLeft || body.clientLeft || 0;

    var top = box.top + scrollTop - clientTop;
    var left = box.left + scrollLeft - clientLeft;

    return { top: Math.round(top), left: Math.round(left) };
}