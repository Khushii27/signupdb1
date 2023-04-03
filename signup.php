<?php
    error_reporting(0);
if(isset($_POST['firstname'])){

$server = "localhost";
$username = "root";
$password = "";
// $dbname= "signup";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("Connection is failed" . mysqli_connect_error());
}

// echo "Successfully connected";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$passward = $_POST['passward'];
$email = $_POST['email'];
$addressone = $_POST['addressone'];
$addresstwo = $_POST['addresstwo'];



$sql = "INSERT INTO `sign`.`sign` (`firstname`, `lastname`, `phone`, `passward`, `email`, `addressone`, `addresstwo`, `dt`) VALUES ('$firstname', '$lastname', '$phone', '$passward', '$email', '$addressone', '$addresstwo', current_timestamp());";

// echo $sql;


if($con->query($sql) == true){
    echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->server";
    }
    
    $con->close();
}
 ?>

