<?php

if ( $_SERVER['REQUEST_METHOD']==='POST' ) {

    if ( isset($_POST['leave']) ) {
    header("Location: /build/04Time and Attendance/042Absences and Leave/leave.php");
    exit();
    }
    else if ( isset($_POST['bens']) ) {
    header("Location: /build/05Benefits/051 Setup Plans/setup_plans.php");
    exit();
    }
    else if ( isset($_POST['update']) ) {
    header("Location: /build/02HR Management/025Employees/employee.php");
    exit();
    }
    else if ( isset($_POST['reports']) ) {
    header("Location: /build/04Time and Attendance/043Grievance Handling/grief.php");
    exit();
    }
}
