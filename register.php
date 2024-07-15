<?php
    include_once 'asset/header.php';
?><br>
<?php 
$firstname = $lastname = $email = $password = $cpassword = '';
    $firstnameerror = $lastnameerror =$emailerror =$passerror = $cpasserror = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if(empty($firstname)){
            $firstnameerror = "firstname is required";
        }
        if(empty($lastname)){
            $lastnameerror = "lastname is required";
        }
        if(empty($email)){
            $emailerror = "email is required";
        }
        if(empty($password)){
            $passerror = "password is required";
        }
        if(empty($cpassword)){
            $cpasserror = "password is required";
        }
        if ($password !== $cpassword){
            $cpasserror = "password is not correct";
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
    <div class= "signup">
       <h1>Sign up</h1>
       <h4>It's free and only takes a minute</h4>
       <form method="post">
          <label>First name</label>
          <input type="text" name="firstname" placeholder="" >
          <span class="error"><?php echo $firstnameerror;?></span>
          <label>Last name</label>
          <input type="text" name="lastname" placeholder=""><?php echo ("$lastnameerror") ;?></span>
          <label>Email</label>
          <input type="email" name="email" placeholder=""><?php echo ("$emailerror");?></span>
          <label>Password</label>
          <input type="password" name="password" placeholder=""><?php echo $passerror;?></span>
          <label>Confirm Password</label>
          <input type="password" name="cpassword" placeholder=""><?php echo $cpasserror;?></span>
          <input type="submit" value="submit">
       </form>
       <p class="place">By clicking the Sign up button, you agree to our <br> 
      <a href="">Terms and condition</a> and <a href="">Privacy Policy</a>   
    </p><p>Already have an account <a href="login.php">Login here</a></p>
</div>

   
    </body>
    </html>