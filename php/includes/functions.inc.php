<?php

function userExist($connection, $email) {
    $sql = "SELECT * FROM user_accounts;"; //WHERE username = ". $username ." OR email = ". $email .";";
    $result = mysqli_query($connection, $sql);
    // checks if SQL is successful in the database
    if ($result) {
        // checks if selected table is empty
        if( mysqli_num_rows($result) == 0 ) {
            header("Location: /build/002Login Page/login.php?error=dbisempty");
            exit();
        }
        // loop to see if row where the username or email exist
        while ($row = mysqli_fetch_assoc($result)) {
            // returns row of the username and email
            if ($row['email']==$email) {
                return $row;
                exit();
            }
        }
        // returns false if username and email does not exist
        return false;
    }
    else {
        // executes if SQL has failed to connect to database
        header("Location: /build/002Login Page/login.php?error=dbconnfailed");
        exit();
    }
}


function emptyInputLogin($username, $password) {
        // return true if input is empty
        if ( empty($username) || empty($password) ) {
            $status = true;
        }
        else {
            // return false if input has value
            $status = false;
        }
    return $status;
} 

function loginUser($connection, $username, $password) {
    // variable holds an array if user exist and false is not
    $userFound = userExist($connection, $username);
    // if user not found go back with error message
    if ($userFound === false) {
        header("Location: /build/002Login Page/login.php?error=usernotfound");
        exit();
    }
    // if password is correct proceed to index.php page
    if ($password == $userFound["pwd"]) {
        session_start();
        $_SESSION["uaID"] = $userFound["uaID"];
        $_SESSION["eID"] = $userFound["eID"];
        header("Location: /build/01Landing Page/index.php");
        exit();
    }
    else {
        // entered wrong password
        header("Location: /build/002Login Page/login.php?error=wrongpass");
        exit();
    }

}