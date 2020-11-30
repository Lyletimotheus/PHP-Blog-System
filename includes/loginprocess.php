<?php
if(isset($_POST['submit'])){
    require ('../config/config.php');
    require ('../config/db.php');

    $username = $_POST['email'];
    $password = $_POST['password'];
    
  

    if(empty($username)|| empty($password)){
        header("Location: ../login.php?error=sqlerror");
        exit();
    }else{
    }
}






// Redirect the user to their profile once they've logged in successfully
header('Location:../profile.php');

