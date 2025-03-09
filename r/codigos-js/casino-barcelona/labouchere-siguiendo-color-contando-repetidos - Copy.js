// RECUENTO DE HORAS
/*
	- Ajustar labouchere para que siga el color en casino barcelona: 2 horas
	- Indicar cuando un número salió en las 4 últimas tiradas: 2 hora
	- Ajustar código para que funcione en casino net: 2horas 30 min -- OBJETIVO FALLIDO

	TOTAL HORAS: 4 horas 
	TOTAL ABONADO: 4 horas
	
*/
//=============================
var apostarHabilitado = true;
var plantillaArray = [0.5];
var stoploss = 500;
var longitudMaxArray = 300;

// ===========================================================

var btnParaApostar_red = document.querySelector('[data-bet-spot-id=red]');
var btnParaApostar_black = document.querySelector('[data-bet-spot-id=black]');

var btnParaApostar_50Centimos = document.querySelector('[data-role="chip"][data-value="0.5"]');
var btnParaApostar_1Euro = document.querySelector('[data-role="chip"][data-value="1"]');
var btnParaApostar_5Euros = document.querySelector('[data-role="chip"][data-value="5"]');
var btnParaApostar_25Euros = document.querySelector('[data-role="chip"][data-value="25"]');
//console.log(btnParaApostar_25Euros);
var btnParaApostar_100Euros = document.querySelector('[data-role="chip"][data-value="100"]');
var btnParaApostar_500Euros = document.querySelector('[data-role="chip"][data-value="500"]');

var identificadorLetrero = '[data-role=status-text]';
var letreroParaApostar = 'HAGA SUS APUESTAS';
var letrerosParaEsperar = ['APUESTAS CERCA DEL CIERRE', 'NO HAY MÁS APUESTAS', 'ESPERANDO LA SIGUIENTE PARTIDA', 'APUESTAS ACEPTADAS', 'CERRANDO APUESTAS', 'APUESTAS CERRADAS', 'NO MORE BETS'];

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


// =========================================================================================
var estado = 'esperandoParaVerSiGane';
var numeroDeTiradasPerdidasSeguidas = 0;
var totalTiradas = 0;
var totalAciertos = 0;
var apuestas = plantillaArray.slice(0); // 50 euros
var cantidadAApostar = 0;
var limiteDePerdidaRebasado = false;
var maximaApuestaDeLaTirada = 0;
var maximasApuestasDeLaSesion = [];
var opcionQueSalio = null;
var juegoActivo = true;
var dineroGanado = 0;
var primeraVez = true;
var intentos = 0;
var ultimaCombinacionRepetida = null;
var posRepetidos = 0;
var girosDesdeElUltimoRepetido = 0;
var repetidos = [];

// UTILS
var simulateClick = function (elem) {
	// Create Arrayour event (with options)
	var evt = new MouseEvent('click', {
		bubbles: true,
		cancelable: true,
		view: window
	});
	// If cancelled, don't dispatch our event
	var canceled = !elem.dispatchEvent(evt);
};


Array.prototype.clone = function () {
	return this.slice(0);
};

var seleccionarOpcionApuesta = function () {

	if (opcionQueSalio.toLowerCase() != 'verde') {
		opcionEscogida = opcionQueSalio;
	}
	return opcionEscogida;
}

var finGrupoTiradas = _ => {
	maximasApuestasDeLaSesion.push(maximaApuestaDeLaTirada);
	var valorMax = 0;
	maximasApuestasDeLaSesion.map(n => {
		if (n > valorMax) {
			valorMax = n;
		}
	});
	console.log('Valor máximo: ' + valorMax);
	console.log("MAXIMAS APUESTAS DE LA SESION: " + maximasApuestasDeLaSesion.join());
	maximaApuestaDeLaTirada = 0;
	apuestas = plantillaArray.slice(0);

}

