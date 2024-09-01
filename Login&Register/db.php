<?php 
$server = "localhost";
$username="root";
$password = "";
$dbName = "session";

$conn = mysqli_connect($server,$username,$password,$dbName);
if(!$conn){
    die("Could not Connected database : ".mysqli_error());
}else{
    echo "Connection Success!";
}
?>