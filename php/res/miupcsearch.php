<meta name="robots" content="noindex, follow">

<?php 

if(isset($_GET['upc_code'])){
	if($_GET['upc_code'] == '1234'){

		$array = array('prop1' =>'valor1', 'prop2'=>'valor2','prop3'=>'valor3');
		echo json_encode($array);
	}
}
?>
