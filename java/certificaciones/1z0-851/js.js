		$(function(){
			var ver_soluciones_activo=false;
			var ver_explicaciones_activo=false;
			var i=0;
			var currentI = 0;
			$("article").each(function(){
				var respuestas_correctas = $(this).find("div.correcta").length;
				if(respuestas_correctas==1){
				$(this).find("h2").prepend("Pregunta "+(i+1)+'<span class="soluciones"> (1 solución)</span>');

				}else{
									$(this).find("h2").prepend("Pregunta "+(i+1)+'<span class="soluciones"> ('+respuestas_correctas+' soluciones)</span>');

				}
				$(this).attr("id", "n"+i);
				i++;
			});
						mostrarCurrent(currentI);

			$("#ver_soluciones").click(function(){
				if(ver_soluciones_activo==false){
					$(".correcta").addClass("mostrarCorrecta");		
					ver_soluciones_activo=true;
				}else{
					ver_soluciones_activo=false;
					$(".correcta").removeClass('mostrarCorrecta');
				}

			});
			$("#ver_explicaciones").click(function(){
				if(ver_explicaciones_activo==false){
					$(".ex").addClass("mostrar");
					ver_explicaciones_activo=true;
				}else{

											$(".ex").removeClass("mostrar");
			ver_explicaciones_activo=false;

				}
			});
			$("#siguiente").click(function(){

				currentI++;					
				$("atras").removeAttr("disable", "disable");
				var length = $("article").length;
				if(currentI==length){
					alert("llegamos al final");
				}
				location.hash = "" + currentI;
				$("article").css("display", "none");
				$("#n"+currentI).css("display", "block");

					ver_soluciones_activo=false;
					$(".correcta").removeClass('mostrarCorrecta');

					$(".ex").removeClass("mostrar");
			ver_explicaciones_activo=false;
			});
			$("#atras").click(function(){
				currentI--;
				if(currentI == 0){
					$("atras").attr("disable", "disable");
				}
				location.hash = "" + currentI;
				mostrarCurrent(currentI);

			});
		})

function mostrarCurrent(currentI){
$("article").css("display", "none");
				$("#n"+currentI).css("display", "block");
}