var apostar = function (opcionEscogida) {
	var monedasDe50Centimos = 0;
	var monedasDe1Euro = 0;
	var monedasDe5Euro = 0;
	var monedasDe25Euro = 0;
	var monedasDe100Euro = 0;
	var monedasDe500Euro = 0;
	var cantidadAApostarAux = cantidadAApostar;
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
	if (btnParaApostar_50Centimos != null && Math.floor(cantidadAApostarAux / 0.5) > 0) {
		monedasDe50Centimos = Math.floor(cantidadAApostarAux / 0.5);
		cantidadAApostarAux = cantidadAApostarAux - monedasDe50Centimos * 100;
	}
	//	console.log('Monedas de 500 euros: ' + 0 + ', Monedas de 100 euros: ' + monedasDe100Euro + ' Monedas de 25 euros: ' + monedasDe25Euro + ', Monedas de 5 euros: ' + monedasDe5Euro + ', Monedas de 1 euro: ' + monedasDe1Euro + ', Monedas de 50 centimos: ' + monedasDe50Centimos);


	btnParaApostarEscogido = btnParaApostar_red;
	if (opcionEscogida == 'Negro') {
		btnParaApostarEscogido = btnParaApostar_black;
	}
	var tiempoRandom = Math.random() * 10000;
	setTimeout(function () {
		monedasDe500Euro > 0 ? hacerClick('500 €', monedasDe500Euro, btnParaApostar_500Euros, btnParaApostarEscogido) : null;
		monedasDe100Euro > 0 ? hacerClick('100 €', monedasDe100Euro, btnParaApostar_100Euros, btnParaApostarEscogido) : null;
		monedasDe25Euro > 0 ? hacerClick('25 €', monedasDe25Euro, btnParaApostar_25Euros, btnParaApostarEscogido) : null;
		monedasDe5Euro > 0 ? hacerClick('5 €', monedasDe5Euro, btnParaApostar_5Euros, btnParaApostarEscogido) : null;
		monedasDe1Euro > 0 ? hacerClick('1 €', monedasDe1Euro, btnParaApostar_1Euro, btnParaApostarEscogido) : null;
		monedasDe50Centimos > 0 ? hacerClick('50 centimos', monedasDe50Centimos, btnParaApostar_50Centimos, btnParaApostarEscogido) : null;
	}, 5000 + tiempoRandom);
}


var hacerClick = (tipoDeClick, numeroDeClicks, btnApuestaDinero, btnParaApostarEscogido) => {
	if (apostarHabilitado) {
		simulateClick(btnApuestaDinero);
	}
	for (var i = 0; i < numeroDeClicks; i++) {
		if (apostarHabilitado) {
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
			if (letreroTxt == letreroParaApostar) {
				if (estado == 'esperandoParaApostar' && opcionQueSalio != null) {
					primeraVez = false;
					cantidadAApostar = getCantidadAApostar(apuestas);

					if (maximaApuestaDeLaTirada < cantidadAApostar) {
						maximaApuestaDeLaTirada = cantidadAApostar;
					}
					if (cantidadAApostar > stoploss || apuestas.length > longitudMaxArray) {
						++numeroDeTiradasPerdidasSeguidas;
						if (numeroDeTiradasPerdidasSeguidas >= 1) {
							console.log('apuestas: ' + apuestas)
							var dineroPerdidoEnElArray = apuestas.reduce((acc, obj) => acc + obj, 0);
							console.log("Dinero perdido en el Array: " + dineroPerdidoEnElArray)
							dineroGanado -= dineroPerdidoEnElArray;

							console.log('*****************FIN DE JUEGO. Dinero acumulado: ' + dineroGanado);


							finGrupoTiradas();
							++intentos;
							console.log("NÚMERO DE INTENTOS FALLIDOS: " + intentos);
							if (intentos >= 2) {
								console.log("HAS PERDIDO 2 VECES. DESCANSA UN POCO POR HOY.");
								juegoActivo = false;
							}
						}
					} else {
						opcionEscogida = seleccionarOpcionApuesta();
						console.log('Cantidad a apostar:' + cantidadAApostar + ' €. =================== Array de apuestas: ' + apuestas.join(' -- '));
						apostar(opcionEscogida);
						estado = 'esperandoParaVerSiGane';
					}

				}
			} else {
				if (!letrerosParaEsperar.includes(letreroTxt) && estado == 'esperandoParaVerSiGane') {
					var fichaGanadora = letreroTxt;
					var res = fichaGanadora.split(" ");
					opcionQueSalio = res[1];

					gestionRepetidos(res[0], res[1]);

					if (!primeraVez) {

						if (evaluarApuesta(opcionQueSalio, opcionEscogida)) {
							console.log("APUESTA GANADA. Salió: " + opcionQueSalio + ", Opcion para apostar escogida: " + opcionEscogida + ' Cantidad ganada: ' + cantidadAApostar + ' €');
							if (apuestas.length == 0) {

								dineroGanado = dineroGanado + plantillaArray.reduce((dineroAcc, obj) => dineroAcc + obj, 0)
								console.log('ARRAY DE APUESTAS COMPLETADO - VOLVEMOS A EMPEZAR. Dinero ganado = ' + dineroGanado);
								/*
								if(dineroGanado == apuesta*6){
									console.log("==================================");
									console.log('OBJETIVO DE DINERO GANADO CUMPLIDO');
									console.log("==================================");
									juegoActivo = false;
								}
								*/
								finGrupoTiradas();
								primeraVez = false;
							}
						} else {
							console.log("APUESTA PERDIDA. Salió: " + opcionQueSalio + ", Aposté por: " + opcionEscogida + '. Cantidad Perdida: ' + cantidadAApostar + ' €');
							primeraVez = false;
						}
						++totalTiradas;
					}
					estado = 'esperandoParaApostar';
				}
			}
		}
	}
}, 1000);

