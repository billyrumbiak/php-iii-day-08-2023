<?php
// koneksi database
$server = "localhost";
$database = "Day08";
$name = "root";
$password = "";

$conn = mysqli_connect($server, $name, $password, $database);

$idweekend = "SELECT * FROM idweekend";
$weekends = mysqli_query($conn,$idweekend);

// var_dump($idweekend);