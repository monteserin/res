

$(function(){
	//alert("hola");
	var primer=localStorage.getItem("primer");
	var segon=localStorage.getItem("segon");
	var postre=localStorage.getItem("postre");
	//alert(primer);
	$(".menuprimero").append(primer);
	$(".menusegundo").append(segon);
	$(".menupostre").append(postre);

	$(".btn").click(function(){
		$(".receta").css("display", "none");
		var valorBtn = $(this).attr("value");
		$("div#receta"+valorBtn).fadeIn("slow");
	});
});

//