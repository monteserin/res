$(document).ready(inicializar);

var productos =[];
var comercios = [];

function inicializar(){

	recuperarDatos(productos);
	$(".agregar").click(agregarProducto);
	$(".agregar2").click(agregarComercio);
	$("#buscar").click(buscarProducto);
	$("#buscar2").click(buscarComercio);

}

function recuperarDatos(){

	var carga = localStorage.getItem("datosCompra");
	productos = JSON.parse(carga);

	imprimir(productos);

	var carga2 = localStorage.getItem("datosComercios");
	comercios = JSON.parse(carga2);

	imprimirComecios(productos,comercios);

	$(".checker").unbind("click").click(cambioEstado);
	$(".checker2").unbind("click").click(cambioComercio);
	$(".eliminarP").unbind("click").click(eliminarProducto);

}

function imprimir(product){

	var totalPagar = 0;

	lista = "<ul>";
	lista2 = "<ul>";
	lista3 = "<ul>";

	for(i in product){
		if(product[i].disponible == true){
			var color = "verde";
		}else{
			var color = "rojo";
			totalPagar = parseFloat(totalPagar) + parseFloat(product[i].precio);
		
		}

		lista += '<li class="productos" data-id="'+i+'"><div class="eliminarP"><div class="ekis"></div></div><h3>'+product[i].nombre+'</h3><div class="checker '+color +' "></div><h4 class="moneda">'+product[i].precio+' €</h4><h4>'+product[i].comercio+'</h4></li>';
	}

	for(i in product){
		if(product[i].disponible == false){
			var color = "rojo"
			lista2 += '<li class="productos" data-id="'+i+'"><div class="eliminarP"><div class="ekis"></div></div><h3>'+product[i].nombre+'</h3><div class="checker '+color +' "></div><h4 class="moneda">'+product[i].precio+' €</h4><h4>'+product[i].comercio+'</h4></li>';
		}
	}

	lista += "</ul>";
	lista2 += "</ul>";


	$('.cuerpo').html(lista);

	$('.cuerpo2').html(lista2);

	numerar();

	$('.faltas').html(numeracion);
	totalPagar = totalPagar.toFixed(2) + " €";
	$('.precioTotal').html(totalPagar);

}

function agregarProducto(){
	$(".lightbox").css({"display":"block"});
	$('#nombre').val('');
	$('#precio').val('');
	$(".cerrar").click(cerrarAgregar);
	$("#enviar").unbind("click").click(mandarDatos);

}

function mandarDatos(){

	var nombre = $("#nombre").val();
	var comercio = $("#comercio").find('input[type="checkbox"]:checked').val();
	var precio = $("#precio").val();
	disponible = false;
	var producto = {"nombre":nombre,"comercio":comercio,"precio":precio, "disponible":disponible};


	if(nombre == ""){
		$(".lightbox").css({"display":"none"});
	}
	else{

		var productos = localStorage.getItem("datosCompra");
			
		if(productos == null){
			productos = [];
		}
		else{
			productos = JSON.parse(productos);
			
		}

		productos.push(producto);
		var productosTxt = JSON.stringify(productos);
		localStorage.setItem("datosCompra", productosTxt);

		recuperarDatos();
		
		$(".lightbox").css({"display":"none"});
	}
}

function buscarProducto(){

	var busqueda = $("#busqueda").val();
	productosSel= [];
	for(i in productos){
		if(productos[i].nombre != null && productos[i].nombre.indexOf(busqueda) >= 0){
			productosSel.push(productos[i]);

		}
	}
	$("#busqueda").val("");
	imprimir(productosSel);
	$(".eliminarP").unbind("click").click(eliminarProductoB);
	$(".checker").unbind("click").click(cambioEstadoB);



}

function buscarComercio(){
	var busqueda2 = $("#busqueda2").val();
	comerciosSel= [];
	for(i in comercios){
		if(comercios[i].nombre != null && comercios[i].nombre.indexOf(busqueda2) >= 0){
			comerciosSel.push(comercios[i]);

		}
	}
console.log(comerciosSel)
	imprimirComecios(productos, comerciosSel);

}

function cerrarAgregar(){
	$(".lightbox").css({"display":"none"});
}

