$(document).ready(function(){

$("#red").mouseover(function(){
	$("article").addClass("padding10");
	$("#info1").html("Las algas marinas son ricas en iodina, un nutriente esencial del organismo que se requiere para el funcionamiento del tiroides y cuyo déficit causa cansancio y depresión.");
});

$("#blue").mouseover(function(){
	$("article").addClass("padding10");
	$("#info1").html("Los días en que comemos más frutas y verduras nos sentimos más relajados, más felices y más energéticos que los días que ingerimos menos cantidades. Un modo sencillo de hacerlo es que la mitad de cada plato principal contenga verduras y que en las comidas de media mañana o media tarde tomemos una pieza de fruta entera, por ejemplo una manzana.");
});

$("#green").mouseover(function(){
	$("article").addClass("padding10");
	$("#info1").html("La vitamina B1 o tiamina, conocida como la vitamina del ánimo, está presente en los cereales integrales y los lácteos. Es necesaria para que el cerebro produzca un neurotransmisor cerebral llamado serotoina y relacionado con el estado de ánimo. De ahí que un tazón de leche con cereales y frutos secos nos ponga de muy buen humor.");
});

$("#grey").mouseover(function(){
	$("article").addClass("padding10");
	$("#info1").html("Según un estudio del Centro Médico de la Universidad de Maryland, tanto el chocolate como los helados contienen triptófano, un aminoácido que nos calma y reduce la agresividad, aumentando la producción de serotonina, también conocida como la hormona del bienestar.");
});

$("#pink").mouseover(function(){
	$("article").addClass("padding10");
	$("#info1").html("El salmón, los arándanos, las fresas, el te y las nueces ejercen un efecto positivo en nuestro estado de ánimo. Todos contienen componentes del sabor estructuralmente muy similares al ácido valproico, un medicamento antiepiléptico que también se usa también para suavizar los cambios de humor de personas con trastornos maníaco depresivos y trastorno bipolar.");
});

$(".superior div").mouseout(function(){
	$("article").removeClass("padding10");
	$("#info1").html(" ");
});
});