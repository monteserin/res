
var apostarHabilitado = true;
var apuesta = 1;
var plantillaArray = [apuesta];
var stoploss = 3000;
var longitudMaxArray =3; 

// ===========================================================
var btnParaApostar_red = document.querySelector('[data-id=red]');
var btnParaApostar_black = document.querySelector('[data-id=black]');

//var btnParaApostar_50Centimos = document.querySelector('.chip--NrbrM:nth-of-type(2)');
var btnParaApostar_1Euro = document.querySelector('.Chip_yellow_3DAOA');
var btnParaApostar_5Euros = document.querySelector('.Chip_red_2PdQZ');
var btnParaApostar_25Euros = document.querySelector('.Chip_blue_2zyvu');
var btnParaApostar_50Euros = document.querySelector('.Chip_green_l17VV');
 
var btnParaApostar_100Euros = document.querySelector('.Chip_navy_39Ve4');
var btnParaApostar_500Euros = document.querySelector('.Chip_purple_31aU_');
var identificadorLetrero = '.BettingArea_infobar_Cm_iY';
var letreroParaApostar = 'PLACE YOUR BETS';
var letrerosParaEsperar = ['APUESTAS CERCA DEL CIERRE', 'NO HAY MÁS APUESTAS', 'ESPERANDO LA SIGUIENTE PARTIDA','APUESTAS ACEPTADAS','CERRANDO APUESTAS', 'APUESTAS CERRADAS', 'NO MORE BETS'];

// =========================================================================================
// COMPROBACIONES

if(document.querySelector(identificadorLetrero) == null){
	console.warn('OJO!!! no se está cogiendo el letrero');
}

if(btnParaApostar_red == null){
	console.warn('OJO!!! no se está cogiendo el botón para apostar a rojo');
}

if(btnParaApostar_black == null){
	console.warn('OJO!!! no se está cogiendo el botón para apostar a negro');
}

if(btnParaApostar_1Euro == null){
	console.warn('OJO!!! no se está cogiendo el botón para apostar 1 euro');
}

if(btnParaApostar_5Euros == null){
	console.warn('OJO!!! no se está cogiendo el botón para apostar 5 euros');
}

if(btnParaApostar_25Euros == null){
	console.warn('OJO!!! no se está cogiendo el botón para apostar 25 euros');
}

if(btnParaApostar_50Euros == null){
	console.warn('OJO!!! no se está cogiendo el botón para apostar 50 euros');
}

if(btnParaApostar_100Euros == null){
	console.warn('OJO!!! no se está cogiendo el botón para apostar 100 euros');
}

if(btnParaApostar_500Euros == null){
	console.warn('OJO!!! no se está cogiendo el botón para apostar 500 euros');
}


// =========================================================================================
var estado = 'esperandoParaApostar';
var numeroDeTiradasPerdidasSeguidas = 0;
var totalTiradas = 0;
var totalAciertos = 0;
var apuestas = plantillaArray.slice(0); // 50 euros
var cantidadAApostar = 0;
var limiteDePerdidaRebasado = false;
var maximaApuestaDeLaTirada = 0;
var maximasApuestasDeLaSesion = [];
var opcionQueSalio = 'Negro';
var juegoActivo = true;
var dineroGanado = 0;

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
	
	if( opcionQueSalio.toLowerCase() != 'verde'){
		opcionEscogida = opcionQueSalio;
	}
		return opcionEscogida;
}

