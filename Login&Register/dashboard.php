<?php include"db.php" ?>
<?php 
session_start();
if(!isset($_SESSION['username'])&& !isset($_COOKIE['username'])){
    header('Location: login.php');
    exit();
}
$username = isset($_SESSION['username'])? $_SESSION['username'] : $_COOKIE['username'];
echo "Welcome, ".$_SESSION['username']."!";
?>
<a href="logout.php">Logout</a>