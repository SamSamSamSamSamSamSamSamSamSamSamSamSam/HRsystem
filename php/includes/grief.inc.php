<?php

$url_main = "/build/04Time and Attendance/043Grievance Handling/grief.php";
$url_status = "?submit=";

require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    
    if ( isset($_POST['submit']) ) {

        $id = $_POST['employeeID'];
        $name = $_POST['employeeName'];
        $DT = $_POST['grievanceDate'];
        $desc = $_POST['grievanceDescription'];
        $handler = $_POST['handlerID'];
        $file = $_POST['supportingDocuments'];

        $sql_getid = "SELECT * FROM employees WHERE eID= $id;";
        $idfound = mysqli_query($connection,$sql_getid);
        if (!$idfound){
            header("Location: ".$url_main.$url_status."idnotfound");
            exit();
        }

        $sql_fileup = "INSERT INTO file_uploads (filedata) VALUES ('$file');";
        mysqli_query($connection, $sql_fileup);

        $sql_getfileID = "SELECT fileID FROM file_uploads WHERE filedata = '$file';";
        $getfileid = mysqli_query($connection, $sql_getfileID);
        $row = mysqli_fetch_assoc($getfileid);
        $fileID = $row['fileID'];

        $sql = "INSERT INTO  grief_plans (grv_eID, assTo_eID, name, grvDT, grvDesc, docs_fileID) 
                VALUES ($id,$handler,'$name','$DT','$desc', $fileID);";
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