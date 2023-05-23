<?php

if (isset($_POST["search-record"])) {

    $searchInput = $_POST["search-record"];
    $searchType = $_POST["search-selection"];

    $url = "/build/02HR Management/025Employees/employee.php";

    require_once 'dbconn.inc.php';
    require_once 'functions.inc.php';

    // If search category is All
    if ($searchType == "all") {
        // makes user input is an int data type to avoid error
        $empID = (int) $searchInput;
        // checks if input is empty
        if ( empty($searchInput) ) {
            header("Location: ". $url ."?verifyall=emptyinput&page=default");
            exit();
        }
        // verifies user input if record is found in database
        if ( verifyEmployee($connection, $empID, "0") || verifyEmployee($connection, $empID, $searchInput) || verifyDep($connection, $searchInput) || verifyJob($connection, $searchInput)) {
            header("Location: ". $url ."?verifyall=true&input=$searchInput");
            exit();
        }
        header("Location: ". $url ."?verifyall=false&page=default");
        exit();
    }
    // If search category is Employee ID
    else if ($searchType == "eID") {
        $id = (int) $searchInput;
        // checks if input is empty
        if ( empty($searchInput) ) {
            header("Location: ". $url ."?verifyemp=emptyinput&page=default");
            exit();
        }
        // verifies user input if record is found in database
        if (verifyEmployee($connection, $id, "0")) {
            header("Location: ". $url ."?verifyemp=true&input=".$searchInput);
            exit();
        }
        header("Location: ". $url ."?verifyemp=false&page=default");
        exit();
    }
    // If search category is Employee Name
    else if ($searchType == "empName") {
        // checks if input is empty
        if ( empty($searchInput) ) {
            header("Location: ". $url ."?verifyemp=emptyinput&page=default");
            exit();
        }
        // verifies user input if record is found in database
        if (verifyEmployee($connection, 0, $searchInput)) {
            header("Location: ". $url ."?verifyemp=true&input=$searchInput");
            exit();
        }
        header("Location: ". $url ."?verifyemp=false&page=default");
        exit();
    }
    // If search category is Department
    else if ($searchType == "department") {
        // checks if input is empty
        if ( empty($searchInput) ) {
            header("Location: ". $url ."?verifydep=emptyinput&page=default");
            exit();
        }
        // verifies user input if record is found in database
        if (verifyDep($connection, $searchInput)) {
            header("Location: ". $url ."?verifydep=true&input=$searchInput");
            exit();
        }
        header("Location: ". $url ."?verifydep=false&page=default");
        exit();
    }
    // If search category is Position
    else if ($searchType == "position") {
        // checks if input is empty
        if ( empty($searchInput) ) {
            header("Location: ". $url ."?verifypos=emptyinput&page=default");
            exit();
        }
        // verifies user input if record is found in database
        if (verifyJob($connection, $searchInput)) {
            header("Location: ". $url ."?verifypos=true&input=$searchInput");
            exit();
        }
        header("Location: ". $url ."?verifypos=false&page=default");
        exit();
    }
}
else {
    // goes back to employee page if there is no value in post method
    header("Location: /build/02HR Management/025Employees/employee.php");
    exit();
}