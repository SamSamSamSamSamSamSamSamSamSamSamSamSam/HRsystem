<?php

$url_main = "/build/05Benefits/051 Setup Plans/setup_plans.php";
$url_status = "?submit=";

require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    
    if ( isset($_POST['submit']) ) {

        $pname = $_POST['plan_name'];
        $ptype = $_POST['plan_type'];
        $cover = $_POST['coverage_level'];
        $deduc = $_POST['deductible'];
        $premm = $_POST['premium'];

        $sql = "INSERT INTO benefit_plans (planName, planType, coverage, deductible, premium) 
                VALUES ('$pname', '$ptype', '$cover', $deduc, $premm);";
        mysqli_query($connection, $sql);
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