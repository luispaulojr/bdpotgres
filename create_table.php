<?php

require_once 'db-connect.php';


$sql = "CREATE TABLE USERS
      (ID       SERIAL PRIMARY KEY,
      NAME      TEXT    NOT NULL,
      AGE       INT     NOT NULL,
      COUNTRY   TEXT     NOT NULL
      )";

$result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Table created successfully";
}

// Close the connection
pg_close($dbconn);
