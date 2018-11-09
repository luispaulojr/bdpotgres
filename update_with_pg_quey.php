<?php

require_once 'db-connect.php';


$sql = "update users set name ='Alex' where name = 'Alexander'";

$result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Updated successfully.";
}

// Close the connection
pg_close($dbconn);
