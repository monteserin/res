<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="robots" content="noindex">

  <title>Calcula días laborables en intervalo | Pablo Monteserín</title>
      <meta name="description" content="Esta herramienta te ayudará a calcular los días laborables dentro del intervalo de tiempo indicado">

  <style type="text/css">
label{
  width:20%;
  display: inline-block;
  *zoom:1;
  *display: inline;
  height: 20%;
}
input{
  width: 80%;
  height: 20%;
}
#envio{
  background: paleGreen;
  width:100%;
  height: 20%;
  border: 1px solid gray;
  box-shadow: 15px 15px 15px black;
}
output{
  font-size: 3em;
  font-weight: bold;
  color:IndianRed;
  text-align: center;
  margin: auto;
  display: block
}
  </style>
</head>
<body>
<h1>Cálculo de los días laborables</h1>

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


 <script>
 jQuery(function($){
        $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '&#x3c;Ant',
                nextText: 'Sig&#x3e;',
                currentText: 'Hoy',
                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
                'Jul','Ago','Sep','Oct','Nov','Dic'],
                dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
                dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
                dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''};
        $.datepicker.setDefaults($.datepicker.regional['es']);

$( ".datepicker" ).datepicker();
});
</script>
<?php
$dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
$fecha = $dias[date('N', strtotime('2008-02-25'))]; 



$dias_diferencia ="";
if(isset($_GET['enviar'])){


$date1 = $_GET["date1"];
$date2 = $_GET["date2"];
  if($date1!="" && $date2!=""){

$date1 = explode("/", $date1);
$date2 = explode("/", $date2);
//defino fecha 1
$ano1 = $date1[2];
$mes1 = $date1[1];
$dia1 = $date1[0];


//defino fecha 2
$ano2 = $date2[2];
$mes2 = $date2[1];
$dia2 = $date2[0];


$date1 = $ano1."-".$mes1."-".$dia1;
$date2 = $ano2."-".$mes2."-".$dia2;
$contadorDias = 0;
    for($i=$date1;$i<=$date2;$i = date("Y-m-d", strtotime($i ."+ 1 days"))){
      $fecha = $dias[date('N', strtotime($i))-1];

      if($fecha!="Sabado" && $fecha !="Domingo"){
        $contadorDias = $contadorDias+1;
      }
 //aca puedes comparar $i a una fecha en la bd y guardar el resultado en un arreglo
}


 }else{
  $contadorDias = "Debe introducir ambas fechas";
 }
}
?> 


<form method="get" action="#">
<label>Fecha inicio:</label><input type="text" class="datepicker" name="date1"><br>
<label>Fecha fin: </label><input type="text" name="date2" class="datepicker"><br>
<input type="submit" id="envio" name="enviar"><br><br><br>
<output><?=$contadorDias ?></output>   
</form>