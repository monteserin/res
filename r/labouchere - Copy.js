
// Algoritmo Labouchere
/*
1 - decidimos cuanto dinero queremos ganar. Si queremos ganar 2€, dividiremos esta cantidad en varias pequeñas tiradas tiradas: 0.5 – 1 – 0.5
No hay una forma buena o mala de establecer esta serie. Simplemente la suma del dinero jugado en cada tirada debe ser la cantidad de dinero que quieres ganar
2 - Sumamos el primer y último número de la secuencia anterior (en nuestro caso, 0.5 +0.5). El valor resultante será la cantidad que apostaremos en la primera apuesta (1€ en este caso).
3 - La segunda apuesta estará en función de si hemos ganado o no la primera:
- Si ganamos, volveremos a sumar el primer y último número de la serie tras haber eliminado de la misma las cantidades que acabamos de apostar ( 2 - 1). En este caso, apostaremos 3 €. 
- Si perdemos, colocamos la cantidad apostada (2 €) a la derecha de la secuencia (1 - 2 - 1 - 1 - 2)

Con esta estrategia, cada ganancia compensa dos pérdidas, así que cuando ganas giros, obtienes una ganancia sobre la mitad de tus giros perdidos y finalizas la sesión. Dicho de otra manera, solo necesitas un ratio de 1/3 para ser ganador.

Martingala (podríamos intentarlo en un casino real, porque es más fácil de calcular que Labouchere)
Problema: necesitas mucha pasta para poder usarlo.
La probabilidad de perder 1 vez es del 50% (muy alta)
La probabilidad de perder 2 veces seguidas es del 25% (alta)
La probabilidad de perder 3 veces seguidas es del 13% (importante)
La probabilidad de perder 5 veces seguidas es del 3% (no despreciable)
La probabilidad de perder 10 veces seguidas es del 1% (casi despreciable)

La probabilidad de perder 20 veces seguidas es del 0.0001% (casi imposible)

La única forma de perder usando Labouchere para las apuestas simples, es que los giros perdedores sean mayores que los ganadores en un ratio de 2 a 1. Sin embargo, en este caso (poco común), tus pérdidas pueden ser bastante dramáticas. No son tan dramáticas como son la Martingala, pero sí bastante altas. Labouchere no es un método infalible y, cuando pierde, al igual que en la mayoría de progresiones negativas, pierde a lo grande. Una sola sesión perdida puede acabar con muchas sesiones ganadas.

Por otra parte, si quieres más seguridad, puedes empezar con solo un número en lugar de una secuencia de tres números. Hay una versión súper segura de Labouchere, que comienza con 10 ceros (¡o más!) y un 1. En este caso la secuencia inicial se parecería a esto:

0, 0, 0, 0, 0, 0, 0, 0, 0,1
*/

var apostarHabilitado = true;
var apuesta = 0.5;
var plantillaArray = [apuesta];
var modalidadApuesta = 'color'; //paridad / color / rango_numeros. // Si vale null se escoge automáticamente la apuesta dominante
//var numeroRecienteObj = document.querySelector('.recent-numbers--1BpVP .single-number--2nKGX:first-of-type');
var modalidadApuesta2 = null;// Rojo / Negro / par / impar / primeros_numeros / ultimos_numeros / seguir_color / null (escoge el valor dominante). Si la anterior vale null, esta tiene que valer algo
var stoploss = plantillaArray.reduce((valorAcumulado, n) => valorAcumulado + n) * 5; 

/*
ESTILOS DE APUESTAS
- Apostar siempre a la categoría dominante (ya sea par, impar, primeros números, últimos números, rojo o negro) -> Lo perdí todo
- Apostar siempre a negro -> Lo perdí todo
- Apostar al color dominante. Suelo ganar. 
- Apostar al último color. Juegué una vez y perdí.
*/
// * 
// * 3 = -1 , -3
// ====================== Menos de nultiplicar por por 4 no hacerlo porque el 2 sale bastantes veces
// * 4 = 8, 3, -0.5, -1, -4, -0.5, -3.5, -9 , 0.5, 0.25, 3
// * 5 = -9
// * 6 = 30 (podía haber jugado a 2 y haber perdido menos), 0.5
// * 7 = -6, 8.5, -7
// * 10 = perdidas -> jugando al color dominante
// * 12 = 31 / -7 / 13 / 7 , 8.75, 26 , -16, -15-> jugando al color dominante - A 50 centimos gano 10 euros en 40 minutos
// seguir color solo probé una vez y no me fue muy bien

