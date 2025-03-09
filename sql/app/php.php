<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$mysqli = new mysqli("hl1339.dinaserver.com", "booksy", "S3gg5R:*18%8", "books_for_sql_course");
$mysqli->set_charset("utf8");

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
$sql = $_GET['sql'];
$sql = urldecode($sql);

if ($result = $mysqli->query($sql)) {

  $rows = array();
  while ($r = $result->fetch_assoc()) {
    $rows[] = $r;
  }
  // var_dump($rows);
  $json = json_encode($rows);
  if ($json === false) {
    // json_encode falló, obtener el error
    $error = json_last_error_msg();
    echo "JSON encode error: $error";
  } else {
    echo $json;
  }
  $result->close();
}
