<?php

require_once 'db-connect.php';

$result = pg_query($dbconn, "SELECT * FROM users");
if (!$result) {
    echo "An error occurred.\n";
    exit;
}


echo "Fetch row: <br>";


while ($row = pg_fetch_row($result)) {
 print_r($row[1]);
}
