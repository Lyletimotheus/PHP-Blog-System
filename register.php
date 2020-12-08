<?php
include_once('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <center>
        <h1>Bloggly</h1>
        <h3>The blogging platform for everyone!</h3>
        <p>Read and share ideas from independent voices, world-class publications, and experts from around the globe. Everyone's welcome. <span><a href="#">Learn more.</a></span></p>
        <br />
        <h1>Create a free account</h1>
        <br>
        <form method="POST" action="">
            <label for="email">Email</label>
            <input type="email" name="email"/>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password"/>
            <br>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password"/>
    
        
        </form>
     
<?php
include_once('includes/footer.php');
?>

</center> 