<?php
$server ="localhost";
$username ="root";
$password="";
$database ="campusevent";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    //echo "successfully connected";
//}
//else {
die("Error". mysqli_connect_error());
}
?>