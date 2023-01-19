<?php

$sname = "localhost";
$rname = "root";
$pasword = "";

$db_name = "proiect";

$conn = mysqli_connect($sname, $rname, $pasword, $db_name);

if(!$conn){
    echo "Connection Failed";
}