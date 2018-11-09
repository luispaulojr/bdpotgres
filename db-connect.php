<?php

#$host = "localhost";
#$port = "5432";
#$dbname = "dummy";
#$user = "postgres";
$host = "ec2-204-236-230-19.compute-1.amazonaws.com";
$port = "5432";
$dbname = "d9lg66hor5m0m2";
$user = "vrwoepszbmivuh";
$password = "ce764c16b2fb64d33cf7f90147fb2678a30ea0fc9688542aebab1be198f2cdd8";
$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$dbconn = pg_connect($connection_string);


if($dbconn){
    echo "Connected to ". pg_host($dbconn);
}else{
    echo "Error in connecting to database.";
}

echo "<br />";
