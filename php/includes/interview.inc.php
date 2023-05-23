<?php

if ( isset($_POST["submit-schedule"]) ) {

    $applicant = $_POST["candidateName"];
    $date = $_POST["interviewDate"];
    $time = $_POST["interviewTime"];
    $location = $_POST["interviewLocation"];

    $return_url = "/build/02HR Management/023Recruitment/0232 Interview and Scheduling/interview.php";
    $result_url = "?sched=";

    require_once 'dbconn.inc.php';
    require_once 'functions.inc.php';
    
    // verifies applicant and gets their application id
    $appid = verifyApplicant($connection, $applicant);
    // checks if applicant is verified
    if ( $appid == false ) {
        header("Location: ".$return_url.$result_url."appnotfound");
        exit();
    }

    $sql = "INSERT INTO `interview_scheds`(`ivw_appID`, `ivwDate`, `ivwTime`, `ivwLoc`) 
            VALUES ($appid,'$date','$time','$location');";
    // records interview to database
    if (record_interviewSched ($connection, $sql)) {
        header("Location: ".$return_url.$result_url."success");
        exit();
    }
    

}
else {
    header("Location: /build/02HR Management/023Recruitment/0232 Interview and Scheduling/interview.php");
    exit();
}


