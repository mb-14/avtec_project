<?php

/**
 * Simple example of extending the SQLite3 class and changing the __construct
 * parameters, then using the open method to initialize the DB.
 */



class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('events.db');
    }
}

$db = new MyDB();
$result = $db->query('SELECT end_time,duration FROM lunch_tea');

function minutes($time) {
  $minutes = 0;
    list($hour,$minute,$second) = explode(':', $time);
    $minutes += $hour*60;
    $minutes += $minute;
    $minutes += $second/60;
    return $minutes;
}
$EndTime1 = array();
$Duration1 = array();
while ($row = $result->fetchArray(SQLITE3_ASSOC)){
    array_push($EndTime1, $row['end_time']);
    array_push($Duration1, minutes($row['duration']));
    /*$data[$i]['end_time']= $row['end_time'];
   $data[$i]['duration']= minutes($row['duration']);
*/
   }
//print_r($EndTime1);
//print_r($Duration1);

?>