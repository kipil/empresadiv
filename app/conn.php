<?php 
$serverName =   "localhost";
$dbName     =   "inegi_datos";
$username   =   "root";
$pass       =   "root";
/*

$serverName =   "localhost";
$dbName     =   "tevawork_inegi_datos";
$username   =   "tevawork_01";
$pass       =   "tevaworkinegi";
*/

$conn = mysqli_connect($serverName,$username,$pass,$dbName);

if(!$conn){

    die("Connection Failed : ".mysqli_connect_error());
}
echo "Connection Successfull <br>";






?>