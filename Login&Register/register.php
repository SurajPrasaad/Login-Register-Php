<?php include "db.php" ?>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
$uname = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO `session` (`username`, `password`) VALUES ('$uname', '$pass')";

if(mysqli_query($conn,$sql)===TRUE){
    echo "Registration Successfully!";
}else{
    echo "Error : ".mysqli_error();
}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <form action="" method="post">
        UserName : <input type="text" name="username" required />
        Password : <input type="password" name="password" required/>
        <button>Submit</button>
    </form>
</body>
</html>