function eliminarProducto(e){
	e.stopPropagation();
	var identy = $(this).closest("li").attr("data-id");
	$(this).find('.ekis').css({'display':'block'});
	$('.ekis').click(function(){
		productos.splice(identy, 1);
		var productosTxt = JSON.stringify(productos);
		localStorage.setItem("datosCompra", productosTxt);

		recuperarDatos();

	});

	    $("body").click(function(){
		$(".ekis").css({'display':'none'});


	});
}

function eliminarProductoB(e){
	e.stopPropagation();
	var identy = $(this).closest("li").attr("data-id");
	$(this).find('.ekis').css({'display':'block'});
	$('.ekis').click(function(){
		productos.splice(identy, 1);
		var productosTxt = JSON.stringify(productos);
		localStorage.setItem("datosCompra", productosTxt);

		$(this).closest('li.productos').css({'display':'none'});

	});

	    $("body").click(function(){
		$(".ekis").css({'display':'none'});


	});
}

function eliminarComercio(e){
	e.stopPropagation();
	var identy = $(this).closest("li").attr("data-id");
	$(this).find('.ekis').css({'display':'block'});
	$('.ekis').click(function(){
		comercios.splice(identy, 1);
		var comerciosTxt = JSON.stringify(comercios);
		localStorage.setItem("datosComercios", comerciosTxt);

		recuperarDatos();
	});

	$("body").click(function(){
		$(".ekis").css({'display':'none'});

		recuperarDatos();
	});

}

function cambioEstado(e){
	e.stopPropagation();
	var sino = $(this).closest('li').attr('data-id');

	productos = localStorage.getItem("datosCompra");
	productos = JSON.parse(productos);


	if(productos[sino].disponible == false){
		productos[sino].disponible = true;
	}
	else{
		productos[sino].disponible = false;
	};
	cambioColor(sino);

	var productosTxt = JSON.stringify(productos);
	localStorage.setItem("datosCompra", productosTxt);
	recuperarDatos();

}

function cambioEstadoB(e){
	e.stopPropagation();
	var sino = $(this).closest('li').attr('data-id');

	productos = localStorage.getItem("datosCompra");
	productos = JSON.parse(productos);

	var precioObj = $(this).closest('li').find('.moneda').val();
	var largoObj = precioObj.length;
	precioObj = precioObj.substring(0 , (largoObj - 2));
	var totalLista = $('div.precioTotal').val();

	if(productos[sino].disponible == false){
		productos[sino].disponible = true;
		totalLista = parseFloat(totalLista) - parseFloat(precioObj);
		
	}
	else{
		productos[sino].disponible = false;
	};
	cambioColor(sino);

	var productosTxt = JSON.stringify(productos);
	localStorage.setItem("datosCompra", productosTxt);


}

function cambioColor(sin){
	if(productos[sin].disponible == true){
		$("li.productos[data-id="+sin+"]").find('div.checker').addClass('verde');
		$("li.productos[data-id="+sin+"]").find('div.checker').removeClass('rojo');
	}
	else{
		$("li.productos[data-id="+sin+"]").find('div.checker').addClass('rojo');
		$("li.productos[data-id="+sin+"]").find('div.checker').removeClass('verde');
	}

}

function restaurar(){
	localStorage.clear();
}

function agregarComercio(){
	$("#nombreComercio").val('');
	$(".lightbox3").css({"display":"block"});
	$(".cerrar").click(function(){
		$(".lightbox3").css({"display":"none"});
	});
	$("#enviar3").unbind("click").click(guardarComercio);

}

function guardarComercio(){
	nombreComercio = $("#nombreComercio").val();
	var comercio = {"nombre": nombreComercio};

	if(nombreComercio == ""){
		$(".lightbox3").css({"display":"none"});
	}
	else{

		comercios = localStorage.getItem("datosComercios");
			
		if(comercios == null){
			comercios = [];
		}
		else{
			comercios = JSON.parse(comercios);
			
		}

		comercios.push(comercio);
		var comerciosTXT = JSON.stringify(comercios);
		localStorage.setItem("datosComercios", comerciosTXT);

		recuperarDatos();
		
		$(".lightbox3").css({"display":"none"});
	}
}

