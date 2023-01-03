<?php

$host = 'localhost';
$username = "root";
$password = "";
$database = "bantayit_gts";

if (!$con = mysqli_connect($host, $username, $password, $database)){
    die("failed to connect!");
}