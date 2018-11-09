<?php

require_once 'db-connect.php';

$sql = "insert into users (name, age, country)  values('Dark Night', 30, 'Gotham')";

$result = pg_query($dbconn, $sql);

if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Updated successfully";
}

// Close the connection
pg_close($dbconn);
