<?php

/*---------------------------------------------------------------------------------------------------------------------------
    variables for mysqli_connection parameters
---------------------------------------------------------------------------------------------------------------------------*/
$host_name = "localhost";
$username = "root";
$password = "";
$dataBase_name = "human_resource_system";

/*---------------------------------------------------------------------------------------------------------------------------
    this is the variable for mysqli_connect
---------------------------------------------------------------------------------------------------------------------------*/
$connection = mysqli_connect($host_name, $username, $password, $dataBase_name);  

?>