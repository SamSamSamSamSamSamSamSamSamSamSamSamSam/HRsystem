<?php

if ( isset($_POST["submit"]) ) {

    $user = $_POST["login-email"];
    $pass = $_POST["login-pass"];

    require_once 'dbconn.inc.php';
    require_once 'functions.inc.php';
    // checks if input is empty
    if ( emptyInputLogin($user, $pass) ) {
        header("Location: /build/002Login Page/login.php?error=emptyinput");
        exit();
    }
    // verify user account and login if true
    loginUser($connection, $user, $pass);

} 
else {
    header("Location: /build/002Login Page/login.php");
}