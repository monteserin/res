
/*
window.onload = function(){
if(location.href.indexOf("https://pablomonteserin.com/") == 0){
    console.log("en pablomonteserin.com")
        document.querySelectorAll("#inicio_del_documento a").forEach(function(obj){
        obj.addEventListener('click', llamadaAScrollIT, true)
    })
}


}

function llamadaAScrollIT(e){
            e.preventDefault();
            e.stopPropagation();
            console.log("llamadaAScrollIT dentro de sin-modulos.js")
            const enlace = e.target.getAttribute("href");
            scrollIt(enlace);
        }

/////////////// AUTO SCROLL
function scrollIt(element) { 
        element = element.substring(1);

    element = document.getElementById(element);
    console.log(element)
//conceptos previos: 5000
const cabecera = document.querySelector('header.site-header');
let mioffset2 = 0
const bodyRect = document.body.getBoundingClientRect();
const rect = element.getBoundingClientRect(); 
if(cabecera != null){
    const altoCabecera = cabecera.clientHeight;
    mioffset2 = rect.top - bodyRect.top - altoCabecera 
}else{
    mioffset2 = rect.top - bodyRect.top;
}

window.scrollTo({
    'behavior': 'smooth',
    'left': 0,
    'top': mioffset2
});    

}

*/