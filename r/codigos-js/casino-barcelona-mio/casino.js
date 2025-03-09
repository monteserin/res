const martingala = "martingala";
const labouchere = "labouchere";
const martingalaColumnas1 = "martingalaUltimaColumnaQueSalio";
const martingalaColumnas2 = "martingalaUltimas2ColumnasQueSalieron";

//=============================
/*
Saldo min: 16
Retirar 20€ al llegar a 36
*/
var apostarHabilitado = true;
var base_array = [0.5];
/*
var stoploss = 4;
var objetivoGanancias = 36;
var mode = martingalaColumnas1;
*/
var stoploss = 8;
var objetivoGanancias = 36;
var mode = martingala;



// Perdido: 16 + 16
// Ganado 20 + 
//=============================
/*
Saldo min: 32
Retirar 40€ al llegar a 72
*/
/*
var plantillaArray = [1];
var stoploss = 16;
var objetivoGanancias = 40;
*/
//=============================
/*
Saldo min: 64
Retirar 40€ al llegar a 72
*/
/*
var plantillaArray = [2];
var stoploss = 32;
var objetivoGanancias = 80;
*/

// ===========================================================
const black_text = "Negro";
var balance_actual = document.querySelector("[data-role=balance-label__value]");
var btnParaApostar_red = document.querySelector('[data-bet-spot-id=red]');
var btnParaApostar_black = document.querySelector('[data-bet-spot-id=black]');

var btnParaApostar_col1 = document.querySelector('.dddStandard-wrapper :nth-of-type(43)');
var btnParaApostar_col2 = document.querySelector('.dddStandard-wrapper :nth-of-type(44)');
var btnParaApostar_col3 = document.querySelector('.dddStandard-wrapper :nth-of-type(45)');

var btnParaApostar_50Centimos = document.querySelector('[data-role="chip"][data-value="0.5"]');
var btnParaApostar_1Euro = document.querySelector('[data-role="chip"][data-value="1"]');
var btnParaApostar_5Euros = document.querySelector('[data-role="chip"][data-value="5"]');
var btnParaApostar_25Euros = document.querySelector('[data-role="chip"][data-value="25"]');
//console.log(btnParaApostar_25Euros);
var btnParaApostar_100Euros = document.querySelector('[data-role="chip"][data-value="100"]');
var btnParaApostar_500Euros = document.querySelector('[data-role="chip"][data-value="500"]');

var identificadorLetrero = '[data-role=status-text]';
var letreroParaApostar = 'HAGA SUS APUESTAS';
var letrerosParaEsperar = ['APUESTAS CERCA DEL CIERRE', 'NO HAY MÁS APUESTAS', 'ESPERANDO LA SIGUIENTE PARTIDA', 'APUESTAS ACEPTADAS', 'CERRANDO APUESTAS', 'CERRANDO APUESTAS 1', 'CERRANDO APUESTAS 2', 'CERRANDO APUESTAS 3', 'CERRANDO APUESTAS 4', 'CERRANDO APUESTAS 5', 'CERRANDO APUESTAS 6', 'APUESTAS CERRADAS', 'NO MORE BETS'];
var numeroDeVecesQuePerdimos = 0;
// =========================================================================================
// COMPROBACIONES

if (document.querySelector(identificadorLetrero) == null) {
	console.log('OJO!!! no se está cogiendo el letrero');
}

if (btnParaApostar_red == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar a rojo');
}

if (btnParaApostar_black == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar a negro');
}
if (btnParaApostar_50Centimos == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar 50 centimos');
}

if (btnParaApostar_1Euro == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar 1 euro');
}

if (btnParaApostar_5Euros == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar 5 euros');
}

if (btnParaApostar_25Euros == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar 25 euros');
}

if (btnParaApostar_100Euros == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar 100 euros');
}

if (btnParaApostar_500Euros == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar 500 euros');
}

if (btnParaApostar_col1 == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar a la columna 1');
}

if (btnParaApostar_col2 == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar a la columna 2');
}

if (btnParaApostar_col3 == null) {
	console.log('OJO!!! no se está cogiendo el botón para apostar a la columna 3');
}


