<?php

require_once 'db-connect.php';

$result = pg_query($dbconn, "SELECT * FROM users");
if (!$result) {
    echo "An error occurred.\n";
    exit;
}



echo "Fetch array: <br>";

$arr = pg_fetch_array($result);
// $arr = pg_fetch_array($result,7,PGSQL_NUM);  //Start index
// $arr = pg_fetch_array($result,NULL, PGSQL_ASSOC); // Fetch Associative array


echo "<pre>";
print_r($arr);
echo "</pre>";
