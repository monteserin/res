//=============================
/*
Saldo min: 16
Retirar 20€ al llegar a 36
*/
const apostarHabilitado = true;
const base_array = [0.5];
/*
var stoploss = 4;
var objetivoGanancias = 36;
var mode = martingalaColumnas1;
*/
const stoploss = 888888888;
let cantidadDeDineroAPartirDeLaQueFraccionoLasApuestas = 256;
const objetivoGanancias = 36;
const mode = 'martingalaLabouchere'; //martingala, labouchere,martingalaUltimaColumnaQueSalio,martingalaUltimas2ColumnasQueSalieron
let tiradasPerdidasConsecutivas = 0;
let vecesQueHemosPerdido2VecesSeguidas = 0;
let vecesQueHemosPerdido3VecesSeguidas = 0;
let vecesQueHemosPerdido4VecesSeguidas = 0;
let vecesQueHemosPerdido5VecesSeguidas = 0;
let vecesQueHemosPerdido6VecesSeguidas = 0;
let vecesQueHemosPerdido7VecesSeguidas = 0;
let vecesQueHemosPerdido8VecesSeguidas = 0;
let vecesQueHemosPerdido9VecesSeguidas = 0;
let vecesQueHemosPerdido10VecesSeguidas = 0;
let vecesQueHemosPerdido11VecesSeguidas = 0;
let vecesQueHemosPerdido12VecesSeguidas = 0;
let vecesQueHemosPerdido13VecesSeguidas = 0;
let vecesQueHemosPerdido14VecesSeguidas = 0;




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

var letreroParaApostar = 'HAGA SUS APUESTAS';
var letrerosParaEsperar = ['APUESTAS CERCA DEL CIERRE', 'NO HAY MÁS APUESTAS', 'ESPERANDO LA SIGUIENTE PARTIDA', 'APUESTAS ACEPTADAS', 'CERRANDO APUESTAS', 'CERRANDO APUESTAS 1', 'CERRANDO APUESTAS 2', 'CERRANDO APUESTAS 3', 'CERRANDO APUESTAS 4', 'CERRANDO APUESTAS 5', 'CERRANDO APUESTAS 6', 'APUESTAS CERRADAS', 'NO MORE BETS'];
var numeroDeVecesQuePerdimos = 0;
// =========================================================================================
// COMPROBACIONES

