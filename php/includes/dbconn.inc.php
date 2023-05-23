<?php

/*---------------------------------------------------------------------------------------------------------------------------
    variables for mysqli_connection parameters
---------------------------------------------------------------------------------------------------------------------------*/
    $host_name = "localhost";
    $username = "root";
    $password = "";
    $dataBase_name = "webdev_hrsys_database"; // database name, change if different database in used

/*---------------------------------------------------------------------------------------------------------------------------
    $connection holds the mysqli_connect();, inlcude in other php files to connect in the database
---------------------------------------------------------------------------------------------------------------------------*/
    $connection = mysqli_connect($host_name, $username, $password, $dataBase_name);  

/*---------------------------------------------------------------------------------------------------------------------------
    check to see if connection failed and what type of error it have
---------------------------------------------------------------------------------------------------------------------------*/
    if(!$connection){
        die("Connection failed: " . mysqli_connect_error());
    }