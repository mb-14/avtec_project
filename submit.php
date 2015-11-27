<?php

include 'db.php';
$table = $_POST['table'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$duration = $_POST['duration'];
switch($table)
{
  case "job":
  case "machine_failure":
  case "setup_change":
    $extra = json_decode($_POST['extra'],true);
    $var1 = $extra[0]['value'];
    $var2 = $extra[1]['value'];
    $sql = "INSERT INTO '$table' VALUES ('$start_time', '$end_time', '$duration', '$var1', '$var2')";
    $db->exec($sql);
    break;
  case "production_stoppage":
  case "operator_unavailability":
    $extra = json_decode($_POST['extra'],true);
    $cause = $extra[0]['value'];
    $sql = "INSERT INTO '$table' VALUES ('$start_time', '$end_time', '$duration', '$cause')";
    $db->exec($sql);
    break;
  case "pm":
  case "precautionary_check":
  case "lunch_tea":
    $sql = "INSERT INTO '$table' VALUES ('$start_time', '$end_time', '$duration')";
    $db->exec($sql);
    break;
}
echo json_encode(array("response"=>'success'));
?>
