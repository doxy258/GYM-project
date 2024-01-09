<?php 

session_start();

$servername = "localhost";
$db_username= "root";
$password = "";
$database_name = "teretana";

$conn = mysqli_connect($servername, $db_username, $password, $database_name);

if(!$conn){
    die("Neuspešna konekcija");

}