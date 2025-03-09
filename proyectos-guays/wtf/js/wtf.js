$(inicializar);

function inicializar () {

	pintacarteles(); 

	jugar ();

	$("#respuestas a").click(respuestaPulsada);	

	}



	function asociar () {

		$("#respuestas a").addClass("class_titulos");

		$("#emoticonos img").addClass("class_emoticonos animated bounceIn");	

	}



//2 arrays: 1) pregunta=emoticonos, 2)respuestas=4 titulos

	//1a) cada numero equivale a un .png

	//2n) la primera pelicula es la correcta

var peliculas = [

[[506,0,193,193],["Slumdog Millionarie", "El Ladrón de Bicicletas", "Milion Dollar Baby", "Por un puñado de dólares"]],

[[287,630,630],["Desayuno con diamantes", "El diablo se viste de prada", "Snatch. Cerdos y diamantes", "Diamantes negros"]],

[[469,470],["Sonrisas y Lágrimas", "La sonrisa de Mona Lisa", "Lágrimas al sol", "Corona de lágrimas"]],

[[611,108,363,281,537],["Harry Potter", "El cáliz de plata", "El fuego de la venganza", "El imperio del fuego"]],

[[67,67,580,67,67],["American Beauty", "Las 13 rosas", "Rosas rojas", "La revolución de los saris rosas"]],

[[356,356,356,356,534],["Cuatro bodas y un funeral", "La boda de mi mejor amigo", "Un funeral de muerte", "Mi gran boda griega"]],

[[441,322],["American Pie", "Capitán América", "Cumpleaños mortal", "La gran estafa americana"]],

[[112,545,564],["Origen (Inception)", "Réquiem por un sueño", "Bucle", "En el insomnio"]],

[[513,629,629,629,629],["El Señor de los Anillos", "Cásate conmigo, mi amor", "El anillo de Sofía", "Anillo de compromiso"]],

[[260,348],["School of Rock", "La era del rock", "Vieja escuela", "Camino a la escuela"]],

[[158,356,572,],["El jorobado de Notre Dame", "Soy Gitana", "Cuatro bodas y un funeral", "Yo soy Lola"]],

[[084,519],["La vida es bella", "Los lunes al sol", "Princesa por sorpresa", "La reina de los hielos"]],
[[559,510],["La mano que mece la cuna", "Karate Kid", "Junior", "Conan"]],
[[572,548],["Te doy mis ojos", "El jorobado de Notre Dame", "Yo soy Lola", "Soy Gitana"]],
[[515,516,189],["No es país para viejos", "Mira quien habla ahora", "Ahora me ves", "Lo que el ojo no ve"]],
[[545,564],["Origen", "La bella durmiente", "El sonámbulo", "El caminante de las estrellas"]],
[[535,479, 189, 535],["Mars Attack", "Alien", "Starchips Invaders", "E.T."]],
[[0, 517],["Tintín", "El Hombre Lobo", "El libro de las selva", "Tarzán"]],
[[505, 506, 437, 438, 339, 440, 441],["La vuelta al mundo en 80 días", "El último heroe americano", "Viaje al centro de la tierra", "El traductor"]],
[[110, 018, 007],["Ice Age", "Madagascar", "El libro de la selva", "Tarzán"]],

[[571, 415],["El ladrón de biciletas", "La vuelta al mundo en 80 días", "El coche fantástico", "Carros de fuego"]],
[[72, 72, 72, 72, 372],["Otoño en Nueva York", "Philadelphia", "Algunos hombre libres", "La jungla de cristal"]],
[[513, 547, 16],["El hombre que susurraba a los caballos", "Madagascar", "Spirit", "Un día en las carreras"]],
[[383, 016],["Space Cowboys", "Mars Attack", "Alien", "Starships Invaders"]],

[[269, 5],["Space Jump", "Los guardianes de la galaxia", "Madagascar", "Los blancos no la saben meter"]],

[[562, 084, 442],["Bajo el sol de toscana", "Gladiator", "Taxi", "Los lunes de sol"]],


[[255,255,255, 109],["Cantando bajo la lluvia", "El mismo amor, la misma lluvia", "Un día de furia", "Los amantes del cículo polar"]],


[[114,512,597],["Mago de oz", "Tacones lejanos", "El diablo viste de Prada", "Pequeña Miss Sunshine"]],



[[548],["Abre los ojos", "La niña de mis ojos", "Eyes Wide Shut", "Ojos de serpiente"]],

[[214, 439, 179, 434, 534],["La lista de Schindler", "La noche de los muertos vivientes", "Salvar al soldad Ryan", "El desembarco de normandía"]],

[[214, 439, 179, 434, 534],["La lista de Schindler", "La noche de los muertos vivientes", "Salvar al soldad Ryan", "El desembarco de normandía"]],

[[97, 67, 68, 71, 518, 529],["Media noche en el jardín del bien y del mal", "Hercules", "Ángeles y demonios", "Daredevil"]],

[[524, 524, 524, 524, 193,592],["Los aristogatos", "La verdadera historia de perros y gatos", "CatWoman", "El rey de la selva"]],

[[97, 192, 578],["Crepúsculo", "La verdadera historia de perros y gatos", "Antes del anochecer", "Romeo y Julieta"]],

[[14, 189, 479],["El planeta de los simios", "King Kong", "El libro de la selva", "Tarzán"]],

[[437, 438, 439,440,441,442,510],["Banderas de nuestros padres", "La vuelta al día en 80 días", "El último guerrero americano", "Tu a Bostón y yo a California"]],

[[364,16,513, 619,513],["Brokeback mountain", "Tu a boston y yo a california", "El tesoro del amazonas", "Dos hombres y un destino"]],

[[346, 134,134,134,134,134,134,134,134],["Up!", "La guarida", "La casa embrujada", "La vuelta al mundo en 80 días"]],

[[272, 629],["Match Point", "Siete bodas y un funeral", "Casada con su enemigo", "Cuestión de pelotas"]],

[[10],["Babe, el cerdito valiente", "Porkys", "Rebelión en la granja", "La cena de los idiotas"]],

[[587, 629, 534],["La novia cadaver", "Casada con su enemigo", "Princesa por sorpresa", "Blancanieves"]],

[[3, 297, 302,305,312,315],["Ratatouille", "El flautista de Hamelin", "El cocinero del rey", "La cena de los idiotas"]],

[[519, 461],["Princesa por sorpresa", "La reina de inglaterra", "Isabel la católica", "Blancanieves"]],

[[519, 545],["La bella durmiente", "Origen", "Pesadilla en Elm Street", "Pesadilla antes de navidad"]],

[[510, 132],["El peque se va de marcha", "Origen", "Nacido para triunfar", "Hijos de la gloria"]],

[[115],["La Ola", "Le llamaban Body", "Mar adentro", "Titanic"]],

[[302, 566, 619],["Come, reza, ama", "La pasión de Cristo", "Ratatoille", "La cena de los idiotas"]],

[[023, 579],["El cisne negro", "Rebelión en la granja", "Chicago", "Le llamaban Body"]],

[[513, 513, 189, 372],["Gangs of New York", "La jungla de cristal", "Doctor Jekyll y Mr Hyde", "Atraco al tren del dinero"]],

[[1, 9, 26, 14],["El libro de la selva", "Tarzán", "Rebelión en la granja", "El rey León"]],

[[405, 437, 279],["2 Fast 2 Furious", "La carrera de los autolocos", "Cars", "Speed"]],

[[025, 571],["Chicken Run", "Rebelión en la granja", "Little Chicken", "Carros de fuego"]],

[[064, 068, 072, 454],["El jardinero fiel", "El jardín de las delicias", "El bosque encantado", "Antes del amanecer"]],

[[18],["Dumbo", "El hombre elefante", "El libro de la selva", "Tarzán"]],

[[1, 302],["La dama y el vagabundo", "101 dalmatas", "El hombre lobo", "Colmillo blanco"]],

[[519, 179, 189],["Psicosis", "Princesa por sorpresa", "La ventana indiscreta", "Tomb Raider"]],

[[590, 559, 228, 228],["Eduardo manostijeras", "El coleccionista de huesos", "El aviador", "Una mente maravillosa"]],

[[384, 636],["Air Force One", "Aterriza como puedas", "Plan de vuelo: desaparecida", "Naufrago"]],

[[384, 636],["Air Force One", "Aterriza como puedas", "Plan de vuelo: desaparecida", "Naufrago"]],

[[461, 35],["Buscando a Nemo", "Tiburón", "Pirañas", "Un pez llamado Wanda"]],

[[461, 35],["Buscando a Nemo", "Tiburón", "Pirañas", "Un pez llamado Wanda"]],

[[529, 597, 602],["El diablo se viste de Prada", "Pret a Porter", "Sexo en Nueva York", "Drácula"]],

[[210, 637, 793],["El cartero siempre llama dos veces", "Regreso al futuro", "Carta en una botella", "Hora punta"]],

[[292, 292, 293, 293, 489],["Resacón en las vegas", "Cocktail", "Carta en una botella", "Leaving las Vegas"]],

[[535, 148, 346],["Un extraño llama a tu casa", "E.T.", "Alien", "Sólo en Casa"]],
[[127, 129, 128],["Pesadilla antes de navidad", "Ghost", "La casa encantada", "Casper"]],

[[446, 129, 592],["The Queen", "El paciente inglés", "El reino de los cielos", "La reina de los condenados"]],

[[344, 618, 315],["Tomates verdes fritos", "El giante verde", "Ratatouille", "Master Chef"]],

[[107, 107, 570, 107, 107],["Un paseo por las nubes", "Super man", "MoonWalker", "Bola de dragón"]],

[[189, 0, 189, 0, 189],["Reservoir Dogs", "Le llamaban Body", "101 dalmatas", "El llanero solitario"]],

[[187, 580, 187, 517, 187, 513, 569, 555],["Fight club", "Por un puñado de dólares", "Karate Kid", "Puños de acero"]],

[[534, 595],["Con la muerte en los talones", "MoonWalker", "Un paseo por las nubes", "Tacones lejanos"]],

[[572, 1],["Bailando con lobos", "Hombre lobo", "Esencia de mujer", "Pasos de baile"]],

[[561, 0, 572],["Un perro andaluz", "Hombre lobo", "Esencia de mujer", "Pasos de baile"]],

[[0, 348, ,349, 346],["Dogville", "Ciudad de Dios", "Gothan", "El reino de los cielos"]],

];





