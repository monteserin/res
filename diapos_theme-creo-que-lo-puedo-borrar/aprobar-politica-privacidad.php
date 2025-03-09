<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");	


define('WP_USE_THEMES', false);
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');


$request_body = file_get_contents('php://input');
$data = json_decode($request_body);


$user_id = $data->user_id;

$terms_agreed[] = current_time( 'timestamp' );
update_user_meta( $user_id, 'rcp_terms_agreed', $terms_agreed );

if($data->receive_newsletter == 1){
    update_user_meta( $user_id, 'receive_newsletter', 1 );

}


// 1585776878943
// 1585667763
/* 1585777004
$data = get_user_meta( 1363, 'rcp_terms_agreed', true );
update_user_meta($user_id, 'rcp_terms_agreed', $user_meta);

var_dump($data);

*/

echo json_encode($data);
 ?>