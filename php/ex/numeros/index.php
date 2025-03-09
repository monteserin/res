<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ES" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ejercicio de PHP | Pablo Monteserín</title>
<meta name="description" content="Ejercicio de PHP aplicaremos diferentes algoritmos y funciones para mostrar una serie de números por pantalla">

</head>
<body>
<h1>Ejercicio con números usando PHP</h1>
<div>
<?php
   	
	/************* FUNCTION *************/
	//Aquí va el codi de les funcions

	function LF()
	{ //line feed
		print "<br />";
	}
	
	function getData(){
		$filename = $_GET['filename'];
		include $filename;
		$array = explode(" ", $cadena);
		return $array;
	}
	function round2($num){
		return round($num, 2);
	}
	function showNumbers($data, $cadena){
		echo "<h3>".$cadena."</h3>";
		foreach ($data as $key => $value) {
			echo $value." ";
		}
	}
	function tableAverage($data){
		$sum = 0;
		foreach ($data as $key => $value) {
			$sum += $value;
		}
		$r = $sum/count($data);
		return $r;
	}
	function createDeviationTable($in, $average){
		$out = array();
		foreach ($in as $key => $value) {
			$out[$key] = $value-$average;
		}
		return $out;
	}
	function createVarianceTable($in, $average){
		$out = array();
		$sum = 
		$ac=0;
		foreach ($in as $key => $value) {
			 $out[$key] = ($value-$average)*($value-$average);
		}
		return $out;
	}
	/************* MAIN *************/
	
	$originalData = getData();
	showNumbers($originalData, "Original data");
	LF();
	$av = tableAverage($originalData);
	print "Average = ".round2($av);
	LF();
	
	$deviationData = createDeviationTable ($originalData, $av);
	showNumbers($deviationData, "Average Deviations");
	
	$varianceData = createVarianceTable($originalData, $av);
	showNumbers($varianceData, "Variance Deviations");
	
	$var = tableAverage($varianceData);
	LF();
	print "Variance = ".round2($var);
	LF();LF();
	print "Standard deviation = ".round2(sqrt($var)); 
	
?>
</div>
</body>
</html>