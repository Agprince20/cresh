<?php 
include_once("asset/header.php");
$email = $password = '';
$emailerror = $passerror = ''; 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];   
}

if(empty($email)){
    $emailerror = "Email is required";

if(empty($password)){
    $passerror = "Password is required";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <div class="login-box">
        <form action="" method="post">
    <label>Email</label>
          <input type="email" name="email" placeholder=""><span><?php echo ("$emailerror")?></span>
          <label>Password</label>
          <input type="password" name="password" placeholder=""><span><?php echo("$passerror") ?></span>
          <input type="submit" value="submit">
   </form> <p class= "place">Don't have an account? <a href="register.php">sign up here</a></p>
</div>

</body>
</html>