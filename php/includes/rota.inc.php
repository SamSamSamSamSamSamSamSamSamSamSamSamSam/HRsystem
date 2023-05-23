<?php

$return_url = "/build/04Time and Attendance/041Schedule and Rota/rota.php";
$result_url = "?action=";

require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['approve'])) {
        $srID = $_POST['approve'];
        // Perform the update query to set the request status to 'Approved'
        $updateQuery = "UPDATE shift_requests SET reqSts = 'APPROVED' WHERE srID = $srID";
        mysqli_query($connection, $updateQuery);
        changeShift($connection, $srID);
        delete_shiftrequest($connection, $srID);
    } 
    elseif (isset($_POST['deny'])) {
        $srID = $_POST['deny'];
        // Perform the update query to set the request status to 'Rejected'
        $updateQuery = "UPDATE shift_requests SET reqSts = 'REJECTED' WHERE srID = $srID";
        mysqli_query($connection, $updateQuery);
    }
    elseif (isset($_POST['submit-assign'])) {
        $empID = $_POST['employeeID'];
        $reqShift = $_POST['shiftID'];
        $currShift = getcurrShift($connection, $empID);

        if($currShift==$reqShift) {
            header("Location: ".$return_url.$result_url."reqcurrmatched");
            exit();
        }
        $sql = "INSERT INTO shift_requests (sr_eID, curr_shfID, req_shfID) VALUES ($empID,$currShift,$reqShift);";
        mysqli_query($connection, $sql);
    }
    elseif (isset($_POST['submit-shift'])) {
        $shiftname = $_POST['shiftName'];
        $shiftsta = $_POST['shiftStartTime'];
        $shiftend = $_POST['shiftEndTime'];
        $shiftdays = $_POST['shiftDays'];

        $sql = "INSERT INTO shifts (shfName, staTime, endTime, dotw) VALUES ('$shiftname', '$shiftsta', '$shiftend', '$shiftdays');";
        mysqli_query($connection, $sql);
    }

    header("Location: ".$return_url.$result_url."sucess");
    exit();
}