var infopelis = [

["Slumdog Millionarie", "Jamal Malik (Dev Patel) es un adolescente pobre de los suburbios de Bombay que participa en la versión hindú del popular PROGRAMA '¿Quién quiere ser millonario?'. A punto de conseguir 20 millones de rupias, que es el premio máximo del concurso, el joven es interrogado por la policía, que sospecha que está haciendo trampas. Pero para cada una de las preguntas, Jamal tiene una respuesta.", "film230028.html", "AIzbwV7on6Q", "2008"],

["Desayuno con diamantes", "Holly Golightly es una bella joven neoyorquina que, aparentemente, lleva una vida fácil y alegre. TIENE un comportamiento bastante extravagante, por ejemplo, desayunar contemplando el escaparate de la lujosa joyería Tiffanys. Un día se muda a su mismo edificio Paul Varjak, un escritor que, mientras espera un éxito que nunca llega, vive a costa de una mujer madura.", "film716669.html", "OcLvm2ZK8Cs", "1961"],

["Sonrisas y Lágrimas", "Austria, 1938. María es una alegre novicia que abandona la abadía PARAconvertirse en la institutriz de los siete hijos de un militar retirado, el capitán von Trapp, viudo DESDE hace poco tiempo. La casa de los von Trapp funciona como un cuartel, pero María consigue devolver la alegría a los niños y ganarse su respeto y cariño.", "film760003.html", "qXtvg8hMkV0", "1965"],

["Harry Potter", "La cuarta parte de la serie del niño mago comienza con la Copa Internacional de Quidditch. Cuenta también el INICIO de la atracción por Cho Chang y otro año de magia, en el que una gran sorpresa obligará a Harry a enfrentarse a muchos desafíos temibles. También habrá un torneo de magia para tres escuelas, y el temido regreso de 'Aquel-que-no-debe-ser-nombrado'. ", "film372126.html", "R2SnCLrc76I", "2005"],

["American Beauty", "Lester Burnham (Kevin Spacey), un cuarentón en crisis, cansado de su trabajo y de su mujer Carolyn (Annette Bening), despierta de su letargo cuando conoce a la atractiva amiga (Mena Suvari) de su hija (Thora Birch), a la que intentará IMPRESIONAR a toda costa. ", "film505307.html", "3ycmmJ6rxA8", "1999"],

["Cuatro bodas y un funeral", "Charles (Hugh Grant) y sus amigos, todos ellos solteros y sin compromiso, han llegado a una edad en la que casi todos sus conocidos se han casado. En una de las bodas, a la que el grupo ha sido invitado, Charles conoce a Carrie (Andie Macdowell), una americana de la que se enamora a primera vista. Esa noche la pasan juntos, pero no vuelven a verse. Tendrán que esperar a la SIGUIENTEboda, en la que Carrie le presenta a su prometido. (FILMAFFINITY)", "film127199.html", "dsEZN2i8UTc", "1994"],

["American Pie", "Una legión de jóvenes inexpertos viven obsesionados con el sexo opuesto. Jim, uno de ellos, está desesperado porque todavía es virgen. Además, desde que sus padres le sorprendieron viendo películas pornográficas, su situación en casa ha empeorado, porque su bienintencionado padre pretende ocuparse de su educación sexual; en el colegio, las cosas no van mucho mejor: su relación con una chica, gracias a un PROGRAMA de intercambio, tiene toda la pinta de fracasar. Así que su último recurso se llama Michelle, una integrante de la banda de música que resulta ser todo un prodigio. ", "film345561.html", "iUZ3Yxok6N8" ,"1999"],

["Origen", "Dom Cobb (DiCaprio) es un experto en el arte de apropiarse, durante el sueño, de los secretos del subconsciente ajeno. La extraña habilidad de Cobb le ha convertido en un hombre muy cotizado en el mundo del espionaje, pero también lo ha condenado a ser un fugitivo y, por consiguiente, a renunciar a llevar una vida normal. Su única OPORTUNIDAD para cambiar de vida será hacer exactamente lo contrario de lo que ha hecho siempre: la incepción, que consiste en implantar una idea en el subconsciente en lugar de sustraerla. Sin embargo, su plan se complica debido a la intervención de alguien que parece predecir cada uno de sus movimientos, alguien a quien sólo Cobb podrá descubrir. ", "film971380.html", "DuwC_hstWhw","2010"],

["El Señor de los Anillos", "En la Tierra Media, el Señor Oscuro Saurón ordenó a los Elfos que forjaran los Grandes Anillos de Poder. Tres para los reyes Elfos, siete para los Señores Enanos, y NUEVE para los Hombres Mortales. Pero Saurón también forjó, en secreto, el Anillo Único, que tiene el poder de esclavizar toda la Tierra Media. Con la ayuda de sus amigos y de valientes aliados, el joven hobbit Frodo emprende un peligroso viaje con la misión de destruir el Anillo Único. Pero el malvado Sauron ordena la persecución del grupo, compuesto por Frodo y sus leales amigos hobbits, un mago, un hombre, un elfo y un enano. La misión es casi suicida pero necesaria, pues si Sauron con su ejército de orcos lograra recuperar el Anillo, sería el final de la Tierra Media. (FILMAFFINITY)", "film750283.html", "GuW21RLMndc", "2001"],

["School of Rock", "Dewey Finn (Jack Black), un guitarrista con delirios de grandeza, es expulsado de su banda. La falta de recursos económicos lo obliga a buscar trabajo, cosa nada fácil, por lo que, finalmente, decide suplantar a un profesor sustituto en una escuela privada. A los alumnos de 5º grado intentará enseñarles el 'rock & roll de alto voltaje'. Además, entre los niños está Yuki, un guitarrista prodigio de nueve años que PUEDE ayudarle a ganar la competición de bandas de música y, de paso, solucionar sus problemas económicos.", "film963315.html", "N9iIjqccIO4", "2003"],

]





