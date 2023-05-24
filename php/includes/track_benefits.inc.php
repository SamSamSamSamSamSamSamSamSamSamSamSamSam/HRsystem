<?php

$url_main = "/build/05Benefits/052 Track Employees/track_benefits.php";
$url_status = "?submit=";

require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    
    if ( isset($_POST['submit']) ) {

        $name = $_POST['employee-name'];
        $id = $_POST['employee-id'];
        $pname = $_POST['plan_name'];
        $cover = $_POST['coverage-leve'];

        $sql_getid = "SELECT * FROM employees WHERE eID= $id;";
        $idfound = mysqli_query($connection,$sql_getid);
        if (!$idfound){
            header("Location: ".$url_main.$url_status."idnotfound");
            exit();
        }

        $sql_assign = "UPDATE compensations_benefits SET cb_benID = $pname WHERE cb_eID = $id;";
        mysqli_query($connection, $sql_assign);
        header("Location: ".$url_main.$url_status."success");
        exit();
    }
    else {
        header("Location: ".$url_main.$url_status."failed");
        exit();
    }

}
else {
    header("Location: ".$url_main.$url_status."failed");
    exit();
}