// =========================================================================================
var estado = 'esperandoParaVerSiGane';
var plantillaArray = [base_array[0]];
var numeroDeTiradasPerdidasSeguidas = 0;
var numeroDeTiradasGanadas = 0;
var totalTiradas = 0;
var totalAciertos = 0;
var apuestas = plantillaArray.slice(0); // 50 euros
var cantidadAApostar = 0;
var limiteDePerdidaRebasado = false;
var maximaApuestaDeLaTirada = 0;
var maximasApuestasDeLaSesion = [];
var juegoActivo = true;
var dineroGanado = 0;
var primeraVez = true;
var intentos = 0;
var ultimaCombinacionRepetida = null;
var posRepetidos = 0;
var girosDesdeElUltimoRepetido = 0;
var repetidos = [];
var plantillaArrayLabouchere = plantillaArray;

var opcionQueSalio = null;
var opcionQueSalioAntes = null;
var opcionEscogida = null;



// UTILS
var simulateClick = function (elem) {
	// Create Arrayour event (with options)
	var evt = new MouseEvent('click', {
		bubbles: true,
		cancelable: true,
		view: window
	});
	// If cancelled, don't dispatch our event
	try {


		var canceled = !elem.dispatchEvent(evt);

	} catch {

		//simulateClick(btn_click_inicial);

	}
};


//Simulamos el click inicial
var btn_click_inicial = document.querySelector('.traffic-light--3BBE4');

simulateClick(btn_click_inicial);

var finGrupoTiradas = _ => {
	maximaApuestaDeLaTirada = 0;
	apuestas = plantillaArray.slice(0);
}

var getBotonParaApostarEnFuncionDelLaOpcionALaQueApostar = () => {

	const botonesDeApuestas = [];

	if (mode == martingalaColumnas1 || mode == martingalaColumnas2) {

		if (opcionQueSalio == "col1") {
			botonesDeApuestas.push(btnParaApostar_col1);
		}
		else if (opcionQueSalio == "col2") {
			botonesDeApuestas.push(btnParaApostar_col2);
		}
		else {
			botonesDeApuestas.push(btnParaApostar_col3);
		}

		if (mode == martingalaColumnas2) {
			if (opcionQueSalioAntes == "col1") {
				botonesDeApuestas.push(btnParaApostar_col1);
			}
			else if (opcionQueSalioAntes == "col2") {
				botonesDeApuestas.push(btnParaApostar_col2);
			}
			else if (opcionQueSalioAntes == "col3") {
				botonesDeApuestas.push(btnParaApostar_col3);
			}
		}

		//	botonesDeApuestas.push(btnParaApostar_col2);
	} else {// seguimos el color
		if (opcionQueSalio == black_text) {
			botonesDeApuestas.push(btnParaApostar_black);
		} else {
			botonesDeApuestas.push(btnParaApostar_red);
		}
	}
	//const btn = document.querySelector('[data-bet-spot-id="' + n + '"]');
	return botonesDeApuestas;
}

