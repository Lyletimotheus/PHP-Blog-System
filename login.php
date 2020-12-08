<?php
include_once('includes/header.php');
include_once('includes/loginprocess.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<center>
    <div>
        <h1>Please Login</h1>

        <form method="POST" action="">
        <label for="">Email</label>
        <input type="email" name="email"/>
        <span class="error">*<?php echo $emptyEmail;
        ?></span>

        <br />
        <label for="">Password</label>
        <input type="password" name="password"/>
        <span class="error">*<?php echo $emptyPassword;?></span>

        <br />
        <input type="submit" name="submit" value="Login"/>
        </form>

    </div>
    <label>No Account?</label>
    <a href="register.php">Register Here</a>
</center>
<?php

include_once('includes/footer.php');
?>

