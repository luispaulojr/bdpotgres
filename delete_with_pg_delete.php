<?php

require_once 'db-connect.php';

$where = array("name" => "Dennis");

$res = pg_delete($dbconn, 'users', $where);
if ($res) {
  echo "Deleted successfully.";
} else {
  echo "Error in input..";
}

// Close the connection
pg_close($dbconn);
