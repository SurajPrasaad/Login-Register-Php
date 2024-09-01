<?php include "db.php" ?>
<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from session where username = '$username'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $row = mysqli_num_rows($result);
        if($row==1){
            $user = mysqli_fetch_assoc($result);
            if($password===$user['password']){
                $_SESSION['username']= $user['username'];
                if(isset($_POST['remember'])){
                    setcookie("username",$username,time()+(86400 * 30),"/");
                }
                header('Location: dashboard.php');
                exit();
            }else{
                echo "Invalid Password!";
            }
        }else{
            echo "Invalid Username";
        }
    }else{
        echo "Error : ".mysqli_error();
    }
    mysqli_close($conn);

}


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
        <input type="checkbox" name="remember" id="rem"/>Remeber me!
        <button>Submit</button>
    </form>
</body>
</html>