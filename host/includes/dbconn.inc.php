<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "placement-service";

$conn = mysqli_connect($servername, $dbusername,$dbpassword, $dbname );

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}