/*
0.5,1,2,0.5,0.5,1,1.5,0.5,1,0.5,1,1.5,0.5,0.5,1.5,1,0.5,0.5,1,1.5,1,0.5,1.5,1,0.5,0.5,2,1,1,0.5,1,0.5,1,1,0.5,1.5,0.5,0.5,1,1.5,0.5,1.5,0.5,0.5,0.5,0.5,2,1,0.5,0.5,0.5,0.5,1,2,1,1,0.5,2,1,1,0.5,1,0.5,0.5,1,0.5,1.5

2,0.5,1,1,1,1,0.5,1.5,1,1.5,1,0.5,1,1,1,1.5,0.5,0.5,0.5,0.5,0.5,0.5,1.5,1.5,0.5,0.5,1,0.5,1,2.5

*/
// ===========================================================
var btnParaApostar_red = document.querySelector('[data-bet-spot-id=red]');
var btnParaApostar_black = document.querySelector('[data-bet-spot-id=black]');

var btnParaApostar_par = document.querySelector('[data-bet-spot-id=even]');
var btnParaApostar_impar = document.querySelector('[data-bet-spot-id=odd]');

var btnParaApostar_primerosNumeros = document.querySelector('[data-bet-spot-id=from1to18]');
var btnParaApostar_ultimosNumeros = document.querySelector('[data-bet-spot-id=from19to36]');

var btnParaApostar_50Centimos = document.querySelector('.chip--NrbrM:nth-of-type(2)');
var btnParaApostar_1Euro = document.querySelector('.chip--NrbrM:nth-of-type(3)');
var btnParaApostar_5Euros = document.querySelector('.chip--NrbrM:nth-of-type(4)');
var btnParaApostar_25Euros = document.querySelector('.chip--NrbrM:nth-of-type(5)');
//console.log(btnParaApostar_25Euros);
var btnParaApostar_100Euros = document.querySelector('.chip--NrbrM:nth-of-type(6)');
var btnParaApostar_500Euros = document.querySelector('.chip--NrbrM:nth-of-type(7)');
// =========================================================================================


/*var saldoInicial = document.querySelectorAll('.updateBalance')[0].innerHTML;
var saldoInicial = document.querySelector('.membersmenu-profile > li:nth-of-type(2) > a span').textContent;
saldoInicial = saldoInicial.substring(0, saldoInicial.length-1);
var saldoActual = document.querySelector('[data-role=balance-label__value]').innerHTML;
console.log(saldoActual)
var saldoInicial = 40.5
saldoActual = 40;
*/



//El saldo total debe ser 8 veces la suma de la apuestas


// var apuestas = [1.5]; // 70 euros -> lo puedo perder todo
// var apuestas = [1]; // 100 euros -> tuve pérdidas
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
var opcionEscogida = modalidadApuesta2;
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

