<?php

$url_main = "/build/04Time and Attendance/042Absences and Leave/leave.php";
$url_status = "?submit=";

require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    
    if ( isset($_POST['submit-app']) ) {
        $lveid = $_POST['submit-app'];

        $sql_verifylve = "SELECT * FROM leave_plans WHERE lveID = $lveid;";
        $lverequest = mysqli_query($connection, $sql_verifylve);
        if (mysqli_num_rows($lverequest)==0) {
            header("Location: ".$url_main.$url_status."lveidnotfound");
            exit();
        }

        $sql = "UPDATE leave_plans 
                SET decisionSts = 'APPROVED', decisionDate = ". date('Y-m-i') ." 
                WHERE lveID = $lveid;";
        mysqli_query($connection, $sql);          
        header("Location: ".$url_main.$url_status."approved");
        exit();
    }
    else if ( isset($_POST['submit-den']) ) {
        $lveid = $_POST['submit-den'];

        $sql = "UPDATE leave_plans 
                SET decisionSts = 'DENIED', decisionDate = ". date('Y-m-i') ." 
                WHERE lveID = $lveid;";
        mysqli_query($connection, $sql); 
        header("Location: ".$url_main.$url_status."denied");
        exit();
    }

}
else {
    header("Location: ".$url_main.$url_status."failed");
    exit();
}