var finGrupoTiradas = _ => {
	maximasApuestasDeLaSesion.push(maximaApuestaDeLaTirada);
	var valorMax = 0;
	maximasApuestasDeLaSesion.map( n => {
		if( n > valorMax){
			valorMax = n;
		}
	});
	console.warn('Valor máximo: ' + valorMax);
	console.warn("MAXIMAS APUESTAS DE LA SESION: " + maximasApuestasDeLaSesion.join());
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
	if (Math.floor(cantidadAApostarAux / 500) > 0) {
		monedasDe500Euro = Math.floor(cantidadAApostarAux / 500);
		cantidadAApostarAux = cantidadAApostarAux - monedasDe500Euro * 500;
	}
	if (Math.floor(cantidadAApostarAux / 100) > 0) {
		monedasDe100Euro = Math.floor(cantidadAApostarAux / 100);
		cantidadAApostarAux = cantidadAApostarAux - monedasDe100Euro * 100;
	}
	if (Math.floor(cantidadAApostarAux / 25) > 0) {
		monedasDe25Euro = Math.floor(cantidadAApostarAux / 25);
		cantidadAApostarAux = cantidadAApostarAux - monedasDe25Euro * 25;
	}
	if (Math.floor(cantidadAApostarAux / 5) > 0) {
		monedasDe5Euro = Math.floor(cantidadAApostarAux / 5);
		cantidadAApostarAux = cantidadAApostarAux - monedasDe5Euro * 5;
	}
	if (Math.floor(cantidadAApostarAux / 1) > 0) {
		monedasDe1Euro = Math.floor(cantidadAApostarAux / 1);
		cantidadAApostarAux = cantidadAApostarAux - monedasDe1Euro;
	}
	if (Math.floor(cantidadAApostarAux / 0.5) > 0) {
		monedasDe50Centimos = Math.floor(cantidadAApostarAux / 0.5);
		cantidadAApostarAux = cantidadAApostarAux - monedasDe50Centimos * 100;
	}
	//	console.warn('Monedas de 500 euros: ' + 0 + ', Monedas de 100 euros: ' + monedasDe100Euro + ' Monedas de 25 euros: ' + monedasDe25Euro + ', Monedas de 5 euros: ' + monedasDe5Euro + ', Monedas de 1 euro: ' + monedasDe1Euro + ', Monedas de 50 centimos: ' + monedasDe50Centimos);
	

		btnParaApostarEscogido = btnParaApostar_red;
		if (opcionEscogida == 'Negro') {
			btnParaApostarEscogido = btnParaApostar_black;
		}
			var tiempoRandom = Math.random()*10000;
	setTimeout(function () {
		if(btnParaApostar_500Euros != null){
			monedasDe500Euro > 0 ? hacerClick('500 €', monedasDe500Euro, btnParaApostar_500Euros, btnParaApostarEscogido) : null;

		}
		
		if(btnParaApostar_100Euros != null){
			monedasDe100Euro > 0 ? hacerClick('100 €', monedasDe100Euro, btnParaApostar_100Euros, btnParaApostarEscogido) : null;
		}
		
		if(btnParaApostar_25Euros != null){
			monedasDe25Euro > 0 ? hacerClick('25 €', monedasDe25Euro, btnParaApostar_25Euros, btnParaApostarEscogido) : null;

		}
		
		if(btnParaApostar_5Euros != null){
			monedasDe5Euro > 0 ? hacerClick('5 €', monedasDe5Euro, btnParaApostar_5Euros, btnParaApostarEscogido) : null;
		}
		
		if(btnParaApostar_1Euro != null){
			monedasDe1Euro > 0 ? hacerClick('1 €', monedasDe1Euro, btnParaApostar_1Euro, btnParaApostarEscogido) : null;

		}

		if(btnParaApostar_50Centimos != null){
			monedasDe50Centimos > 0 ? hacerClick('50 centimos', monedasDe50Centimos, btnParaApostar_50Centimos, btnParaApostarEscogido) : null;

		}
		
	}, 5000 + tiempoRandom);
}


var hacerClick = (tipoDeClick, numeroDeClicks, btnApuestaDinero, btnParaApostarEscogido) => {
	if (apostarHabilitado) {
		console.warn('llega a hacer click1: ' + btnApuestaDinero)

		simulateClick(btnApuestaDinero);
	}
	for (var i = 0; i < numeroDeClicks; i++) {
		if (apostarHabilitado) {
			console.warn('llega a hacer click2:' +btnParaApostarEscogido )

			simulateClick(btnParaApostarEscogido);
		}
	}
}

