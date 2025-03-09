<?php
global $wpdb;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");	


define('WP_USE_THEMES', false);
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');



$request_body = file_get_contents('php://input');
//$data = json_decode($request_body);
//$post_id = $data->post_id;

$user_id = 1;//get_current_user_id();
$post_id = 1;//$_GET['post_id'];


$sql = "SELECT completed FROM monteserin_course WHERE user_id = $user_id AND post_id=$post_id";
echo $sql;
$result = $wpdb->get_results ( $sql );

$val = get_val($result);


    $wpdb->update('monteserin_course', array('completed'=>$val), array('user_id'=>$user_id, 'post_id'=>$post_id));
  
    $output = array('completed'=>$val);

echo json_encode($output);

function get_val($arr){
if( count($arr)==0 ){
    return 1;
}else if($arr[0]->completed == 0){
    return 1;
}else{
    return 0;
}

}
?>