var seleccionarOpcionApuesta = function (modalidadApuesta, porcentajeAciertoRojo, porcentajeAciertoNegro, porcentajeAciertoPar, porcentajeAciertoImpar, porcentajeAciertoPrimerosNumeros, porcentajeAciertoUltimosNumeros) {
	
	if (modalidadApuesta == 'paridad') {
		if(modalidadApuesta2 == null){
			opcionEscogida = porcentajeAciertoPar > porcentajeAciertoImpar ? 'Par' : 'Impar';
		}else{
			opcionEscogida = modalidadApuesta2;
		}
	} else if (modalidadApuesta == 'color') {
		if(modalidadApuesta2 == null){
			opcionEscogida = porcentajeAciertoRojo > porcentajeAciertoNegro ? 'Rojo' : 'Negro';
		}else if(modalidadApuesta2 == 'seguir_color'){
			if( opcionQueSalio.toLowerCase() != 'verde'){
				opcionEscogida = opcionQueSalio;
			}
		}else{ //modalidadApuesta2 es rojo a negro
			opcionEscogida = modalidadApuesta2;
		}
	} else if (modalidadApuesta == 'rango_numeros') {
		if(modalidadApuesta2 == null){
			opcionEscogida = porcentajeAciertoPrimerosNumeros > porcentajeAciertoUltimosNumeros ? 'Primeros_numeros' : 'Ultimos_numeros';
		}else{
			opcionEscogida = modalidadApuesta22;
		}
	}
	return opcionEscogida;
}
var seleccionarModalidadApuesta = function (porcentajeAciertoRojo, porcentajeAciertoNegro, porcentajeAciertoPar, porcentajeAciertoImpar, porcentajeAciertoPrimerosNumeros, porcentajeAciertoUltimosNumeros) {
	var diferenciaColor = porcentajeAciertoRojo - porcentajeAciertoNegro;
	var diferenciaParidad = porcentajeAciertoPar - porcentajeAciertoImpar;
	var diferenciaNumeros = porcentajeAciertoPrimerosNumeros - porcentajeAciertoUltimosNumeros;
	
	var opciones = [
		{
			'tipo': 'rango_numeros',
			'valor': Math.abs(diferenciaNumeros)
		},
		{
			'tipo': 'paridad',
			'valor': Math.abs(diferenciaParidad)
		},
		{
			'tipo': 'color',
			'valor': Math.abs(diferenciaColor)
		}
	]
	
	var seleccion = null;
	opciones.map(obj => {
		seleccion = seleccion == null ? obj :
		obj.valor >= seleccion.valor ? obj : seleccion;
	});
	
	if (seleccion.valor >= 2) {
		modalidadApuesta = seleccion.tipo;
		console.log('diferenciaColor: ' + Math.abs(diferenciaColor) + ', diferenciaParidad: ' + Math.abs(diferenciaParidad) + ', diferenciaRangoNumeros: ' + Math.abs(diferenciaNumeros));
		console.log('seleccion.tipo: ' + seleccion.tipo)
		
		return modalidadApuesta;
	} else {
		console.log('NO APOSTAMOS, BAJA TASA DE ACIERTO');
		return null;
	}
}

