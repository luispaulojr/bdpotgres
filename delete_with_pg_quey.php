<?php

require_once 'db-connect.php';


$sql = "delete from users where name = 'Dark Night'";

 $result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Deleted successfully\n";
}


// Close the connection
pg_close($dbconn);
