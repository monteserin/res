let currentMoney = 20;
const baseBet = 0.5;
let currentBet = baseBet;
let betIsEnabled = true;
let currentColorBet = "black";
let labouchereArray = [currentBet];
let botonDeColor = null;
let numeroTotalDeTiradas = 0;

const balance_actual = document.querySelector(
  "[data-role=balance-label__value]"
);

// const btnParaApostar_500Euros = document.querySelector(
//   '[data-role="chip"][data-value="500"]'
// );
const btnParaApostar_red = document.querySelector("[data-bet-spot-id=red]");
const btnParaApostar_black = document.querySelector("[data-bet-spot-id=black]");

const btnParaApostar_col1 = document.querySelector(
  ".dddStandard-wrapper :nth-of-type(43)"
);
const btnParaApostar_col2 = document.querySelector(
  ".dddStandard-wrapper :nth-of-type(44)"
);
const btnParaApostar_col3 = document.querySelector(
  ".dddStandard-wrapper :nth-of-type(45)"
);

if (btnParaApostar_red == null) {
  console.log("OJO!!! no se está cogiendo el botón para apostar a rojo");
}

if (btnParaApostar_black == null) {
  console.log("OJO!!! no se está cogiendo el botón para apostar a negro");
}
if (btnParaApostar_col1 == null) {
  console.log(
    "OJO!!! no se está cogiendo el botón para apostar a la columna 1"
  );
}

if (btnParaApostar_col2 == null) {
  console.log(
    "OJO!!! no se está cogiendo el botón para apostar a la columna 2"
  );
}

if (btnParaApostar_col3 == null) {
  console.log(
    "OJO!!! no se está cogiendo el botón para apostar a la columna 3"
  );
}

const selectorUltimoNumero = '[data-role="recent-number"] span';
const selectorUltimoColor = '[data-role="recent-number"] div';
const letreroUltimoNumero = document.querySelector(selectorUltimoNumero);
const letreroUltimoColor = document.querySelector(selectorUltimoColor);

if (letreroUltimoColor == null) {
  console.warn("OJO!!! no se está cogiendo el cartel de último resultado");
}

if (letreroUltimoNumero == null) {
  console.warn(
    "OJO!!! no se está cogiendo el cartel de último número. Te has olvidado de seleccionar el elemento con el inspector al arrancar la aplicación"
  );
}
let btnParaApostar_50Centimos;
let btnParaApostar_1Euro;
let btnParaApostar_5Euros;
let btnParaApostar_25Euros;
let btnParaApostar_100Euros;

let ultimoResultado = letreroUltimoNumero.innerHTML;
// =========================================================================================
// COMPROBACIONES

let ruletaStatus = -1; // 0: primera ronda iniciada, 1: primera ronda completada
setInterval(() => {
  if (document.querySelector("#expandedSlotSessionInfo") != null) {
    simulateClick(document.querySelector("#expandedSlotSessionInfoButton"));
  } else if (
    ultimoResultado !=
      document.querySelector(selectorUltimoNumero).textContent &&
    (ruletaStatus === -1 || ruletaStatus === 0)
  ) {
    let colorQueSalio;
    if (
      document.querySelector(selectorUltimoColor).className.includes("black")
    ) {
      colorQueSalio = "black";
    } else if (
      document.querySelector(selectorUltimoColor).className.includes("red")
    ) {
      colorQueSalio = "red";
    }
    if (ruletaStatus === 0 && botonDeColor != null) {
      // Comprobamos que botonDeColor sea diferente de null porque eso significará que hemos apostado (es ahí donde le damos valor). Sólo queremos evaluar si hemos ganado si hemos apostado
      if (currentColorBet == colorQueSalio) {
        if (labouchereArray.length === 1) {
          labouchereArray = [baseBet];
        } else {
          labouchereArray.shift();
          labouchereArray.pop();
          if (labouchereArray.length === 0) {
            labouchereArray = [baseBet];
          }
        }
        currentMoney += currentBet * 2;
        console.warn(
          "GANASTE!. Labouchere Array:",
          labouchereArray,
          ". CurrentMoney: " + currentMoney
        );
        ruletaStatus = 1;
      } else {
        labouchereArray = [...labouchereArray, currentBet];
        console.warn(
          "PERDISTE!. Labouchere Array:",
          labouchereArray,
          ". CurrentMoney:",
          currentMoney
        );
      }
      currentColorBet = colorQueSalio;
      currentBet =
        labouchereArray.length === 1
          ? labouchereArray[0]
          : labouchereArray[0] + labouchereArray[labouchereArray.length - 1];
    }
    ruletaStatus = ruletaStatus === -1 ? 0 : 1;

    // TODO pq sale el hemos perdido y luego el hemos ganado?
  } else if (ruletaStatus === 1) {
    setTimeout(() => {
      if (ruletaStatus === 1) {
        // Esta doble comprobación de ruletaStatus es necesaria o apostaremos 2 veces
        numeroTotalDeTiradas++;

        // hacerClickEnTodosLosBotonesDeApostarNecesarios();

        botonDeColor = getBotonDeColorParaApostar();
        if (botonDeColor != null) {
          currentMoney -= currentBet;

          console.warn(
            "******** APOSTAMOS " +
              currentBet +
              '€ al color "' +
              currentColorBet +
              ". CurrentMoney: " +
              currentMoney,
            labouchereArray.length
          );

          numeroDeClicks = currentBet / baseBet;
          simulateClicksWithDelay(numeroDeClicks, botonDeColor, betIsEnabled);
          ruletaStatus = 0;
        }
      }

      ultimoResultado =
        document.querySelector(selectorUltimoNumero).textContent;
    }, 5000);
  }
}, 5000);