var finGrupoTiradas = _ => {
	maximasApuestasDeLaSesion.push(maximaApuestaDeLaTirada);
	var valorMax = 0;
	maximasApuestasDeLaSesion.map( n => {
		if( n > valorMax){
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
	//	console.log('Monedas de 500 euros: ' + 0 + ', Monedas de 100 euros: ' + monedasDe100Euro + ' Monedas de 25 euros: ' + monedasDe25Euro + ', Monedas de 5 euros: ' + monedasDe5Euro + ', Monedas de 1 euro: ' + monedasDe1Euro + ', Monedas de 50 centimos: ' + monedasDe50Centimos);
	
	var btnParaApostarEscogido = null;
	if (modalidadApuesta == 'paridad') {
		btnParaApostarEscogido = btnParaApostar_impar;
		if (opcionEscogida == 'par') {
			btnParaApostarEscogido = btnParaApostar_par;
		}
	} else if (modalidadApuesta == 'color') {
		btnParaApostarEscogido = btnParaApostar_red;
		if (opcionEscogida == 'Negro') {
			btnParaApostarEscogido = btnParaApostar_black;
		}else if(opcionEscogida == 'seguir_color'){
			// no puse el coidgo
		}
	} else if (modalidadApuesta == 'rango_numeros') {
		btnParaApostarEscogido = btnParaApostar_primerosNumeros;
		if (opcionEscogida == 'ultimos_numeros') {
			btnParaApostarEscogido = btnParaApostar_ultimosNumeros;
		}
	}
	/*
	console.log('monedasDe50Centimos' + monedasDe50Centimos + ', btnParaApostar_50Centimos: ' + btnParaApostar_50Centimos + ' - ' + btnParaApostarEscogido)
	console.log('monedasDe1Euro ' + monedasDe1Euro + ', btnParaApostar_1Euro: ' + btnParaApostar_1Euro + ' - ' + btnParaApostarEscogido)
	console.log('monedasDe5Euro ' + monedasDe5Euro +', btnParaApostar_5Euros: ' + btnParaApostar_5Euros + ' - ' + btnParaApostarEscogido)
	console.log('monedasDe25Euro' + monedasDe25Euro + ', btnParaApostar_25Euros: ' + btnParaApostar_25Euros + ' - ' + btnParaApostarEscogido)
	console.log('monedasDe100Euro' + monedasDe100Euro + ', btnParaApostar_100Euros: ' + btnParaApostar_100Euros + ' - ' + btnParaApostarEscogido)
	console.log('monedasDe500Euro' + monedasDe500Euro + ', btnParaApostar_500Euros: ' + btnParaApostar_500Euros + ' - ' + btnParaApostarEscogido)
	*/
	
	//console.log('monedasDe50Centimos: ' + monedasDe50Centimos + ', monedasDe1Euro: ' + monedasDe1Euro +', monedasDe5Euro: '+ monedasDe5Euro );
	
	var tiempoRandom = Math.random()*10000;
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
		//	console.log("Click en: " + tipoDeClick);
	}
}

var haPasadoPorLaFaseDeApuestas = false;

var miIntervalo = setInterval(() => {
	
	if(juegoActivo){
		estadoLetrero = document.querySelector('[data-role=status-text]');
		
		if (estadoLetrero != null) {
			var letreroTxt = estadoLetrero.textContent;
			// El momento de hacer la apuesta
			if (letreroTxt == 'HAGA SUS APUESTAS') {
				if (estado == 'esperandoParaApostar') {
                    haPasadoPorLaFaseDeApuestas = true;
					cantidadAApostar = getCantidadAApostar(apuestas);
					
					if (maximaApuestaDeLaTirada < cantidadAApostar) {
						maximaApuestaDeLaTirada = cantidadAApostar;
					}
					if (cantidadAApostar > stoploss) {
						++numeroDeTiradasPerdidasSeguidas;
						if (numeroDeTiradasPerdidasSeguidas >= 1) {
							finGrupoTiradas();
							console.log('cantidadAApostar: ' + cantidadAApostar + ', stoploss: ' + stoploss)

							console.log('FIN DE JUEGO');
							console.log('Dinero que hubieses ganado con una apuesta de '+apuesta+'€ y límite '+ stoploss + '€: ' + dineroGanado+'€. ' + maximasApuestasDeLaSesion.length + ' giros completados');		
							juegoActivo = false;	
							var tiempo = Math.random()*4*60*1000;										
							setTimeout( () => {
								juegoActivo = true} , 5*60*1000 + tiempo); // 2 minutos 
							}
						} else {
							// var colorDelUltimoNumero = numeroRecienteObj.classList.contains('red') ? 'red' : 'black';
							// var ultimoNumero = numeroRecienteObj.querySelector('span').innerHTML;		
							var porcentajeAciertoRojo = document.querySelector('.low-risk--2yc-W li:nth-of-type(3) > div:first-child').getAttribute('data-role-value');
							var porcentajeAciertoNegro = document.querySelector('.low-risk--2yc-W li:nth-of-type(4) > div:first-child').getAttribute('data-role-value');
							
							var porcentajeAciertoPar = document.querySelector('.low-risk--2yc-W li:nth-of-type(2) > div:first-child').getAttribute('data-role-value');
							var porcentajeAciertoImpar = document.querySelector('.low-risk--2yc-W li:nth-of-type(5) > div:first-child').getAttribute('data-role-value');
							
							var porcentajeAciertoPrimerosNumeros = document.querySelector('.low-risk--2yc-W li:nth-of-type(1) > div:first-child').getAttribute('data-role-value');
							var porcentajeAciertoUltimosNumeros = document.querySelector('.low-risk--2yc-W li:nth-of-type(6) > div:first-child').getAttribute('data-role-value');
							if (modalidadApuesta == null) {
								modalidadApuesta = seleccionarModalidadApuesta(porcentajeAciertoRojo, porcentajeAciertoNegro, porcentajeAciertoPar, porcentajeAciertoImpar, porcentajeAciertoPrimerosNumeros, porcentajeAciertoUltimosNumeros);
							}
							
							
							opcionEscogida = seleccionarOpcionApuesta(modalidadApuesta, porcentajeAciertoRojo, porcentajeAciertoNegro, porcentajeAciertoPar, porcentajeAciertoImpar, porcentajeAciertoPrimerosNumeros, porcentajeAciertoUltimosNumeros);
							console.log('Cantidad a apostar:' + cantidadAApostar + ' €. APUESTA: ' + modalidadApuesta + ' - ' + opcionEscogida + ' =================== Array de apuestas: ' + apuestas.join(' -- '));
							apostar(opcionEscogida);
							estado = 'esperandoParaVerSiGane';	
						}
						
					}
				} else if (
					letreroTxt == 'APUESTAS CERCA DEL CIERRE' ||
					letreroTxt == 'NO HAY MÁS APUESTAS' ||
					letreroTxt == 'ESPERANDO LA SIGUIENTE PARTIDA' ||
                    letreroTxt == 'APUESTAS ACEPTADAS' || 
                    letreroTxt == 'CERRANDO APUESTAS' ||
                    letreroTxt == 'APUESTAS CERRADAS') {

					} else if (estado == 'esperandoParaVerSiGane' && haPasadoPorLaFaseDeApuestas) {
                        console.log("EL LETRERO: " + letreroTxt)
						// El momento de evaluar el resultado
						var fichaGanadora = letreroTxt;
						var res = fichaGanadora.split(" ");
						var numeroQueSalio = res[0];
						opcionQueSalio = res[1];
						
						if (modalidadApuesta == 'paridad') {
							if (numeroQueSalio % 2 == 0) opcionQueSalio = 'par';
							else opcionQueSalio = 'impar'
						} else if (modalidadApuesta == 'rango_numeros') {
							if (numeroQueSalio >= 1 && numeroQueSalio <= 18) {
								opcionQueSalio = 'primeros_numeros';
							} else if (numeroQueSalio >= 19 && numeroQueSalio <= 36) {
								opcionQueSalio = 'ultimos_numeros';
							}
						} else if (modalidadApuesta == 'color') {
							
						} else {
							modalidadApuesta = 'aqui hubo un error';
						}
						
						if(evaluarApuesta(opcionQueSalio, opcionEscogida)){
							console.log("APUESTA GANADA. Salió: " + opcionQueSalio + ", Opcion para apostar escogida: " + opcionEscogida + ' Cantidad ganada: ' + cantidadAApostar + ' €');
							if (apuestas.length == 0) {
								dineroGanado += apuesta;
								console.log('ARRAY DE APUESTAS COMPLETADO - VOLVEMOS A EMPEZAR. Dinero ganado = ' + dineroGanado);

								if(dineroGanado == apuesta*6){
									console.log("==================================");
									console.log('OBJETIVO DE DINERO GANADO CUMPLIDO');
									console.log("==================================");
									juegoActivo = false;
								}
								finGrupoTiradas();
							}
						}else{
							console.log("APUESTA PERDIDA. Salió: " + opcionQueSalio + ", Aposté por: " + opcionEscogida + '. Cantidad Perdida: ' + cantidadAApostar + ' €');
						}
						++totalTiradas;
						// 					var porcentajeAciertos = (totalAciertos / totalTiradas) * 100;
						
						// console.log('PORCENTAJE ACIERTOS: ' + porcentajeAciertos + '% -- ' + totalAciertos + '/' + totalTiradas);
						
						estado = 'esperandoParaApostar';
					}
				} else {
					console.log("Letrero nulo");
				}
			}
		}, 1000);
		
		/////////////////////////////////////////////////
		// BUSQUEDA DEL STOPLOSS PERFECTO
		/*
		var maximasApuestasRealizadas =  [0.5, 0.5, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2];
		var apuestaBase = 0.5;
		var stoploss = 10;
		var dineroGanado = 0;
		maximasApuestasRealizadas.map( n => {
			if( n <= stoploss){
				dineroGanado  += apuestaBase;
			}else{
				dineroGanado  -= n;
			}
		})
		console.log(dineroGanado);
		
		*/
		
		
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
		
		var evaluarApuesta = (opcionQueSalio, opcionEscogida) =>{
			if (opcionQueSalio.toLowerCase() == opcionEscogida.toLocaleLowerCase() /* || opcionQueSalio.toLowerCase() == 'verde' eL VERDE lo tomamos como apuesta perdida porque perdemos dinero*/) {
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
		/*
		var apuestas = [0.5];
		var stoploss = 10;
		var cash = 10;
		var opcionEscogida = 'rojo';
		var valorApuesta = apuestas[0];
		arrayObtenido.map( opcionQueSalio => {
			var valorApuesta = getCantidadAApostar();
			if(valorApuesta > stopLoss)
			cash -= valorApuesta;
			if(evaluarApuesta(opcionQueSalio, opcionEscogida) ){
				cash  += valorApuesta*2;
			}
		})
		
		
		*/
		