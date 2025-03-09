	var sumapos=45; 
	var valnivel=[230,230,300,400,450];

	var escogidos= [["","",0],["","",0],["","",0]];

	var descripcion1=["Algas marinas","Salmón"];
	var descripcion2=["Arroz","Pollo"];
	var descripcion3=["Chocolate","Cereales","Fruta"];

	var primer=" ";
	var segon=" ";
	var postre=" ";

	var slectortubo=["primer","segon","postre"];

	var recetario=[["Ensalada de algas wakame","Makis de salmón"],["Arroz negro","Pollo a la cerveza"],["Fondue de chocolate","Macedonia de frutas"]]


$(function(){ 		//document ready

		localStorage.setItem("primer"," "); 		//Inicializamos la información que se envía a recetas.html
		localStorage.setItem("segon"," ");
		localStorage.setItem("postre"," ");

	$("#primer").click(function(){
		esencias($(this), $(this).attr("nombreClass"),0,descripcion1,$(this).attr("chuleta"));
	});

	$("#segon").click(function(){
		esencias($(this), $(this).attr("nombreClass"),1,descripcion2,$(this).attr("chuleta"));
	});

	$("#postre").click(function(){
		esencias($(this), $(this).attr("nombreClass"),2,descripcion3,$(this).attr("chuleta"));
	});

$("#preparar").click(function(){

		localStorage.setItem("primer",primer);
		localStorage.setItem("segon",segon);
		localStorage.setItem("postre",postre);
		location.href= "recetas.html";			//redireccionar a otro enlace con javascript
	});
});


function esencias($this, nombreClass,numArray,descripcion,chuleta){
	if(escogidos[numArray][2]<=1){
		
		var ordre=$this.closest(".imatges").find(".cycle-slide-active").attr("value");		// recuperamos el valor de la imagen elegida

/*------- Cálculo del nivel del líquido --------*/

		sumapos=valnivel[ordre]-sumapos;	/*no es correcta la operación*/
		$("."+nombreClass).css("background-position", "100px 0, 115px "+sumapos+"px");

		escogidos[numArray][escogidos[numArray][2]] =descripcion[ordre];
		escogidosTxt="";
		escogidosTxt =" "+ escogidos[numArray][0] + escogidos[numArray][1];
		$("#"+chuleta).html("Esencia de: "+escogidosTxt);

		if(escogidos[numArray][2]==1){			//se han elegido dos ingredientes
			$this.find(".icon-download-alt").addClass("icon-repeat");

			for (i=0; i<2;i++){						//Elección del menú
				if((escogidos[0][i])=="Salmón"){
					primer=recetario[0][1];
				}
				if((escogidos[0][i])!="Salmón"){
					primer=recetario[0][0];
				}
				if((escogidos[1][i])=="Pollo"){
					segon=recetario[1][1];
				}
				if((escogidos[1][i])!="Pollo"){
					segon=recetario[1][0];
				}
				if((escogidos[2][i])=="Chocolate"){
					postre=recetario[2][0];
				}
				if((escogidos[2][i])!="Chocolate"){
					postre=recetario[2][1];
				}
			}
		}	

		escogidos[numArray][2]++;
	}

	else{
		var numero=numArray;

		escogidos[numArray][2]=0;
		escogidos[numArray][0]=0;
		escogidos[numArray][1]=0;
		escogidosTxt=" ";
		sumapos=45;

		$("#"+chuleta).html("Esencia de: "+escogidosTxt);	
		$("."+nombreClass).css("background-position", "100px 0, 115px 502px");
		$this.find(".icon-download-alt").removeClass("icon-repeat");   	 

		var plat=selectortubo[numero];	//borrar la información (de un tubo) que se envía a recetas.html
		localStorage.setItem(plat,"");
		}
	}