function imprimirComecios(product, com){

	comerz = "<ul>";
	comerz2 = "";

	// recorro los comercios
	for(i in com){
			numeracionEn = 0;
			precioComercio = 0;

		var listaComercio = '<ul class="despliegue">';

		//recorro los productos de un comercio
		for(j in product){
			//Si está disponible, pinto el cuadrado de verde
			if(product[j].disponible == true && product[j].comercio == com[i].nombre){
				var color = "verde";
				listaComercio += '<li class="productos inter" data-id="'+j+'"><div class="eliminarP"><div class="ekis"></div></div><h3>'+product[j].nombre+'</h3><div class="checker2 '+color +' "></div><h4>'+product[j].precio+' €</h4></li>';
			}else if(product[j].disponible == false && product[j].comercio == com[i].nombre){
				var color = "rojo";
				listaComercio += '<li class="productos inter" data-id="'+j+'"><div class="eliminarP"><div class="ekis"></div></div><h3>'+product[j].nombre+'</h3><div class="checker2 '+color +' "></div><h4>'+product[j].precio+' €</h4></li>';
				numeracionEn ++;
				precioComercio = parseFloat(precioComercio) + parseFloat(product[j].precio);
			}

		}
				listaComercio += '</ul>';

		comerz += '<li class="productos colorCom" data-id="'+i+'"><div class="eliminarC"><div class="ekis"></div></div><h3 class="botCom">'+com[i].nombre+'</h3><div class="botonD"></div><div class="faltasEn">'+numeracionEn+'</div><div class="precioTotal2">'+precioComercio+' €</div>'+listaComercio+'</li>';
		comerz2 += '<input type="checkbox" value="'+com[i].nombre+'">'+com[i].nombre+'<br>'
	}

		comerz += "</ul>";

	$('.cuerpo3').html(comerz);

	$('#comercio').html(comerz2);

	$(".eliminarC").click(eliminarComercio);

	$(".eliminarP").click(eliminarProducto);

	$('div.botonD').unbind("click").click(desplegarLista);
}

function desplegarLista(){
	if($(this).closest('li').find('ul').hasClass('despliegue')){
		$(this).closest('li').find('ul').removeClass('despliegue').addClass('desplegado');
	}
	else if($(this).closest('li').find('ul').hasClass('desplegado')){
		$(this).closest('li').find('ul').removeClass('desplegado').addClass('despliegue');
	}
}

function numerar(){
	numeracion = 0;
	for(i in productos){
		if(productos[i].disponible == false){
			numeracion = numeracion + 1;
		}
	}
}

function cambioComercio(e){
	e.stopPropagation();
	var valor = $(this).closest('ul').closest('li.productos').find('div.faltasEn').text();
	var sino = $(this).closest('li.productos.inter').attr('data-id');
	var res = parseInt(valor);
	var precioC = $(this).closest('li.productos.colorCom').find('div.precioTotal2').text();
	var largo = precioC.length;
	precioC = precioC.substring(0, (largo - 2))


	productos = localStorage.getItem("datosCompra");
	productos = JSON.parse(productos);

	if(productos[sino].disponible == false){
		productos[sino].disponible = true;
		res += -1;
		precioC = parseFloat(precioC) - parseFloat(productos[sino].precio);

	}
	else{
		productos[sino].disponible = false;
		res += +1;
		precioC = parseFloat(precioC) + parseFloat(productos[sino].precio);

	};
	precioC = precioC.toFixed(2);
	cambioColor2(sino);


	var productosTxt = JSON.stringify(productos);
	localStorage.setItem("datosCompra", productosTxt);


	$(this).closest('ul').closest('li.productos').find('div.faltasEn').text(res);
	$(this).closest('li.productos.colorCom').find('div.precioTotal2').text(precioC + ' €');

}

function cambioColor2(sin){
	if(productos[sin].disponible == true){
		$("li.productos.inter[data-id="+sin+"]").find('div.checker2').addClass('verde');
		$("li.productos.inter[data-id="+sin+"]").find('div.checker2').removeClass('rojo');
	}
	else{
		$("li.productos.inter[data-id="+sin+"]").find('div.checker2').addClass('rojo');
		$("li.productos.inter[data-id="+sin+"]").find('div.checker2').removeClass('verde');
	}

}



