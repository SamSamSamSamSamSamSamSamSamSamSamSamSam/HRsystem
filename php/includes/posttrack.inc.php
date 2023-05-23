<?php

//echo $_SERVER["REQUEST_METHOD"];

if ( isset($_POST["submit-post"]) ) {
    echo "success";

    $jobTitle = $_POST["job-name"];
    $jobDesc = $_POST["job-desc"];
    $jobQual = $_POST["quals"];
    $expReq = $_POST["exp"];
    $salRange = $_POST["sal-range"];
    $otherInfo = $_POST["others"];

    $return_url = "/build/02HR Management/023Recruitment/0231 Job Posting and Tracking/posttrack.php";
    $result_url =  "?post=";

    require_once 'dbconn.inc.php';
    require_once 'functions.inc.php';
    
    // Select query to find if job exist
    $sql = "SELECT * FROM jobs WHERE jobTitle LIKE '%". $jobTitle . "%' ;";

    $jobID_sts = verifyJob_jobPost($connection, $sql);
    // checks if job does not exist in database
    if ( $jobID_sts == false ) {
        header("Location: ". $return_url . $result_url ."jobnotfound");
        exit();
    }

    $sql = "INSERT INTO `job_postings`(`jp_jobID`, `jobDesc`, `qualDesc`, `expReq`, `salRange`, `otherDesc`) 
            VALUES ($jobID_sts, '$jobDesc', '$jobQual', '$expReq', '$salRange', '$otherInfo'); ";
    // inserts job post to database
    if ( record_jobPost_entry ($connection, $sql) ) {
        header("Location: ". $return_url . $result_url ."success");
        exit();
    } 

}
else {
    header("Location: /build/02HR Management/023Recruitment/0231 Job Posting and Tracking/posttrack.php");
    exit();
}