var getCantidadAApostar = apuestas => {
	if (apuestas.length >= 2) {
		/*console.log('array de apuestas en el momento de obtener la cantidad a apostar: ');
		console.log(apuestas);
		console.log(' apuestas[apuestas.length - 1]: '+apuestas[apuestas.length - 1])*/
		return apuestas[0] + apuestas[apuestas.length - 1];
	} else if (apuestas.length == 1) {
		return apuestas[0];
	}
}

var evaluarApuesta = (opcionQueSalio, opcionEscogida) => {
	if (opcionQueSalio.toLowerCase() == opcionEscogida.toLocaleLowerCase()) {
		if (apuestas.length >= 2) {
			apuestas.splice(0, 1);
			apuestas.splice(apuestas.length - 1, 1);
		} else if (apuestas.length == 1) {
			apuestas.splice(0, 1);
		}
		++totalAciertos;
		return true;
	} else {
		apuestas.push(cantidadAApostar);
		return false;
	}
}

var gestionRepetidos = (nQueSalio, colorQueSalio) => {


	var combinacionQueSalio = nQueSalio + ' ' + colorQueSalio;
	//repetidos = ['13 Rojo', '9 Negro', '8 Rojo', '5 Negro'];
	//combinacionQueSalio = '9 Negro';
	// Buscamos si el número ya salió en las últimas 4 tiradas

	repetidos.forEach(n => {
		if (combinacionQueSalio == n) {
			ultimaCombinacionRepetida = combinacionQueSalio;
			girosDesdeElUltimoRepetido = 0;
			console.log('**** HAY UN NUEVO NÚMERO QUE HA SALIDO REPETIDO EN ESTE GIRO: ' + combinacionQueSalio);
		}
	});

	repetidos[posRepetidos] = combinacionQueSalio;

	if (ultimaCombinacionRepetida != null) {
		console.log('Van ' + girosDesdeElUltimoRepetido + ' desde la última vez que salió el ' + ultimaCombinacionRepetida);
		++girosDesdeElUltimoRepetido;
	}


	if (++posRepetidos > 3) {
		posRepetidos = 0;
	}
	console.log('Números que salieron en las 4 últimas tiradas: ' + repetidos.join(' -- '));

}