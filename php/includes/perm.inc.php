<?php


$url_back_to_main = "/build/02HR Management/024Performances/perm.php";
$url_result = "?submit=";

require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if ($_SERVER['REQUEST_METHOD']==='POST') {

    if ( isset( $_POST['submit_reviews'] ) ) {

        $id = $_POST['employee-id'];
        $name = $_POST['employee-name'];
        $period = $_POST['review-period'];
        $reviewer = $_POST['reviewer'];
        $progress = $_POST['progress'];

        $sql_getid = "SELECT * FROM employees WHERE eID= $id;";
        $idfound = mysqli_query($connection,$sql_getid);
        if (!$idfound){
            header("Location: ".$url_back_to_main.$url_result."idnotfound");
            exit();
        }

        $sql_insert =  "INSERT INTO reviews (rev_eID, period, reviewer, progress) 
                        VALUES ($id,'$period','$reviewer','$progress');";
        mysqli_query($connection, $sql_insert);
        header("Location: ".$url_back_to_main.$url_result."success");
        exit();
    }
    else if ( isset( $_POST['submit_goals'] ) ) {
        
        $id = $_POST['employee-id'];
        $name = $_POST['employee-name'];
        $goals = $_POST['smart-goals'];
        $progress = $_POST['goal-progress'];
        $feedback = $_POST['feedback'];

        $sql_getid = "SELECT * FROM employees WHERE eID= $id;";
        $idfound = mysqli_query($connection,$sql_getid);
        if (!$idfound){
            header("Location: ".$url_back_to_main.$url_result."idnotfound");
            exit();
        }

        $sql_insert =  "INSERT INTO goals (goal_eID, goals, progress, feedback) 
                        VALUES ($id,'$goals','$progress','$feedback');";
        mysqli_query($connection, $sql_insert);
        header("Location: ".$url_back_to_main.$url_result."success");
        exit();

    }
    else if ( isset( $_POST['submit_feedback'] ) ) {
        
        $id = $_POST['employee-id'];
        $name = $_POST['employee-name'];
        $feedback = $_POST['performance-feedback'];

        $sql_getid = "SELECT * FROM employees WHERE eID= $id;";
        $idfound = mysqli_query($connection,$sql_getid);
        if (!$idfound){
            header("Location: ".$url_back_to_main.$url_result."idnotfound");
            exit();
        }

        $sql_insert =  "INSERT INTO feedbacks (fb_eID, permFb) 
                        VALUES ($id, '$feedback');";
        mysqli_query($connection, $sql_insert);
        header("Location: ".$url_back_to_main.$url_result."success");
        exit();

    }
    else if ( isset( $_POST['submit_impove'] ) ) {
        
        $id = $_POST['employee-id'];
        $name = $_POST['employee-name'];
        $goals = $_POST['improvement-goals'];
        $progress = $_POST['progress-tracking'];
        $docs = $_POST['support-documentation'];

        $sql_getid = "SELECT * FROM employees WHERE eID= $id;";
        $idfound = mysqli_query($connection,$sql_getid);
        if (!$idfound){
            header("Location: ".$url_back_to_main.$url_result."idnotfound");
            exit();
        }

        $sql_insert =  "INSERT INTO improvements (imp_eID, goals, progress, docs) 
                        VALUES ($id,'$goals','$progress','$docs');";
        mysqli_query($connection, $sql_insert);
        header("Location: ".$url_back_to_main.$url_result."success");
        exit();

    }
    else {
        header("Location: ".$url_back_to_main.$url_result."failed");
        exit();
    }


}
else {
    header("Location: ".$url_back_to_main.$url_result."methoderror");
    exit();
}