var puntuacion = 0;

var indice_respuesta_correcta;

var indice_aleatorio;



var totalpelis = peliculas.length;



/*ESTA FUNCION PINTA EL QUESITO (pie.css)*/

function pintaquesito () {

	document.getElementById('tiempo').innerHTML = '<div id="temporizador"><div class="pie spinner"></div><div class="pie filler"></div><div class="mask"></div></div>';

}



/*Y ESTO HACE QUE CADA PARTIDA DURE 5seg*/
jugar ()
//setInterval(function(){ jugar () }, 5000);
var hasPerdido=true;
var temporizame;
function evaluarPerdida(){
	if(hasPerdido==true){
		localStorage.setItem("puntuacion", puntuacion)
			location.href= "resultados.html"

	}
}
function jugar () {
	clearTimeout(temporizame);
temporizame = setTimeout(evaluarPerdida, 10000);
	$("#temporizador").removeClass("spinner");

	$("#temporizador").removeClass("filler");

	$("#temporizador").removeClass("mask");

	pintaquesito ();



	$("#marcador").html(puntuacion);



	 indice_aleatorio = Math.floor(Math.random()*peliculas.length);



	var pregunta_emoticonos = peliculas[indice_aleatorio][0];

	var emoticono="";



	var respuesta_titulos = peliculas[indice_aleatorio][1];

	var titulo = "";



	//PINTA LA PREGUNTA (Los emoticonos)//

	for(i in pregunta_emoticonos){

		var longitudemoji= pregunta_emoticonos[i].toString().length;

		if (longitudemoji == 1) {

			emoticono += '<img src="img/emoji/'+ '00' +pregunta_emoticonos[i]+'.png"/>';

		} else if (longitudemoji == 2) {

			emoticono += '<img src="img/emoji/'+ '0' +pregunta_emoticonos[i]+'.png"/>';

		} else if (longitudemoji == 3) {

			emoticono += '<img src="img/emoji/'+pregunta_emoticonos[i]+'.png"/>';

		}	

	};



	document.getElementById("emoticonos").innerHTML = ("<h2>"+emoticono+"</h2>");

	asociar();

	// FIN - PINTA LA PREGUNTA //



	//PONER LAS RESPUESTAS ALEATORIAS//

	var posiciones = [0,1,2,3];

	var respuestas_reordenadas = [];



	//var booleana para que solo se meta una vez

	var yasametio = false;

	

	for (i in respuesta_titulos) {

		var n_aleatorio = Math.floor(Math.random()*posiciones.length);

		//console.log("n_aleatorio: "+ n_aleatorio);

		if (n_aleatorio ==0 && yasametio == false){

			yasametio = true;

			indice_respuesta_correcta = i;

		}

		respuestas_reordenadas[i] = respuesta_titulos[posiciones[n_aleatorio]];

		posiciones.splice(n_aleatorio, 1);

	}

	//Con este for mostramos las respuestas en el nuevo orden



	for ( j in respuestas_reordenadas) {

		titulo = respuestas_reordenadas[j];

		//console.log("titulo=respuestas_reordenadas["+j+"]: " + titulo);

		$("#respuestas a.p"+j).html("<h3>"+titulo+"</h3>");



		$("#respuestas a.p"+j).addClass("class_titulos");

	}

}



