<?php 
/*
$titulo_curso="R";

//No he añadido el slash a la búsqueda de strpos porque el slash en windows y en linux son diferentes
$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
include $path."diapos_theme/head.php";

add_action( 'genesis_after_header', function(){
	global $path;
	global $titulo_curso;
		include $path."diapos_theme/body_init.php";
*/
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Curso de HTML 5 y CSS, Diseño Web",
  "description": "Curso de HTML5 y CSS, Curso de Diseño Web desde nivel básico a avanzado. Llevo más de 12 años impartiendo, mejorando y actualizando el contenido de este curso.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Monteserín",
    "sameAs": ["https://pablomonteserin.com/","https://www.facebook.com/pablomonteserincom/","https://www.linkedin.com/in/%E2%99%A5-pablo-monteser%C3%ADn-59079728/","https://www.youtube.com/user/PabloMonteserinTutor","https://twitter.com/monteserin1982"]
  }
}
</script>

    <h1 class="container"><?= $titulo_curso?></h1>

<section id="amor" class="verIndice">

				<article id="inicio_del_documento" class="indice">
          <h2>Índice del curso de <?= $titulo_curso?></h2>

<ol>  
	<li><a href="#introduccion">Introducción</a></li>

</ol>;
</article>
</section>
<main class="curso">
<section>
	<h2 id="introduccion">Introducción</h1>
	

	<h2>Descarga</h2>
  <p><a href="https://cran.r-project.org/bin/windows/base/" target="_blank">Descarga del nucleo de R</a></p>

	<p><a href="https://rstudio.com/products/rstudio/download/" target="_blank">Descarga de R Studio</a></p>


<h2>Definir e imprimir variables</h2>
<p>Para definir una variable usamos el signo <span class="bold">-></span></p>
<p>Para imprimirla, usamos <span class="bold">print</span></p>
	<pre><code>myString <- "Hello, World!"
print ( myString)</code></pre>

<p>De hecho, para imprimir una variable podemos escribir directamente le nombre de la variable</p>
<pre><code>myString <- "Hello, World!"
myString</code></pre>



<h2>Concatenar variables impresas</h2>

<pre><span class="bold">Usaremos la función paste</span><code>print(paste("Historial Dinero:", variable))</code></pre>
<h2>Condicionales</h2>

<pre><code>if(4>3) {
  print("es true")
}else{
	print("es false")
}</code></pre>



<h2>Generar un número aleatorio entre 0 y 1 (uniform randum number)</h2>
<pre><code>n<-runif(1)
n</code></pre>


<h2>Arrays</h2>
<h3>Definir un array</h3>
<pre><code>arrayApuesta <- c(1,2,3,4)</pre></code>

<h3>Imprimir elementos de un array como texto</h3>
<pre><code>arrayApuesta <- c(2,3)
paste(arrayApuesta, collapse="-")</code></pre>
<h3>Añadir un elemento en cierta posición de un array</h3>
<pre><span class="bold">Esto añade un elemento al final de un array</span><code>arrayApuesta <- c(2)
append(arrayApuesta,5,length(arrayApuesta))</code></pre>

<h2>Ruleta</h2>
<h3>Con Margingala</h3>
<pre><code>dinero<-12000

p<-0.5
apuestaMax <- 0  
tiempo<-1
historialdinero<-c(dinero, rep(NA, 99))  
apuesta<-1
while(historialdinero[tiempo] > 0 & tiempo < 10000){
  tiempo<-tiempo+1
  ruleta<-runif(1)
  if(ruleta>p){
    historialdinero[tiempo]<-historialdinero[(tiempo-1)] + apuesta
    print(paste("******EXITO. Dinero acumulado: " , historialdinero[tiempo]))   
    apuesta<-1
  }else{
    historialdinero[tiempo]<-historialdinero[(tiempo-1)] - apuesta
    print(paste("FRACASO. Dinero acumulado: " , historialdinero[(tiempo-1)] - apuesta))
    apuesta<-apuesta*2
  }
  if(apuestaMax < apuesta){
    apuestaMax = apuesta
  }
}
print(paste("APUESTA MAX:", apuestaMax))
plot.ts(historialdinero, lwd=3)</code></pre>
<h3>Martingala con stoploss</h3>
<pre><code>dinero<-1024
apuesta<-0.5
stopLoss <- 64

historialdinero<-c(dinero, rep(NA, 99))
p<-0.5
tiempo<-1
apuestaMax <- 0  
  
while(historialdinero[tiempo] > 0 & tiempo < 100000){
  tiempo<-tiempo+1
  ruleta<-runif(1)
  if(ruleta>p){
    historialdinero[tiempo]<-historialdinero[(tiempo-1)] + apuesta
    print(paste("******EXITO. Dinero acumulado: " , historialdinero[tiempo]))
    apuesta<-1
  }else{
    historialdinero[tiempo]<-historialdinero[(tiempo-1)] - apuesta
    print(paste("FRACASO. Dinero acumulado: " , historialdinero[(tiempo-1)] - apuesta))
    if(apuesta < stopLoss){
      apuesta<-apuesta*2
    }else{
      apuesta <-1
    }
  }
  if(apuestaMax < apuesta){
    apuestaMax = apuesta
  }
}
    
