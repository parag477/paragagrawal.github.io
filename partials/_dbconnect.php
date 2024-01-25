<?php
$servername = "localhost";
$username = "u760993576_parag";
$password = "Parag9144!";
$database = "u760993576_portfolio";

$con = mysqli_connect($servername, $username, $password, $database);

if($con){
    // echo "success";
    
}
else{
    die("Error". mysqli_connect_error());
}

?>