function respuestaPulsada() {
clearTimeout(temporizame);

	
	var respuesta_pulsada = $(this).attr("href");	

respuesta_pulsada= respuesta_pulsada.substring(1, respuesta_pulsada.length)

	if (respuesta_pulsada == indice_respuesta_correcta) {

		puntuacion = puntuacion +1;

	} else{
			localStorage.setItem("puntuacion", puntuacion)
			location.href= "resultados.html"
	}

	//Para que no se repitan las pelis.

	peliculas.splice(indice_aleatorio, 1);



	if (peliculas.length == 0) {

		resultado();

	} else {

		jugar(puntuacion);	

	}

	return false;

}









var titulodepeli;


function pintacarteles() {
	var cartel = "";

console.log(peliculas[0][1][0])
	for (i in peliculas) {

		titulodepeli = peliculas[i][1][0];
		cartel += '<h3 class="element-inlineblock animated bounceIn"><li class="cartel"><a href="#" onclick="show('+i+')"><img src="img/carteles/'+i+'.jpg" alt="'+titulodepeli+'"><span>'+titulodepeli+'</span></a></li></h3>';			
	}

	$("#listado_carteles").html(cartel);

}



//LIGHTBOX FILMS.HMTL



var	titulo ;

var	sinopsis;

var	urlfilmaffinity;

var	urlyoutube;

var	ano;



function show(info){

console.log(info)

	titulo = infopelis[info][0];

	sinopsis = infopelis[info][1];

	urlfilmaffinity = infopelis[info][2];

	urlyoutube = infopelis[info][3];

	ano = infopelis[info][4];



	$("#titulopeli").html(titulo);

	$("#cartel_img").html('<img src="img/carteles/'+info+'.jpg" alt='+titulo+'">');

	$("#infopeli .cartel_youtube a").attr("href","https://youtu.be/"+urlyoutube);

	$("#sinopsis p").html(sinopsis);

	$("#sinopsis a").css("color","#14B3CC");

	$("#sinopsis a").attr("href","http://www.filmaffinity.com/es/"+urlfilmaffinity);

	$("#sinopsis a").attr("target","_blank");

	$("#ano").html("&#8250; Año "+ano);





	document.getElementById('infopeli').style.display="block";

}



function hide(){

	document.getElementById('infopeli').style.display="none";

}