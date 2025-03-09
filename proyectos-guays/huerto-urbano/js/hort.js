
	$(document).ready(function(){
		$(".info").hide();
		$(".info").css("opacity", "1");	

	});

	var addEl = false;
	var hoverTrue = true;
	var ultimaBola;
	var selected = 0;
	var maxSelect = 90;
	var selectedNum = 0;
	var selectedId = "el";
	var callId = selectedId+selectedNum;



	$("#add-element").click(function(){	
	    addElement();
	});

	function addElement(){
		if(selected < maxSelect){		

			var nameEl = $("#element-name").html();

			var incompatibilityEl = $("#element-name").attr('incompatibility');
			var nameIdEl = $("#element-name").attr('name');
				 
			if (addEl){
			//if ($("#add-element").css("color")==("black")){
				
				selected++;
				selectedNum++;
				$("#my-list").append('<li class="liElement" name="'+nameIdEl+'" incompatibility="'+incompatibilityEl+'" id='+selectedId+selectedNum+' >'+nameEl+'<button class="liRemove"><p>X</p></button></li>');
			}		
			else{
				alert("Selecciona un element per afegir-lo a la llista");
			}	
		}
		else{
			alert("No pots afegir més elements");

		}
	}

	$(".circle").click(function(){	
	    listenClick($(this));
	});


	$(".circle").mouseenter(function() {
		if(hoverTrue){
			var hoverName = $(this).attr('title');
			$(this).html('<span class="hoverName">'+hoverName+'</span>');
		}
	});

	$(".circle").mouseout(function() {
		
		$("span").remove();
	});
	$("#side-a").mouseenter(function() {

			$("#home").css("opacity", "0.2");
	});
	$("#home").mouseenter(function() {

			$("#home").css("opacity", "1");
	});
	$("#side-a").mouseleave(function() {
		
		$("#home").css("opacity", "0");
	});

	$("#home").mouseleave(function() {
		
		$("#home").css("opacity", "0.2");
	});

	$("#result").click(function(){
		$(".circle").css("z-index", "0");
		$(".circle").css("transform", "translate(0,0)");
		$("#element").hide();	

		$(".external-html").load("pages/result.html").hide().fadeIn('slow');
		$(".info").css("z-index","2");
		$(".info").hide();
		$(".info").fadeIn(250);

		calcul();
	})

	function calcul(){
		$('#content')[0].scrollIntoView(true);
		$(".finalresult").empty();
		$(".finalresult2").empty();
		$(".printButton").empty();
		$("#side-a").css("background", "#4DD0E1");

		 var elementList = [];
		 var incompatibilityList = [];

		$('.liElement').each(function (){
			elementList.push($(this).attr('name'));

			incompatibilityList.push($(this).attr('incompatibility').split(' '));
		});

		$(".finalresult").append('<h2>Associació desfavorable dels següents cultius</h2><br>');
		$(".finalresult2").append('<div class="separator"></div><br><h2>Calendari</h2><br>');
		$(".printButton").append('<input type="button" class="button-side-b lastColor imprimir" onclick="printPage()" value="Imprimir"></input>')
			if(jQuery.inArray("carbassa", elementList)!==-1){		
				
				$(".finalresult2").append("<p>Del Març al Maig és el moment de sembrar la carbassa</p>");
				$(".finalresult2").append("<p>Cull la carbassa en cinc mesos</p><br>");
			}		
			if(jQuery.inArray("alfabrega", elementList)!==-1){		
				
				$(".finalresult2").append("<p>Del Febrer al Juny és el moment de plantar l'alfàbrega.</p>");
				$(".finalresult2").append("<p>Del Juny a l'Octubre és la floració de l'alfàbrega</p><br>");
			}
			if(jQuery.inArray("brocoli", elementList)!==-1){		
				
				$(".finalresult2").append("<p>Del Maig a l'Agost és el moment de plantar bròcoli.</p>");
				$(".finalresult2").append("<p>Cull el bròcoli en cinc mesos.</p><br>");
			}			
			if(jQuery.inArray("fonoll", elementList)!==-1){		
				
				$(".finalresult2").append("<p>Del Juny al Agost és el moment de sembrar el fonoll.</p>");
				$(".finalresult2").append("<p>Cull el fonoll entre Març i Juny.</p><br>");
			}
			if(jQuery.inArray("rave", elementList)!==-1){		
				
				$(".finalresult2").append("<p>A l’Abril és el moment de plantar raves.</p>");
				$(".finalresult2").append("<p>Cull els raves al Maig.</p><br>");
			}
			if(jQuery.inArray("patatera", elementList)!==-1){
				
				$(".finalresult2").append("<p>A l’Abril és el moment de plantar patates.</p>");
				$(".finalresult2").append("<p>Cull les patates entre Juny i Setembre.</p><br>");
			}
			if(jQuery.inArray("all", elementList)!==-1){
				
				$(".finalresult2").append("<p>Del Novembre al Març és el moment de plantar alls.</p>");
				$(".finalresult2").append("<p>Cull els alls entre Maig i Juliol.</p><br>");
			}						
			if(jQuery.inArray("alberginiera", elementList)!==-1){
				
				$(".finalresult2").append("<p>Al Febrer és el moment de plantar alberginies.</p>");
				$(".finalresult2").append("<p>Cull les alberginies a l'Agost.</p><br>");
			}
			if(jQuery.inArray("bleda", elementList)!==-1){
				
				$(".finalresult2").append("<p>A l'Abril és el moment de plantar bledes.</p>");
				$(".finalresult2").append("<p>Cull les bledes a l'Agost.</p><br>");
			}
			if(jQuery.inArray("pebrotera", elementList)!==-1){
				
				$(".finalresult2").append("<p>De finals de Febrer a Abril és el moment de sembrar la pebrotera.</p>");
				$(".finalresult2").append("<p>Cull els pebrots a finals de Juny fins a Setembre.</p><br>");
			}				

			if(jQuery.inArray("tomaquera", elementList)!==-1){
				
				$(".finalresult2").append("<p>A l'Abril és el moment de plantar tomaqueres.</p>");
				$(".finalresult2").append("<p>Cull els tomaquets a l'Agost.</p><br>");
			}
			if(jQuery.inArray("api", elementList)!==-1){
				
				$(".finalresult2").append("<p>Al Març és el moment de plantar api.</p>");
				$(".finalresult2").append("<p>Cull els apis a l'Agost.</p><br>");
			}
			if(jQuery.inArray("carbasso", elementList)!==-1){
				
				$(".finalresult2").append("<p>Al Maig és el moment de plantar carbassó.</p>");
				$(".finalresult2").append("<p>Cull els carbassons a l'Agost.</p><br>");
			}		
			if(jQuery.inArray("ceba", elementList)!==-1){
				
				$(".finalresult2").append("<p>Del Març a l'Abril és el moment de plantar cebes.</p>");
				$(".finalresult2").append("<p>Cull les cebes entre l'Agost i Setembre.</p><br>");
			}
			if(jQuery.inArray("col", elementList)!==-1){
				
				$(".finalresult2").append("<p>A l'Abril és el moment de plantar cols.</p>");
				$(".finalresult2").append("<p>Cull les cols entre l'Agost i Setembre.</p><br>");
			}	
			if(jQuery.inArray("endivia", elementList)!==-1){
				
				$(".finalresult2").append("<p>D'Abril a Agost és el moment de plantar endivies.</p>");
				$(".finalresult2").append("<p>Cull les endivies entre Setembre i Febrer.</p><br>");
			}
			if(jQuery.inArray("fava", elementList)!==-1){
				
				$(".finalresult2").append("<p>Del Febrer a l'Abril és el moment de plantar faves.</p>");
				$(".finalresult2").append("<p>Cull les faves entre Juliol i l'Agost.</p><br>");
			}		
			if(jQuery.inArray("pesol", elementList)!==-1){
				
				$(".finalresult2").append("<p>Del Març al Juliol és el moment de plantar pèsols.</p>");
				$(".finalresult2").append("<p>Cull els pèsols entre Maig i l'Agost.</p><br>");
			}	
			if(jQuery.inArray("pastanaga", elementList)!==-1){
				
				$(".finalresult2").append("<p>Del Maig al Juny és el moment de plantar pastanagues.</p>");
				$(".finalresult2").append("<p>Cull les pastanagues entre Setembre i l'Octubre.</p><br>");
			}	
			if(jQuery.inArray("espinac", elementList)!==-1){
				
				$(".finalresult2").append("<p>Del Març al Maig és el moment de plantar espinacs.</p>");
				$(".finalresult2").append("<p>Cull els espinacs entre Juny i l'Octubre.</p><br>");
			}	
			if(jQuery.inArray("thymus", elementList)!==-1){
				
				$(".finalresult2").append("<p>Del Març al Maig és el moment de plantar farigola.</p>");
				$(".finalresult2").append("<p>Cull la farigola entre l'Abril i Juny.</p><br>");
			}	
			if(jQuery.inArray("julivert", elementList)!==-1){
				
				$(".finalresult2").append("<p>Del Febrer al Maig i de l'Agost al Setembre és el moment de plantar julivert.</p>");
				$(".finalresult2").append("<p>Cull el julivert entre l'Abril i l'Agost.</p><br>");
			}		
			if(jQuery.inArray("xicoira", elementList)!==-1){
				
				$(".finalresult2").append("<p>Pots sembrar xicoira tot l'any.</p>");
				$(".finalresult2").append("<p>Cull la xicoira quan la necessitis.</p><br>");
			}	
			if(jQuery.inArray("carxofera", elementList)!==-1){
				
				$(".finalresult2").append("<p>Pots fer esqueixos durant el Juliol i l'Agost de la carxofa.</p>");
				$(".finalresult2").append("<p>Cull la carxofa entre Octubre i Maig.</p><br>");
			}	
			if(jQuery.inArray("coliflor", elementList)!==-1){
				
				$(".finalresult2").append("<p>Del Setembre al Febrer és el moment de plantar coliflors</p>");
				$(".finalresult2").append("<p>Cull la coliflor entre Juliol i Agost.</p><br>");
			}	
			if(jQuery.inArray("remolatxa", elementList)!==-1){
				
				$(".finalresult2").append("<p>Pots sembrar el remolatxa durant tot l'any.</p>");
				$(".finalresult2").append("<p>Cull la remolatxa en tres mesos.</p><br>");
			}			
			if(jQuery.inArray("porro", elementList)!==-1){
				
				$(".finalresult2").append("<p>Pots sembrar el porro al Febrer i de Juliol a Setembre.</p>");
				$(".finalresult2").append("<p>Cull els porros en cinc mesos.</p><br>");
			}	
			if(jQuery.inArray("enciam", elementList)!==-1){
				
				$(".finalresult2").append("<p>Pots sembrar l'enciam al Febrer i a l'Octubre.</p>");
				$(".finalresult2").append("<p>Cull els enciams en tres mesos.</p><br>");
			}
			if(jQuery.inArray("maduixera", elementList)!==-1){
				
				$(".finalresult2").append("<p>Pots sembrar la maduixera de l'Abril al Maig.</p>");
				$(".finalresult2").append("<p>Cull les maduixes al Juny.</p><br>");
			}	
			if(jQuery.inArray("colinap", elementList)!==-1){
				
				$(".finalresult2").append("<p>Pots sembrar el colinap del Març al Setembre.</p>");
				$(".finalresult2").append("<p>Cull els colinaps en cinc mesos.</p><br>");
			}			
			if(jQuery.inArray("menta", elementList)!==-1){
				
				$(".finalresult2").append("<p>Pots plantar la menta durant tot l'any.</p>");
				$(".finalresult2").append("<p>Cull la menta durant el periode de floració, a l'estiu.</p><br>");
			}								
		 var auxList = [];

		elementList.forEach(function (element) {
			 var elementsFinalList = [];

			for (i = 0; i < incompatibilityList.length; i++) {
				incompatibilityList[i].forEach(function (elementIncompatibility) {
					if(element == elementIncompatibility)
					{
						elementsFinalList.push(elementList[i]);
					}
				});
			}

			auxList.push(elementsFinalList);

		});

		for (i = 0; i < elementList.length; i++) {

			 var currName = $("li[name='"+elementList[i]+"']").children().html();

			 var mustPrint = false;

			 var finalStr = "<p class="+elementList[i]+"> " + currName + " es incompatible amb el cultiu de ";
			
			auxList[i].forEach(function(incompatibleElement){
				if(!$("p").hasClass(incompatibleElement))
				{
					var currElementName = $("li[name='"+incompatibleElement+"']").children().html();

					finalStr += currElementName + ", ";
					mustPrint = true;

				}
			});

			finalStr = finalStr.slice(0, finalStr.length-2) + ".</p>";


			if(mustPrint)
			{
				$(".finalresult").append(finalStr);

			}

		};


	}

	function listenClick($this){
		$('#element')[0].scrollIntoView(true);
		
		if(addEl){
			close();
		}
		hoverTrue = false;
		addEl = true;
		$(".finalresult").empty();
		$(".finalresult2").empty();
		$(".printButton").empty();
		$this.css("cursor", "auto");
		$("#content").css("overflow","visible");
		$("#add-element").removeClass("inactive").addClass("button-side-a ");
		var n = $this.attr("id");		

		$("#element").load("pages/name_"+n+".html #element").hide().fadeIn('slow', function(){
			var colorElement = $("#element-name").attr('colorElement');
			$("#side-a").css("background", colorElement);
			
		});	
		//.substr(n.length-1, n.length)
		$(".external-html").load("pages/name_"+n+".html #external").hide().fadeIn('slow');

		ultimaBola = $this;
		$this.attr("posInicialX",$this.offset().left);
		$this.attr("posInicialY", $this.offset().top);

		$this.unbind('click');

		var disX = $("#locate").offset().left;
		var circleX = $this.offset().left;
		var disY = $("#locate").offset().top;
		var circleY = $this.offset().top;

		var x = disX-circleX;
		var y = disY-circleY;
		
		$(".hovicon").css("z-index","4");
		$(".circle").not($this).css("z-index", "0");
		$(".info").css("z-index","2");
		$(".info").hide();
		$(".info").fadeIn(250);
		$this.css("transform", "translate3d("+x+"px ,"+y+"px, 0)");
		$this.removeClass("effect-9");
		

	}


	$(window).resize(function(){

	}); 

	$(".close").click(function close(){
		$('.info')[0].scrollIntoView(true);
		addEl = false;
		hoverTrue = true;
		$(".circle").css("cursor", "pointer");
		$("#side-a").css("background", "#4DD0E1");
		$(".hovicon").css("z-index","-3");
		$("#content").css("overflow","auto");
		$("#add-element").removeClass("button-side-a").addClass("inactive");	
		$("#element").hide();	
		$(".info").fadeOut();		
		$(".info").css("z-index","0");
		$(".circle").css("z-index", "2");
		$(".circle").css("transform", "translate3d(0,0,0)");
		$(ultimaBola).addClass("effect-9");


	$(".circle").click(function(){	
		listenClick($(this));
			
		});
	});

	$("#my-list").delegate(".liRemove", "click", function(){
		selected--;
		selectedNum--;
		$(this).closest('li').fadeOut( function() { $(this).remove(); });
		
	})

	function printPage() {
    	window.print();
	}
	