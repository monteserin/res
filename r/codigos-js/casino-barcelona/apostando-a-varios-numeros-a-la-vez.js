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
var plantillaArray = [1];
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
var cantidadAAPostarTotal  = 0;
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

//var obj1 = document.querySelector('[data-bet-spot-id="1"]');
//var obj2 = document.querySelector('[data-bet-spot-id=red]');
//simulateClick(obj1)
/*
var simulateClickOnSVG = function (elem){
	elem.dispatchEvent(new MouseEvent('click'));

	document.querySelector('[data-bet-spot-id="1"]').dispatchEvent(new 
		MouseEvent('click'));

}
*/
var getNumerosALosQueApostar = n => {
	
	const numerosAApostar = [
		[0,1,2,3,4,7,10,11,13,14,16,17,20,21,22,23,26,24,27,30,31,33,34,36], // 0
		[0,1,4,7,5,8,11,14,17,15,18,21,24,27,25,28,30,31,34,33,36], // 1
		[0,2,5,8,6,9,12,15,16,18,19,20,22,25,28,31,26,29,32,35], // 2
		[0,3,6,9,7,8,10,13,16,17,19,20,23,26,27,29,30,33,36], // 3
		[0,1,4,7,10,8,11,14,17,18,21,24,27,30,33,36,34,31,28], // 4
		[0,2,5,8,9,10,11,12,15,18,19,21,22,25,28,31,35,32,29,30], // 5
		[0,3,6,9,10,12,13,16,19,20,23,26,29,30,33,36,34], // 6
		[0,1,4,7,10,11,13,14,17,20,21,23,24,27,30,33,28,29,36], // 7
		[0,1,2,5,6,8,9,11,14,16,19,22,18,26,29,28,30,36], // 8
		[0,1,3,6,9,11,12,13,15,16,18,19,22,23,25,26,29,30,32,33,35,36], // 9
		[0,4,5,7,10,13,15,16,14,17,20,23,25,26,24,27,30,33,36,35], // 10
		[0,1,5,8,9,11,13,14,16,17,18,22,26,28,29,30,33,36], // 11
		[0,2,5,6,8,9,11,12,13,15,18,21,22,23,24,28,31,32,33,35], // 12
		[0,3,6,7,10,12,13,16,19,21,22,23,26,27,28,29,31,32,33,36], // 13
		[0,1,4,7,10,8,11,14,17,18,21,24,27,30,33,36,34,31,28], // 14
		[0,2,5,8,9,10,11,12,15,18,19,21,22,25,28,31,35,32,29,30], // 15
		[0,6,9,10,11,13,16,18,19,22,23,25,26,29,30,31,32,33,36], // 16
		[0,1,4,7,10,11,13,14,17,20,21,23,24,27,30,33,28,29,36], // 17
		[0,1,9,11,12,15,16,18,21,22,24,28,29,30,33,36], // 18
		[0,4,6,8,9,11,13,15,19,22,25,26,29,33,36], // 19
		[0,1,2,10,14,17,20,23,26,28,29,30,32,35], // 20
		[0,1,2,4,11,12,13,15,18,21,22,23,24,27,30,31,32,33,36], // 21
		[0,1,2,9,11,16,18,19,21,22,23,24,25,28,30,31,32,33,36], // 22
		[0,3,8,10,11,12,13,16,17,20,21,22,23,25,26,29,31,32,33,35,36], // 23
		[0,4,5,8,11,14,16,17,18,20,21,22,24,25,27,30,33,34,35,36], // 24
		[0,2,5,8,9,10,11,12,15,18,19,21,22,25,28,31,35,32,29,30], // 25
		[0,3,6,9,11,13,16,19,20,23,26,29,31,32,33,34,36], // 26
		[0,6,7,13,17,21,24,27,30,33,36], // 27
		[0,6,7,8,9,11,12,14,18,16,19,22,25,26,28,29,30,33,31,34,36], // 28
		[0,6,7,8,9,11,13,16,18,19,22,23,28,26,29,31,32,33,35,36], // 29
		[0,1,3,5,8,9,10,11,15,16,18,20,22,25,24,27,28,30,33,35,36], // 30
		[0,1,11,12,13,21,22,23,25,26,28,29,31,32,33,34], // 31
		[0,2,12,13,15,16,21,22,23,25,26,29,31,32,33,35,36], // 32
		[0,1,3,4,9,11,13,16,18,21,22,23,26,27,28,29,30,31,32,33,36], // 33
		[0,1,4,6,13,14,17,20,24,26,27,28,29,31,34,36], // 34
		[0,3,5,8,11,12,15,16,18,23,25,26,28,29,30,32,33,35], // 35
		[0,1,4,6,9,11,13,16,18,22,24,26,27,28,29,30,33,36] // 36
	];
	return numerosAApostar[n];
}
Array.prototype.clone = function () {
	return this.slice(0);
};