async function simulateClicksWithDelay(
  numeroDeClicks,
  botonDeColor,
  betIsEnabled
) {
  for (let i = 0; i < numeroDeClicks; i++) {
    if (betIsEnabled) {
      simulateClick(botonDeColor);
    }
    await delay(1000);
  }
}
function delay(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}
// function hacerClickEnTodosLosBotonesDeApostarNecesarios() {
//   let monedasDe50Centimos = 0;
//   let monedasDe1Euro = 0;
//   let monedasDe5Euro = 0;
//   let monedasDe25Euro = 0;
//   let monedasDe100Euro = 0;
//   let monedasDe500Euro = 0;
//   let cantidadAApostarAux = currentBet;

//   botonDeColor = getBotonDeColorParaApostar();
//   const tiempoRandom = Math.random() * 4000;

//   btnParaApostar_50Centimos = document.querySelector(
//     '[data-role="chip"][data-value="0.5"]'
//   );
//   btnParaApostar_1Euro = document.querySelector(
//     '[data-role="chip"][data-value="1"]'
//   );
//   btnParaApostar_5Euros = document.querySelector(
//     '[data-role="chip"][data-value="5"]'
//   );
//   btnParaApostar_25Euros = document.querySelector(
//     '[data-role="chip"][data-value="25"]'
//   );
//   //console.log(btnParaApostar_25Euros);
//   btnParaApostar_100Euros = document.querySelector(
//     '[data-role="chip"][data-value="100"]'
//   );

//   if (btnParaApostar_50Centimos == null) {
//     console.log("OJO!!! no se está cogiendo el botón para apostar 50 centimos");
//   }

//   if (btnParaApostar_1Euro == null) {
//     console.log("OJO!!! no se está cogiendo el botón para apostar 1 euro");
//   }

//   if (btnParaApostar_5Euros == null) {
//     console.log("OJO!!! no se está cogiendo el botón para apostar 5 euros");
//   }

//   if (btnParaApostar_25Euros == null) {
//     console.log("OJO!!! no se está cogiendo el botón para apostar 25 euros");
//   }

//   if (btnParaApostar_100Euros == null) {
//     console.log("OJO!!! no se está cogiendo el botón para apostar 100 euros");
//   }

//   if (Math.floor(cantidadAApostarAux / 100) > 0) {
//     monedasDe100Euro = Math.floor(cantidadAApostarAux / 100);
//     cantidadAApostarAux = cantidadAApostarAux - monedasDe100Euro * 100;
//   }
//   if (Math.floor(cantidadAApostarAux / 25) > 0) {
//     monedasDe25Euro = Math.floor(cantidadAApostarAux / 25);
//     cantidadAApostarAux = cantidadAApostarAux - monedasDe25Euro * 25;
//   }
//   if (Math.floor(cantidadAApostarAux / 5) > 0) {
//     monedasDe5Euro = Math.floor(cantidadAApostarAux / 5);
//     cantidadAApostarAux = cantidadAApostarAux - monedasDe5Euro * 5;
//   }
//   if (Math.floor(cantidadAApostarAux / 1) > 0) {
//     monedasDe1Euro = Math.floor(cantidadAApostarAux / 1);
//     cantidadAApostarAux = cantidadAApostarAux - monedasDe1Euro;
//   }
//   if (Math.floor(cantidadAApostarAux / 0.5) > 0) {
//     monedasDe50Centimos = Math.floor(cantidadAApostarAux / 0.5);
//     monedasDe50Centimos = currentBet / 0.5;
//     cantidadAApostarAux = cantidadAApostarAux - monedasDe50Centimos * 100;
//   }

//   if (
//     monedasDe50Centimos == 0 &&
//     monedasDe1Euro == 0 &&
//     monedasDe5Euro == 0 &&
//     monedasDe25Euro == 0 &&
//     monedasDe100Euro == 0 &&
//     monedasDe500Euro == 0
//   ) {
//     console.error("No se ha seleccionado ninguna moneda para apostar");
//   }