var apostarDinero = function () {
	var monedasDe50Centimos = 0;
	var monedasDe1Euro = 0;
	var monedasDe5Euro = 0;
	var monedasDe25Euro = 0;
	var monedasDe100Euro = 0;
	var monedasDe500Euro = 0;
	//var cantidadAApostarAux = cantidadAApostar;
	//console.log(cantidadAApostar)

	/*
		if (btnParaApostar_500Euros != null && Math.floor(cantidadAApostarAux / 500) > 0) {
			monedasDe500Euro = Math.floor(cantidadAApostarAux / 500);
			cantidadAApostarAux = cantidadAApostarAux - monedasDe500Euro * 500;
		}
		if (btnParaApostar_100Euros != null && Math.floor(cantidadAApostarAux / 100) > 0) {
			monedasDe100Euro = Math.floor(cantidadAApostarAux / 100);
			cantidadAApostarAux = cantidadAApostarAux - monedasDe100Euro * 100;
		}
		if (btnParaApostar_25Euros != null && Math.floor(cantidadAApostarAux / 25) > 0) {
			monedasDe25Euro = Math.floor(cantidadAApostarAux / 25);
			cantidadAApostarAux = cantidadAApostarAux - monedasDe25Euro * 25;
		}
		if (btnParaApostar_5Euros != null && Math.floor(cantidadAApostarAux / 5) > 0) {
			monedasDe5Euro = Math.floor(cantidadAApostarAux / 5);
			cantidadAApostarAux = cantidadAApostarAux - monedasDe5Euro * 5;
		}
		if (btnParaApostar_1Euro != null && Math.floor(cantidadAApostarAux / 1) > 0) {
			monedasDe1Euro = Math.floor(cantidadAApostarAux / 1);
			cantidadAApostarAux = cantidadAApostarAux - monedasDe1Euro;
		}
		if (btnParaApostar_50Centimos != null && Math.floor(cantidadAApostarAux / 0.5) > 0) {*/
	//	monedasDe50Centimos = Math.floor(cantidadAApostarAux / 0.5);
	monedasDe50Centimos = cantidadAApostar / 0.5;
	//cantidadAApostarAux = cantidadAApostarAux - monedasDe50Centimos * 100;
	//}

	//console.log('monedasDe50Centimos: ' + monedasDe50Centimos + ', monedasDe1Euro: ' + monedasDe1Euro + ', monedasDe5Euro, ' + monedasDe5Euro + ', monedasDe25Euro: ' + monedasDe25Euro + ', monedasDe100Euro: ' + monedasDe100Euro);

	var tiempoRandom = Math.random() * 4000;

	const botonesParaApostarEscogidos = getBotonParaApostarEnFuncionDelLaOpcionALaQueApostar();

	botonesParaApostarEscogidos.map(btn => {
		setTimeout(function () {
			monedasDe500Euro > 0 ? hacerClickEnCantidadAApostar('500 €', monedasDe500Euro, btnParaApostar_500Euros, btn) : null;
			monedasDe100Euro > 0 ? hacerClickEnCantidadAApostar('100 €', monedasDe100Euro, btnParaApostar_100Euros, btn) : null;
			monedasDe25Euro > 0 ? hacerClickEnCantidadAApostar('25 €', monedasDe25Euro, btnParaApostar_25Euros, btn) : null;
			monedasDe5Euro > 0 ? hacerClickEnCantidadAApostar('5 €', monedasDe5Euro, btnParaApostar_5Euros, btn) : null;
			monedasDe1Euro > 0 ? hacerClickEnCantidadAApostar('1 €', monedasDe1Euro, btnParaApostar_1Euro, btn) : null;
			monedasDe50Centimos > 0 ? hacerClickEnCantidadAApostar('50 centimos', monedasDe50Centimos, btnParaApostar_50Centimos, btn) : null;
		}, 500 + tiempoRandom);
	})
}


var hacerClickEnCantidadAApostar = (tipoDeClick, numeroDeClicks, btnApuestaDinero, btnParaApostarEscogido) => {
	console.warn('tipoDeClick: ' + tipoDeClick + ', numeroDeClicks: ' + numeroDeClicks);
	if (apostarHabilitado) {
		// Seleccionamos la cantidad a apostar (esto todavía no materializa la apuesta)
		console.warn('btnApuestaDinero: ' + btnApuestaDinero.getAttribute('data-value'));
		simulateClick(btnApuestaDinero);
		setTimeout(function () {
			hacerClickEnOpcionDeApuesta(numeroDeClicks, btnParaApostarEscogido, apostarHabilitado);

		}, 1000);
	}
	// pulsamos sobre el botón de apuesta

}

var hacerClickEnOpcionDeApuesta = (numeroDeClicks, btnParaApostarEscogido, apostarHabilitado) => {
	for (var i = 0; i < numeroDeClicks; i++) {
		if (apostarHabilitado) {
			console.warn('btnParaApostarEscogido: ' + btnParaApostarEscogido.getAttribute('data-bet-spot-id'));

			simulateClick(btnParaApostarEscogido);
		}
	}
}