if (letrero == null) {
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
let estado = 'esperandoParaVerSiGane';
let estadoLetreroTxt = null;
let arrayDeApuestas = [base_array[0]];
let numeroDeTiradasPerdidasSeguidas = 0;
let numeroDeTiradasGanadas = 0;
let totalTiradas = 0;
let totalAciertos = 0;
let apuestas = arrayDeApuestas.slice(0); // 50 euros
let cantidadAApostar = 0;
let cantidadAApostarMax = 0;
let limiteDePerdidaRebasado = false;
let maximaApuestaDeLaTirada = 0;
let perdidasActuales = 0;
let maximaCantidadPerdidaDebidoALasSucesivasApuestas = 0;
let maximasApuestasDeLaSesion = [];
let juegoActivo = true;
let dineroGanado = 0;
let primeraVez = true;
let intentos = 0;
let ultimaCombinacionRepetida = null;
let posRepetidos = 0;
let girosDesdeElUltimoRepetido = 0;
let repetidos = [];
let plantillaArrayLabouchere = arrayDeApuestas;

let opcionQueSalio = null;
let opcionQueSalioAntes = null;
let opcionEscogida = null;
let balanceSimulacion = 0;


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

const finGrupoTiradas = () => {
	maximaApuestaDeLaTirada = 0;
	apuestas = arrayDeApuestas.slice(0);
}

const getBotonParaApostarEnFuncionDelLaOpcionALaQueApostar = () => {

	const botonesDeApuestas = [];

	if (mode === 'martingalaColumnas1' || mode === 'martingalaColumnas2') {

		if (opcionQueSalio == "col1") {
			botonesDeApuestas.push(btnParaApostar_col1);
		}
		else if (opcionQueSalio == "col2") {
			botonesDeApuestas.push(btnParaApostar_col2);
		}
		else {
			botonesDeApuestas.push(btnParaApostar_col3);
		}

		if (mode === 'martingalaColumnas2') {
			if (opcionQueSalioAntes === "col1") {
				botonesDeApuestas.push(btnParaApostar_col1);
			}
			else if (opcionQueSalioAntes === "col2") {
				botonesDeApuestas.push(btnParaApostar_col2);
			}
			else if (opcionQueSalioAntes === "col3") {
				botonesDeApuestas.push(btnParaApostar_col3);
			}
		}

		//	botonesDeApuestas.push(btnParaApostar_col2);
	} else {// seguimos el color
		if (opcionQueSalio === black_text) {
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


const hacerClickEnCantidadAApostar = (tipoDeClick, numeroDeClicks, btnApuestaDinero, btnParaApostarEscogido) => {
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

const hacerClickEnOpcionDeApuesta = (numeroDeClicks, btnParaApostarEscogido, apostarHabilitado) => {
	for (var i = 0; i < numeroDeClicks; i++) {
		if (apostarHabilitado) {
			console.warn('btnParaApostarEscogido: ' + btnParaApostarEscogido.getAttribute('data-bet-spot-id'));

			simulateClick(btnParaApostarEscogido);
		}
	}
}


const miIntervalo = setInterval(() => {
	if (juegoActivo) {
		const letreroTxt = letrero.textContent;

		if (letreroTxt != estadoLetreroTxt) {
			estadoLetreroTxt = letreroTxt;
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
				console.log('2222222222222222')
				if (!letrerosParaEsperar.includes(letreroTxt) && estado == 'esperandoParaVerSiGane') {
					console.log('111111111111111111111111')
					var fichaGanadora = letreroTxt;
					var res = fichaGanadora.split(" ");
					numeroQueSalio = res[0];
					colorQueSalio = res[1];
					console.log('color que salio: ' + colorQueSalio)
					if (mode === 'martingala' || mode === 'labouchere' || mode === 'martingalaLabouchere') {
						opcionQueSalio = colorQueSalio;
					} else if (mode === 'martingalaColumnas1' || mode === 'martingalaColumnas2') {
						opcionQueSalioAntes = opcionQueSalio;
						opcionQueSalio = getColFromNum(numeroQueSalio);
					}
					if (!primeraVez) {

						console.log('opcionEscogida: ' + opcionEscogida + ', opcionQueSalio: ' + opcionQueSalio)
						if (opcionEscogida == opcionQueSalio) {
							console.log("*** ٩(^‿^)۶ APUESTA GANADA ٩(^‿^)۶ ***");
							tiradasPerdidasConsecutivas = 0;
							perdidasActuales = 0;
							if (ultimaApuestaP) {
								ultimaApuestaP.textContent = 'GANADA';
								letrero.textContent = letrero.textContent + ' GANADA';
							}
							numeroDeVecesQuePerdimos = 0;
							numeroDeTiradasGanadas++;
							if (mode === 'martingala') {
								// dineroGanado = numeroDeTiradasGanadas * plantillaArray.slice(0);
							} else if (mode === 'martingalaLabouchere') {
								if (arrayDeApuestas.length > 1) {
									arrayDeApuestas.shift(0);
								}
							} else if (mode === 'labouchere') {
								if (plantillaArrayLabouchere.length == 1 || plantillaArrayLabouchere == 2) {
									plantillaArrayLabouchere = base_array;
								} else {
									console.log(plantillaArrayLabouchere);
									plantillaArrayLabouchere.shift();
									plantillaArrayLabouchere.pop();
								}
								console.log(plantillaArrayLabouchere);
							}

							if (balance_actual && balance_actual.textContent > objetivoGanancias) {
								console.log("OBJETIVO CUMPLIDO. PUEDES DESCANSAR");
								apostarHabilitado = false;
							}
							balanceSimulacion = balanceSimulacion + cantidadAApostar;

						} else {
							console.log("*** (ಥ﹏ಥ) APUESTA PERDIDA. (ಥ﹏ಥ) ***");
							dineroGanado = dineroGanado - cantidadAApostar;
							if (maximaCantidadPerdidaDebidoALasSucesivasApuestasP) {
								perdidasActuales = perdidasActuales + cantidadAApostar;
								if (maximaCantidadPerdidaDebidoALasSucesivasApuestas < perdidasActuales) {
									maximaCantidadPerdidaDebidoALasSucesivasApuestas = perdidasActuales;
									maximaCantidadPerdidaDebidoALasSucesivasApuestasP.textContent = maximaCantidadPerdidaDebidoALasSucesivasApuestas;
								}

							}
							if (ultimaApuestaP) {
								ultimaApuestaP.textContent = 'PERDIDA';
								tiradasPerdidasConsecutivas++;
								if (tiradasPerdidasConsecutivas == 2) {
									vecesQueHemosPerdido2VecesSeguidas++;
									vecesQueHemosPerdido2VecesSeguidasP.textContent = vecesQueHemosPerdido2VecesSeguidas;
								} else if (tiradasPerdidasConsecutivas == 3) {
									vecesQueHemosPerdido3VecesSeguidas++;
									vecesQueHemosPerdido3VecesSeguidasP.textContent = vecesQueHemosPerdido3VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 4) {
									vecesQueHemosPerdido4VecesSeguidas++;
									vecesQueHemosPerdido4VecesSeguidasP.textContent = vecesQueHemosPerdido4VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 5) {
									vecesQueHemosPerdido5VecesSeguidas++;
									vecesQueHemosPerdido5VecesSeguidasP.textContent = vecesQueHemosPerdido5VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 6) {
									vecesQueHemosPerdido6VecesSeguidas++;
									vecesQueHemosPerdido6VecesSeguidasP.textContent = vecesQueHemosPerdido6VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 7) {
									vecesQueHemosPerdido7VecesSeguidas++;
									vecesQueHemosPerdido7VecesSeguidasP.textContent = vecesQueHemosPerdido7VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 8) {
									vecesQueHemosPerdido8VecesSeguidas++;
									vecesQueHemosPerdido8VecesSeguidasP.textContent = vecesQueHemosPerdido8VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 9) {
									vecesQueHemosPerdido9VecesSeguidas++;
									vecesQueHemosPerdido9VecesSeguidasP.textContent = vecesQueHemosPerdido9VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 10) {
									vecesQueHemosPerdido10VecesSeguidas++;
									vecesQueHemosPerdido10VecesSeguidasP.textContent = vecesQueHemosPerdido10VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 11) {
									vecesQueHemosPerdido11VecesSeguidas++;
									vecesQueHemosPerdido11VecesSeguidasP.textContent = vecesQueHemosPerdido11VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 12) {
									vecesQueHemosPerdido12VecesSeguidas++;
									vecesQueHemosPerdido12VecesSeguidasP.textContent = vecesQueHemosPerdido12VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 13) {
									vecesQueHemosPerdido13VecesSeguidas++;
									vecesQueHemosPerdido13VecesSeguidasP.textContent = vecesQueHemosPerdido13VecesSeguidas;
								}
								if (tiradasPerdidasConsecutivas == 14) {
									vecesQueHemosPerdido14VecesSeguidas++;
									vecesQueHemosPerdido14VecesSeguidasP.textContent = vecesQueHemosPerdido14VecesSeguidas;
								}
							}

							numeroDeVecesQuePerdimos += 1;
							if (mode === 'labouchere') {
								if (plantillaArrayLabouchere.length == 1) {
									plantillaArrayLabouchere.push(plantillaArrayLabouchere[0]);
								} else {
									plantillaArrayLabouchere.push(plantillaArrayLabouchere[0] + plantillaArrayLabouchere[plantillaArrayLabouchere.length - 1]);
								}
								console.log(plantillaArrayLabouchere);
							}

							balanceSimulacion = balanceSimulacion - cantidadAApostar;

						}
						console.log('***** Dinero acumulado: ' + dineroGanado);
						if (balanceSimulacionP) {
							balanceSimulacionP.textContent = balanceSimulacion
						}
						if (cantidadAApostarP) cantidadAApostarP.textContent = '';

						++totalTiradas;
					}

					console.log('opcionQueSalio: ' + opcionQueSalio + ', opcionQueSalioAntes: ' + opcionQueSalioAntes);
					if (((mode === 'martingala' || mode === 'labouchere' || mode === 'martingalaLabouchere') && opcionQueSalio) ||
						(mode === 'martingalaColumnas1' || mode === 'martingalaColumnas2') && opcionQueSalio && opcionQueSalioAntes && opcionQueSalio != opcionQueSalioAntes) {
						primeraVez = false;
					}
					estado = 'esperandoParaApostar';
					opcionEscogida = opcionQueSalio;
					opcionQueSalioAntes = opcionQueSalio;

				}
			}
		}
	}
}, intervaloLeerLoQueEstaPasando);

const getCantidadAApostar = () => {
	let v = 0;
	if (numeroDeVecesQuePerdimos > 0) {
		if (mode === 'martingala' || mode === 'martingalaColumnas1' || mode === 'martingalaColumnas2') {
			v = base_array[0];

			for (let i = 0; i < numeroDeVecesQuePerdimos; i++) {
				v *= 2;
			}
		} else if (mode === 'labouchere') {
			v = plantillaArrayLabouchere[0] + plantillaArrayLabouchere[plantillaArrayLabouchere.length - 1];
		} else if (mode === 'martingalaLabouchere') {

			for (let i = 0; i < numeroDeVecesQuePerdimos; i++) {
				v *= 2;
			}


			if (v > cantidadDeDineroAPartirDeLaQueFraccionoLasApuestas) {
				v = v / 2;
				arrayDeApuestas.push(v);
				arrayDeApuestas.push(v);
				alert('limite excedido')
				console.error('eeeeeeeeeeeeee', arrayDeApuestas)
				if (baseArrayMax) baseArrayMax.textContent = arrayDeApuestas.map(o => o).join(',')

			}

		}
	} else {
		v = arrayDeApuestas[0];
	}
	console.log('Número de veces que perdimos: ' + numeroDeVecesQuePerdimos + '-------- Importe apuesta: ' + v)

	if (cantidadAApostarP) {
		cantidadAApostarP.textContent = v;
		if (cantidadAApostarMax < v) {
			cantidadAApostarMax = v;
			cantidadAApostarMaxP.textContent = cantidadAApostarMax;
		}
	}
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