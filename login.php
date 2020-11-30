<?php
include('config/config.php');
include('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <h1>Please Login</h1>
        <form method="POST" action="loginprocess.php">
        <label for="">Email</label>
        <input type="email" name="email"/>
        <br />
        <label for="">Password</label>
        <input type="password" name="password"/>
        <br />
        <input type="submit" name="submit" value="Login"/>
        </form>
    </div>
    <a href="register.php">Sign Up</a>
</body>
</html>