var miIntervalo = setInterval(() => {
	if (juegoActivo) {
		estadoLetrero = document.querySelector(identificadorLetrero);
		if (estadoLetrero != null) {
			var letreroTxt = estadoLetrero.textContent;
			// El momento de hacer la apuesta
			if (letreroTxt.includes(letreroParaApostar)) {
				if (estado == 'esperandoParaApostar') {
					if (!primeraVez) {
						cantidadAApostar = getCantidadAApostar();

						if (maximaApuestaDeLaTirada < cantidadAApostar) {
							maximaApuestaDeLaTirada = cantidadAApostar;
						}
						if (cantidadAApostar > stoploss) {
							console.log("STOPLOSS REBASADO");
							numeroDeVecesQuePerdimos = 0;

						} else {
							apostarDinero();
							estado = 'esperandoParaVerSiGane';
						}
					}
					estado = 'esperandoParaVerSiGane';
				}
			} else {
				if (!letrerosParaEsperar.includes(letreroTxt) && estado == 'esperandoParaVerSiGane') {

					var fichaGanadora = letreroTxt;
					var res = fichaGanadora.split(" ");
					numeroQueSalio = res[0];
					colorQueSalio = res[1];
					console.log('color que salio: ' + colorQueSalio)
					if (mode == martingala || mode == labouchere) {
						opcionQueSalio = colorQueSalio;
					} else if (mode == martingalaColumnas1 || mode == martingalaColumnas2) {
						opcionQueSalioAntes = opcionQueSalio;
						opcionQueSalio = getColFromNum(numeroQueSalio);
					}
					if (!primeraVez) {

						console.log('opcionEscogida: ' + opcionEscogida + ', opcionQueSalio: ' + opcionQueSalio)
						if (opcionEscogida == opcionQueSalio) {
							console.log("*** ٩(^‿^)۶ APUESTA GANADA ٩(^‿^)۶ ***");

							numeroDeVecesQuePerdimos = 0;
							numeroDeTiradasGanadas++;
							if (mode == martingala) {
								dineroGanado = numeroDeTiradasGanadas * plantillaArray.slice(0);
							} else if (mode == labouchere) {
								if (plantillaArrayLabouchere.length == 1 || plantillaArrayLabouchere == 2) {
									plantillaArrayLabouchere = base_array;
								} else {
									console.log(plantillaArrayLabouchere);
									plantillaArrayLabouchere.shift();
									plantillaArrayLabouchere.pop();
								}
								console.log(plantillaArrayLabouchere);
							}

							if (balance_actual.textContent > objetivoGanancias) {
								console.log("OBJETIVO CUMPLIDO. PUEDES DESCANSAR");
								apostarHabilitado = false;
							}

						} else {
							console.log("*** (ಥ﹏ಥ) APUESTA PERDIDA. (ಥ﹏ಥ) ***");
							numeroDeVecesQuePerdimos += 1;
							if (mode == labouchere) {
								if (plantillaArrayLabouchere.length == 1) {
									plantillaArrayLabouchere.push(plantillaArrayLabouchere[0]);
								} else {
									plantillaArrayLabouchere.push(plantillaArrayLabouchere[0] + plantillaArrayLabouchere[plantillaArrayLabouchere.length - 1]);
								}
								console.log(plantillaArrayLabouchere);
							}
						}
						console.log('***** Dinero acumulado: ' + dineroGanado);
						++totalTiradas;
					}

					console.log('opcionQueSalio: ' + opcionQueSalio + ', opcionQueSalioAntes: ' + opcionQueSalioAntes);
					if (((mode == martingala || mode == labouchere) && opcionQueSalio) ||
						(mode == martingalaColumnas1 || mode == martingalaColumnas2) && opcionQueSalio && opcionQueSalioAntes && opcionQueSalio != opcionQueSalioAntes) {
						primeraVez = false;
					}
					estado = 'esperandoParaApostar';
					opcionEscogida = opcionQueSalio;
					opcionQueSalioAntes = opcionQueSalio;

				}
			}
		}
	}
}, 1000);

var getCantidadAApostar = () => {
	let v = 0;
	if (numeroDeVecesQuePerdimos > 0) {
		if (mode == martingala || mode == martingalaColumnas1 || mode == martingalaColumnas2) {
			v = base_array[0];

			for (let i = 0; i < numeroDeVecesQuePerdimos; i++) {
				v *= 2;
			}
		} else if (mode == labouchere) {
			v = plantillaArrayLabouchere[0] + plantillaArrayLabouchere[plantillaArrayLabouchere.length - 1];
		}
	} else {
		v = plantillaArray[0];
	}

	console.log('Número de veces que perdimos: ' + numeroDeVecesQuePerdimos + '-------- Importe apuesta: ' + v)

	return v;
}

var getColFromNum = n => {
	if (n >= 1 && n <= 12) {
		return "col1";
	}
	else if (n >= 13 && n <= 24) {
		return "col2";
	}
	else if (n >= 25 && n <= 34) {
		return "col3";
	}
	return null;
}