//   setTimeout(function () {
//     monedasDe500Euro > 0
//       ? hacerClickEnCantidadAApostar(
//           "500 â‚¬",
//           monedasDe500Euro,
//           btnParaApostar_500Euros,
//           botonDeColor
//         )
//       : null;
//     monedasDe100Euro > 0
//       ? hacerClickEnCantidadAApostar(
//           "100 €",
//           monedasDe100Euro,
//           btnParaApostar_100Euros
//         )
//       : null;
//     monedasDe25Euro > 0
//       ? hacerClickEnCantidadAApostar(
//           "25 €",
//           monedasDe25Euro,
//           btnParaApostar_25Euros
//         )
//       : null;
//     monedasDe5Euro > 0
//       ? hacerClickEnCantidadAApostar(
//           "5 €",
//           monedasDe5Euro,
//           btnParaApostar_5Euros
//         )
//       : null;
//     monedasDe1Euro > 0
//       ? hacerClickEnCantidadAApostar(
//           "1 €",
//           monedasDe1Euro,
//           btnParaApostar_1Euro
//         )
//       : null;
//     monedasDe50Centimos > 0
//       ? hacerClickEnCantidadAApostar(
//           "50 centimos",
//           monedasDe50Centimos,
//           btnParaApostar_1Euro
//         )
//       : null;
//   }, 500 + tiempoRandom);
// }

// function hacerClickEnCantidadAApostar(
//   tipoDeClick,
//   numeroDeClicks,
//   btnApuestaDinero
// ) {
//   if (betIsEnabled) {
//     setTimeout(function () {
//       hacerClickEnOpcionDeApuesta(numeroDeClicks, btnApuestaDinero);
//       //   simulateClick(botonDeColor);
//     }, 1000);
//   }
// }

// function hacerClickEnOpcionDeApuesta(numeroDeClicks, btnApuestaDinero) {
//   for (let i = 0; i < numeroDeClicks; i++) {
//     if (betIsEnabled) {
//       console.warn(
//         "llegamos a hacer click en el boton de apostar dinero",
//         btnApuestaDinero
//       );
//       simulateClick(btnApuestaDinero);
//     }
//   }
// }

function simulateClick(elem) {
  console.warn("Simulate click pulsado", elem);

  if (!elem) {
    console.error("El elemento no existe.");
    return;
  }

  if (elem.disabled) {
    console.error("El elemento está deshabilitado.");
    return;
  }

  if (
    getComputedStyle(elem).display === "none" ||
    getComputedStyle(elem).visibility === "hidden"
  ) {
    console.error("El elemento está oculto.");
    return;
  }

  var evt = new MouseEvent("click", {
    bubbles: true,
    cancelable: true,
    view: window,
  });
  // If cancelled, don't dispatch our event
  try {
    var canceled = !elem.dispatchEvent(evt);
    elem.click();
    if (canceled) {
      // TODO. El botón no es pulsado automáticamente porque canceled es true. ¿Hay alguna forma de evitarlo?
      console.error("El evento fue cancelado.");
    } else {
      console.warn("El evento fue despachado correctamente.");
    }
  } catch (err) {
    console.warn("hubo un error al pulsar el botón", err);
    // simulateClick(elem);
  }
}

function getBotonDeColorParaApostar() {
  const ultimoColorElement = document.querySelector(selectorUltimoColor);

  if (ultimoColorElement.className.includes("black")) {
    currentColorBet = "black";
    return btnParaApostar_black;
  } else if (ultimoColorElement.className.includes("red")) {
    currentColorBet = "red";
    return btnParaApostar_red;
  } else {
    currentColorBet = "green";
    console.warn("**********************************");
    console.warn(
      "********* Ni rojo ni negro, salió verde. El botón de color que habíamos pulsado antes del verde y que pulsaremos en esta ocasión es: ",
      botonDeColor
    );
    return botonDeColor;
  }
}

// PROMPTS
// Parte de un array que tiene un solo elemento: 0.5. Estamos usando el array para controlar cuando ganamos y perdemos a la ruleta. Cuando apostamos sumamos el primer y último elemento del array y los apostamos. Si el array sólo tiene un solo elemento ese será el valor que apostemos.. Si ganamos, retiramos los elementos apostados del array. Si perdemos, añadimos al final del array el valor por que el hemos apostado. Después de perder 13 veces seguidas, ¿cómo quedaría el array? Muestrame el valor del array en cada tirada.

// Probamos a ganar 10€ con 20€ con una apuesta mínima de 0.5. Comencé a las 13:18 a jugar. A y 38 tenía 25 euros. a las 13:47 gané 10 euros (me quedé con 30)
