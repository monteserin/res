				 var currentI = 0;

		$(function(){
			var ver_soluciones_activo=false;
			var ver_explicaciones_activo=false;
			var i=0;
			$("article").each(function(){
				var respuestas_correctas = $(this).find("textarea.correcta").length;
				if(respuestas_correctas==1){
					$(this).find("h2").prepend("Pregunta "+(i+1)+'<span class="soluciones"> (1 solución)</span>');

				}else{
					$(this).find("h2").prepend("Pregunta "+(i+1)+'<span class="soluciones"> ('+respuestas_correctas+' soluciones)</span>');

				}
				$(this).append('<span style="display:none" class="currentI">'+currentI+'</span>');


				$question = $(this).find('.question');
				var pregunta_en_raw_code = $question.val().replace(/</g, '&lt;').replace(/>/g, '&gt;');
				$question.replaceWith(function(){
					return $("<pre />", {html: pregunta_en_raw_code});
				});

				$answers = $(this).find('.answer');
				$answers.each(function(){
					$this = $(this);
					var txt = "";
					if($this.hasClass('correcta'))txt= 'class="correcta"';
					var respuesta_en_raw_code = $this.val().replace(/</g, '&lt;').replace(/>/g, '&gt;');
					$this.replaceWith(function(){
						return $('<pre '+txt+'><input type="checkbox">'+ respuesta_en_raw_code+'</pre>');
					});
				});


				$(this).attr("id", "n"+i);
				i++;
			});
			mostrarCurrent();

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
				
									mostrarCurrent();

				

			});
			$("#atras").click(function(){
				currentI--;
				if(currentI == 0){
					$("atras").attr("disable", "disable");
				}
				mostrarCurrent();

			});
			$(".link").click(function(e){
				e.preventDefault();
				currentI = $(this).attr("href")	
				currentI = currentI.substring(1,currentI.length)
				location.hash = "" + currentI;
				mostrarCurrent();
			})
		})

		function mostrarCurrent(){
		

			if($("#n"+currentI).hasClass('preguntaAcertada')){
				currentI++;
				mostrarCurrent();
			}else{
								location.hash = "" + currentI;
					ver_soluciones_activo=false;
				$(".correcta").removeClass('mostrarCorrecta');

			$("article").css("display", "none");
			$("#n"+currentI).css("display", "block");				
			}

		}
		function mostrarCurrent(){
var length = $("article:not(.preguntaAcertada)").length;
				var preguntasFalladas = [];
				var contadorArticulos = 0;
				if(currentI==length){
					$("article:not(.preguntaAcertada)").each(function(){

													var pregunta_correcta = true;

						contadorArticulos++;
						$this = $(this);
						$responses = $this.find('div.responses pre');
						$responses.each(function(){
							$this2 = $(this);
							if($this2.hasClass('correcta') && $this2.find('input[type=checkbox]').is(':checked') == false || !$this2.hasClass('correcta') && $this2.find('input[type=checkbox]').is(':checked') == true){
								pregunta_correcta = false;
							}
							
							
						});
						if(pregunta_correcta== false){

								var preguntaFallada = {
								'numero': $this.find('.currentI').html()
								}
								preguntasFalladas.push(preguntaFallada);
							}else{
																$this.addClass('preguntaAcertada');

							}
					});
					alert("Has fallado " + preguntasFalladas.length + " preguntas. A continuación, puedes volver a hacer las que has fallado");
currentI= 0;


mostrarCurrent(currentI);




				}else{
				if($("#n"+currentI).hasClass('preguntaAcertada')){
				currentI++;

								mostrarCurrent(currentI);

			}else{
								location.hash = "" + currentI;
					ver_soluciones_activo=false;
				$(".correcta").removeClass('mostrarCorrecta');

			$("article").css("display", "none");
			console.log("aaaaaaaaaaa ver..." + currentI);
			$("#n"+currentI).css("display", "block");				
			}	
				}



			


		}