var seleccionarOpcionApuesta = function () {
	opcionEscogida = getNumerosALosQueApostar(opcionQueSalio);
	/*if (opcionQueSalio.toLowerCase() != 'verde') {
		opcionEscogida = opcionQueSalio;
	}*/
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

var getBotonParaApostarEnFuncionDelLaOpcionALaQueApostar = n =>{
	const btn = document.querySelector('[data-bet-spot-id="'+n+'"]');
	return btn;
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


	/*btnParaApostarEscogido = btnParaApostar_red;
	if (opcionEscogida == 'Negro') {
		btnParaApostarEscogido = btnParaApostar_black;
	}*/

	btnParaApostarEscogido = getBotonParaApostarEnFuncionDelLaOpcionALaQueApostar(opcionEscogida);

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
		// Seleccionamos la cantidad a apostar
		simulateClick(btnApuestaDinero);
	}
	// pulsamos sobre el botón de apuesta
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
					cantidadAApostar = getCantidadAApostar();

					if (maximaApuestaDeLaTirada < cantidadAApostar) {
						maximaApuestaDeLaTirada = cantidadAApostar;
					}
					if (cantidadAApostar > stoploss ) {
						++numeroDeTiradasPerdidasSeguidas;
						if (numeroDeTiradasPerdidasSeguidas >= 1) {
						//	console.log('apuestas: ' + apuestas)
						//	console.log("Dinero perdido en el Array: " + cantidadAAPostarTotal)
							dineroGanado -= cantidadAAPostarTotal;

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
						var c = 0;
						cantidadAAPostarTotal = opcionEscogida.reduce((total, obj) =>total+plantillaArray[0],0 );
						console.log('-------------------------------------------------');
						console.log("Números por los que apostamos: " + opcionEscogida.join(','))
						console.log('Cantidad a apostar:' + cantidadAAPostarTotal + ' €.');
						console.log('-------------------------------------------------');

						opcionEscogida.map( nAApostar => {
							apostar(nAApostar);
						});
						
						
						estado = 'esperandoParaVerSiGane';
					}

				}
			} else {
				if (!letrerosParaEsperar.includes(letreroTxt) && estado == 'esperandoParaVerSiGane') {
					var fichaGanadora = letreroTxt;
					var res = fichaGanadora.split(" ");
					opcionQueSalio = res[0];
					dineroGanado -= cantidadAAPostarTotal;
					gestionRepetidos(res[0], res[1]);

					if (!primeraVez) {

						if (evaluarApuesta(opcionQueSalio, opcionEscogida)) {
							var dineroGanadoEnEsteGiro = 36-cantidadAAPostarTotal;
							dineroGanado +=36

							console.log("APUESTA GANADA. Salió: " + opcionQueSalio + ", Opcion para apostar escogida: " + opcionEscogida + ' Cantidad ganada: ' + dineroGanadoEnEsteGiro + ' €');
							if (apuestas.length == 0) {

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
							console.log("APUESTA PERDIDA. Salió: " + opcionQueSalio + ", Aposté por: " + opcionEscogida + '. Cantidad Perdida: ' + cantidadAAPostarTotal + ' €');
							primeraVez = false;
						}
						console.log('***** Dinero acumulado: ' + dineroGanado);
					
						++totalTiradas;
					}
					estado = 'esperandoParaApostar';
				}
			}
		}
	}
}, 1000);

var getCantidadAApostar = apuestas => {
	/*if (apuestas.length >= 2) {
		return apuestas[0] + apuestas[apuestas.length - 1];
	} else if (apuestas.length == 1) {
		return apuestas[0];
	}*/


	return plantillaArray[0];
}

var evaluarApuesta = (opcionQueSalio, opcionEscogida) => {

	if(opcionEscogida.includes(parseInt(opcionQueSalio)))return true;
	else return false;
	//console.log('evaluarApuesta: opcionQueSalio:' +opcionQueSalio + ', opcionEscogida:' + opcionEscogida)
	/*if (opcionQueSalio.toLowerCase() == opcionEscogida.toLocaleLowerCase()) {
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
	}*/
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