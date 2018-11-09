<?php

require_once 'db-connect.php';

$result = pg_query($dbconn, "SELECT * FROM users");
if (!$result) {
    echo "An error occurred.\n";
    exit;
}

$arr = pg_fetch_all($result);

echo "<pre>";
print_r($arr);
echo "</pre>";
