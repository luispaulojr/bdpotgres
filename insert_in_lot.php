<?php

require_once 'db-connect.php';


$user1 = array(
        'name' => "Alex",
        'age' => "24",
        'country' => "INDIA"
        );

$user2 = array(
        'name' => "Ben",
        'age' => 30,
        'country' => "USA"
        );

$user3 = array(
        'name' => "Dennis",
        'age' => 28,
        'country' => "USA"
        );

$users = array(
        $user1,
        $user2,
        $user3
        );

// Insert one by one
foreach ($users as $key => $user) {

    $res = pg_insert($dbconn, 'users' , $user);
    if ($res) {
      echo "Inserted user: ".$user['name']." <br />";
    } else {
      echo pg_last_error($dbconn) . " <br />";
    }

}

// Close the connection
pg_close($dbconn);
