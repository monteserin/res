let html = document.getElementById("html");
let css = document.getElementById("css");
let js = document.getElementById("js");
const url = new URL(location.href);
const queTiene = url.searchParams.get("queTiene");

function compile() {
  document.querySelectorAll("code").forEach((obj) => {
    obj.addEventListener("input", () => {
      generarCodigoQueSeVaAEjecutar();
    });
  });
}
function generarCodigoQueSeVaAEjecutar() {
  document.querySelector("#monteserin_iframe_wrapper").innerHTML =
    '<iframe id="code"></iframe>';

  let code = document.getElementById("code");
  code = code.contentDocument || code.contentWindow.document;
  code.open();

  let churro = "";

  if (queTiene == 5) {
    churro +=
      '<p style="text-align:center; font-size:3rem; width:100%">Abre la consola del navegador para ver el resultado</p>';
  }
  if (html != null) {
    churro += html.textContent;
    churro = churro.replace('<script src="javascript.js"></script>', "");
    churro = churro.replace(
      '<link rel="stylesheet" type="text/css" href="style.css">',
      ""
    );
    churro = churro.replace('<link rel="stylesheet" href="style.css">', "");
  }
  if (css != null) {
    churro += "<style>" + css.textContent + "</style>";
  }
  if (js != null) {
    churro += "<script>" + js.textContent + "</script>";
  }

  //console.log(churro)
  //code.removeChild(code.documentElement);

  code.write(churro);
  code.close();

  //console.log(document.querySelector('#code2'));
  // document.querySelector('#code2').innerHTML = 'hola';
}

// function resizeIframe(iframe) {
//   if (!iframe) return;

//   const iframeDocument =
//     iframe.contentDocument || iframe.contentWindow.document;

//   // Asegúrate de que el contenido está completamente cargado
//   if (iframeDocument && iframeDocument.body) {
//     const newHeight = iframeDocument.body.scrollHeight;
//     iframe.style.height = newHeight + "px";
//   }
// }

// window.addEventListener("load", () => {
//   compile();
//   generarCodigoQueSeVaAEjecutar();
//   const iframes = document.querySelectorAll("iframe#code");
//   // const iframeDocument =
//   //   iframe.contentDocument || iframe.contentWindow.document;

//   iframes.forEach((iframe) => {
//     // TODO Quitar el height de mondeterin-code.php para probar porque el iframe no me coge el alto
//     const observer = new MutationObserver(() => resizeIframe(iframe));
//     const iframeDocument =
//       iframe.contentDocument || iframe.contentWindow.document;
//     observer.observe(iframeDocument.body, { childList: true, subtree: true });
//   });
// });

function toggleCodigoVisible() {
  let codigos = document.getElementById("codigos");
  codigos.classList.toggle("visible");

  let btnVerCodigo = document.getElementById("btn_ver_codigo");

  if (codigos.classList.contains("visible")) {
    btnVerCodigo.value = "Ocultar código";
  } else {
    btnVerCodigo.value = "Ver código";
  }
}