var hemosApostado = false;

var miIntervalo = setInterval(() => {
	if(juegoActivo){
		estadoLetrero = document.querySelector(identificadorLetrero);
		if (estadoLetrero != null) {
			var letreroTxt = estadoLetrero.textContent;
			// El momento de hacer la apuesta
			if (letreroTxt == letreroParaApostar) {
				if (estado == 'esperandoParaApostar' && !hemosApostado) {
                    hemosApostado = true;
					cantidadAApostar = getCantidadAApostar(apuestas);
					
					if (maximaApuestaDeLaTirada < cantidadAApostar) {
						maximaApuestaDeLaTirada = cantidadAApostar;
					}
					if (cantidadAApostar > stoploss || apuestas.length > longitudMaxArray) {
						++numeroDeTiradasPerdidasSeguidas;
						if (numeroDeTiradasPerdidasSeguidas >= 1) {
							console.warn('apuestas: ' + apuestas)
							var dineroPerdidoEnElArray = apuestas.reduce( (acc, obj ) =>  acc + obj, 0);
							console.warn("Dinero perdido en el Array: " + dineroPerdidoEnElArray)
							dineroGanado -= dineroPerdidoEnElArray;

							console.warn('*****************FIN DE JUEGO. Dinero acumulado: ' + dineroGanado);
							finGrupoTiradas();

						}
						} else {
							
							opcionEscogida = seleccionarOpcionApuesta();
							console.warn('Cantidad a apostar:' + cantidadAApostar + ' €. =================== Array de apuestas: ' + apuestas.join(' -- '));
							apostar(opcionEscogida);
							estado = 'esperandoParaVerSiGane';	
						}
						
					}
				} else  {
					if( !letrerosParaEsperar.includes(letreroTxt) && estado == 'esperandoParaVerSiGane'){
					 
						// El momento de evaluar el resultado
						var fichaGanadora = letreroTxt;
						var res = fichaGanadora.split(" ");
						opcionQueSalio = res[1];
						
						if( opcionQueSalio.toLowerCase() != 'verde'){
							opcionEscogida = opcionQueSalio;
						}
		
						if(evaluarApuesta(opcionQueSalio, opcionEscogida)){
							console.warn("APUESTA GANADA. Salió: " + opcionQueSalio + ", Opcion para apostar escogida: " + opcionEscogida + ' Cantidad ganada: ' + cantidadAApostar + ' €');
							if (apuestas.length == 0) {
								dineroGanado += apuesta;
								console.warn('ARRAY DE APUESTAS COMPLETADO - VOLVEMOS A EMPEZAR. Dinero ganado = ' + dineroGanado);
/*
								if(dineroGanado == apuesta*6){
									console.warn("==================================");
									console.warn('OBJETIVO DE DINERO GANADO CUMPLIDO');
									console.warn("==================================");
									juegoActivo = false;
								}
																*/

								finGrupoTiradas();
							}
						}else{
							console.warn("APUESTA PERDIDA. Salió: " + opcionQueSalio + ", Aposté por: " + opcionEscogida + '. Cantidad Perdida: ' + cantidadAApostar + ' €');
						}
						++totalTiradas;
					
						estado = 'esperandoParaApostar';
					}
				}
						
			}
		}
		}, 1000);
		
		var getCantidadAApostar = apuestas => {
			if (apuestas.length >= 2) {
				/*console.warn('array de apuestas en el momento de obtener la cantidad a apostar: ');
				console.warn(apuestas);
				console.warn(' apuestas[apuestas.length - 1]: '+apuestas[apuestas.length - 1])*/
				return apuestas[0] + apuestas[apuestas.length - 1];
			} else if (apuestas.length == 1) {
				return apuestas[0];
			}

		}
		
		var evaluarApuesta = (opcionQueSalio, opcionEscogida) =>{
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