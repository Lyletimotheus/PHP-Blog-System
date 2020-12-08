<?php
$emptyEmail = $emptyPassword ="";

if(isset($_POST['submit'])){
    require_once('./config/config.php');
    require_once('./config/db.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["email"])) {
            $emptyEmail = "Please enter your email address";
            }
            if (empty($_POST["password"])) {
            $emptyPassword = "Please enter your password";
            }
    }
}

?>