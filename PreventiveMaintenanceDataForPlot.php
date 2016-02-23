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
$result = $db->query('SELECT end_time,duration FROM pm');

function hours($time) {
  $hours = 0;
    list($hour,$minute,$second) = explode(':', $time);
    $hours += $hour;
    $hours += $minute/60;
    $hours += $second/3600;
    return $hours;
}
$EndTime3 = array();
$Duration3 = array();
while ($row = $result->fetchArray(SQLITE3_ASSOC)){
    array_push($EndTime3, $row['end_time']);
    array_push($Duration3, hours($row['duration']));
    /*$data[$i]['end_time']= $row['end_time'];
   $data[$i]['duration']= minutes($row['duration']);
*/
   }
//print_r($EndTime3);
//print_r($Duration3);

?>