print(paste("APUESTA MAX:", apuestaMax))
plot.ts(historialdinero, lwd=3)</code></pre>

  <h3>Martingala con stoploss y apuesta objetivo</h3>

  <pre><code>dinero<-519
apuesta<-0.5
stopLoss <- 300000
objetivodinero <-256


apuestaMax <- 0  
tiempo<-1
historialdinero<-c(dinero, rep(NA, 99))
p<-0.5

while(historialdinero[tiempo] > 0 & tiempo < 10000){
  tiempo<-tiempo+1
  ruleta<-runif(1)
  if(ruleta>p){
    historialdinero[tiempo]<-historialdinero[(tiempo-1)] + apuesta
    print(paste("******EXITO. Dinero acumulado: " , historialdinero[tiempo]))
    if(historialdinero[tiempo] > objetivodinero + dinero){
      print(paste("OBJETIVO DE GANAR ", objetivodinero, ", cumplido"))
      break
    }
    apuesta<-1
  }else{
    historialdinero[tiempo]<-historialdinero[(tiempo-1)] - apuesta
    print(paste("FRACASO. Dinero acumulado: " , historialdinero[(tiempo-1)] - apuesta))
    if(apuesta < stopLoss){
      apuesta<-apuesta*2
    }else{
      apuesta <-1
    }
  }
  if(apuestaMax < apuesta){
    apuestaMax = apuesta
  }
}
print(paste("APUESTA MAX:", apuestaMax))
plot.ts(historialdinero, lwd=3)</code></pre>
<h3>Con Labouchere y stoploss</h3>
  <pre><code>dinero <- 50
stopLoss = 32
objetivoGanancias = 50
apuestaInicial <- 0.5

#################################################
#probabilidad de ganar
p <- 0.5
dineroActual <- 0
plantillaArray <- c(apuestaInicial)
arrayApuesta <- plantillaArray
tiempo <- 1
historialdinero <- c(dinero, rep(NA, 99))
dineroQueLlegueATenerMax <- dinero
dineroQueLlegueATenerMin <- dinero
apuestaMax = 0;
sumaValoresArrayMax <- 0

print("===============================================================================")
print("===============================================================================")
apuesta = 0;
while (historialdinero[tiempo] > 0 & tiempo < 30000) {
  tiempo <- tiempo + 1
  ruleta <- runif(1)

  if (length(arrayApuesta) >= 2) {
    apuesta <- arrayApuesta[1] + arrayApuesta[length(arrayApuesta)]
  } else {
    apuesta <- arrayApuesta[1]
  }
    if (apuesta > stopLoss) {
      print("................................................")
      print("........................TOPE DE APUESTA REBASADO")
      print("................................................")
 
      arrayApuesta <- plantillaArray
      historialdinero[tiempo] <- historialdinero[tiempo - 1]
      next
    }

  # Dinero del array

  if (apuestaMax < apuesta) {
    sumaValoresArrayMax = 0
    for (i in 1:length(arrayApuesta)) {
      sumaValoresArrayMax <- sumaValoresArrayMax + arrayApuesta[i]
    }
    apuestaMax = apuesta
  }
  if (ruleta > p) {
    # Si ganamos la apuesta
    historialdinero[tiempo] <- historialdinero[(tiempo - 1)] + apuesta
    if (length(arrayApuesta) >= 2) {
      arrayApuesta <- arrayApuesta[-c(1, length(arrayApuesta))]
    } else {
      arrayApuesta <- arrayApuesta[-c(1)]
    }

    if (dineroQueLlegueATenerMax < historialdinero[tiempo]) {
      dineroQueLlegueATenerMax = historialdinero[tiempo];
    }
    if (dineroQueLlegueATenerMin > historialdinero[tiempo]) {
      dineroQueLlegueATenerMin = historialdinero[tiempo];
    }

    if (TRUE && dineroQueLlegueATenerMax >= dinero + objetivoGanancias) {
      print(paste("OBJETIVO CUMPLIDO. Dinero acumulado: ", historialdinero[tiempo]));
      break;
    }
    if (length(arrayApuesta) == 0) {
      #ganamos un ciclo
      print(paste("******ARRAY DE APUESTAS COMPLETADO. Money: ", historialdinero[tiempo]))
      arrayApuesta <- plantillaArray
    }
    print(paste("APUESTA GANADA. Historial Dinero:", historialdinero[tiempo], ",Array de apuestas:", paste(arrayApuesta, collapse = "-")))

  } else {
    # Si perdemos la apuesta
    dineroActual <- dineroActual - apuesta
    historialdinero[tiempo] <- historialdinero[(tiempo - 1)] - apuesta
    arrayApuesta <- append(arrayApuesta, apuesta, length(arrayApuesta))
    print(paste("APUESTA PERDIDA. Historial Dinero:", historialdinero[tiempo], ", Array de apuestas:", paste(arrayApuesta, collapse = "-")))
  }
  print(paste("--------------------", historialdinero[tiempo]))

}

print(paste("Dinero que llegue a tener. Max: ", dineroQueLlegueATenerMax, ", Min: ", dineroQueLlegueATenerMin, ", Apuesta MAX: ", apuestaMax, ", Suma de los valores del array en ese momento: ", sumaValoresArrayMax))
plot.ts(historialdinero, lwd = 3)</code></pre>


</section>


</main>
<?php 
/*
});
include $path."/diapos_theme/footer.php";
*/
?>


https://edutin.com/curso-de-r-4302