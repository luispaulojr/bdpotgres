<?php

require_once 'db-connect.php';

$where_condition = array('name'=>'Alex');

$data = array("name" => "Alexander");


$res = pg_update($dbconn, 'users', $data, $where_condition);
if ($res) {
  echo "Data is updated: $res";
} else {
  echo "error in input.. <br />";
  echo pg_last_error($dbconn);
}

// Close the connection
pg_close($dbconn);
