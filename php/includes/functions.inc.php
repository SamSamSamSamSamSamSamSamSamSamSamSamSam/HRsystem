<?php

/*===================================================================================================================================
    functions used in: login.php
===================================================================================================================================*/

use LDAP\Result;

function userExist($connection, $email) {
    $sql = "SELECT * FROM user_accounts;"; //WHERE username = ". $username ." OR email = ". $email .";";
    $result = mysqli_query($connection, $sql);
    // checks if SQL is successful in the database
    if ($result) {
        // checks if selected table is empty
        if( mysqli_num_rows($result) == 0 ) {
            header("Location: /build/002Login Page/login.php?error=dbisempty");
            exit();
        }
        // loop to see if row where the username or email exist
        while ($row = mysqli_fetch_assoc($result)) {
            // returns row of the username and email
            if ($row['email']==$email) {
                return $row;
                exit();
            }
        }
        // returns false if username and email does not exist
        return false;
    }
    else {
        // executes if SQL has failed to connect to database
        header("Location: /build/002Login Page/login.php?error=dbconnfailed");
        exit();
    }
}


function emptyInputLogin($username, $password) {
        // return true if input is empty
        if ( empty($username) || empty($password) ) {
            $status = true;
        }
        else {
            // return false if input has value
            $status = false;
        }
    return $status;
} 

function loginUser($connection, $username, $password) {
    // variable holds an array if user exist and false is not
    $userFound = userExist($connection, $username);
    // if user not found go back with error message
    if ($userFound === false) {
        header("Location: /build/002Login Page/login.php?error=usernotfound");
        exit();
    }
    // if password is correct proceed to index.php page
    if ($password == $userFound["pwd"]) {
        session_start();
        $_SESSION["useraccID"] = $userFound["uaID"];
        $_SESSION["user"] = $userFound["username"];
        header("Location: /build/01Landing Page/index.php");
        exit();
    }
    else {
        // entered wrong password
        header("Location: /build/002Login Page/login.php?error=wrongpass");
        exit();
    }
}

/*===================================================================================================================================
    functions used in: employee.php
===================================================================================================================================*/

    //error handlings
function errorInput_placeholder() {
    // if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    //   if ($_GET["verifyall"] == "emptyinput") {
    //     echo "Please type here...";
    //   }
    //   else {
    //     echo "Search...";
    //   }
    // } TO BE MADE LATER
    echo "Search...";
}


function displayEmployee_personalInfo ($connection, $eid) {
    $sql = "SELECT * FROM employees
            LEFT JOIN goals ON goals.goal_eID = employees.eID
            LEFT JOIN reviews ON reviews.rev_eID = employees.eID
            LEFT JOIN feedbacks ON feedbacks.fb_eID = employees.eID
            LEFT JOIN improvements ON improvements.imp_eID = employees.eID
            WHERE eID = $eid;";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
            echo "
            
                <ul class='mx-auto my-8 w-80 list-inside list-disc'>
                    <li>
                    <a href='#' class='text-blue-600 hover:text-orange-300'>- Contract</a>
                    </li>
                    <li>
                    <a href='#' class='text-blue-600 hover:text-blue-800'
                        >- Performance Evaluation</a
                    >
                    </li>
                    <li>
                    <a href='#' class='text-blue-600 hover:text-blue-800'
                        >- Training Records</a
                    >
                    </li>
                </ul>
            ";
    }
    else {
        echo "
            
                <ul class='mx-auto my-8 w-80 list-inside list-disc'>
                    <li>
                    <a href='#' class='text-blue-600 hover:text-orange-300'>- Contract</a>
                    </li>
                    <li>
                    <a href='#' class='text-blue-600 hover:text-blue-800'
                        >- Performance Evaluation</a
                    >
                    </li>
                    <li>
                    <a href='#' class='text-blue-600 hover:text-blue-800'
                        >- Training Records</a
                    >
                    </li>
                </ul>
            ";
    }
    
}


  // This function displays employee information in the table
  function displayEmployee($connection, $sql) { 
    $result = mysqli_query($connection, $sql);
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // date format
          $hired = date('m/d/Y', strtotime($row["hDate"]));
          // displays in table
          echo "
            <tr class='border-b border-human-resource-white'>
              <td class='text-center'>".$row["eID"]."</td>
              <td class='py-16 text-center'>
                <a
                  href='#personalInfos'
                  class='employeeDetailsLink font-medium text-blue-600 hover:text-blue-800'
                  >".$row["name"]."</a
                >
              </td>
              <td class='text-center'>".$row["jobTitle"]."</td>
              <td class='text-center'>".$row["depName"]."</td>
              <td class='text-center'>".$row["email"]."</td>
              <td class='status-approved text-center'>".$row["jobSts"]."</td>
              <td class='text-center'>
                Hire Date: ".$hired."<br />Contract Type: ".$row["contract"]."<br />Working Hours: ".$row["rgwHrs"]."
              </td>
            </tr>  
          ";      
        }
      }
    } 
  }
  // This function displays employee information in small screens
  function displayEmployee_smallscreen($connection, $sql) { 
    $result = mysqli_query($connection, $sql);
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // date format
          $hired = date('m/d/Y', strtotime($row["hDate"]));
          // displays in table
          echo "
            <p><strong>Name:</strong> ". $row["name"] ."</p>
            <p><strong>Employee ID:</strong> ". $row["eID"] ."</p>
            <p><strong>Position:</strong> ". $row["jobTitle"] ."</p>
            <p><strong>Department:</strong> ". $row["depName"] ."</p>
            <p><strong>Contact Details:</strong> ". $row["email"] ."</p>
            <p>
              <strong>Status:</strong><span class='status-approved'> ". $row["jobSts"] ."</span>
            </p>
            <p>
              <strong>Employment Details:</strong> <br />Hire Date: ". $hired ."<br />Contract
              Type: ". $row["contract"] ."<br />Working Hours: ". $row["rgwHrs"] ." <br /><br />
          ";      
        }
      }
    } 
  }
  // displays the all the department members 
  function deparmentMembers($connection, $depName) {
    $sql = "SELECT DISTINCT departments.depName, jobs.jobTitle, employees.name 
            FROM employment_details 
            INNER JOIN jobs ON jobs.jobID = employment_details.ed_jobID 
            INNER JOIN departments ON departments.depID = jobs.depID 
            INNER JOIN employees ON employment_details.ed_eID = employees.eID
            WHERE departments.depName LIKE '%$depName%';";
    $result = mysqli_query($connection, $sql);
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<br>".$row["name"];     
        }
      }
    }
  }
  // displays department information
  function displayDepartment($connection, $depname) { 
    $sql = "SELECT DISTINCT departments.depName, departments.depLdr_eID, employees.name 
    FROM departments 
    INNER JOIN jobs ON jobs.depID = departments.depID 
    INNER JOIN employees ON departments.depLdr_eID = employees.eID
    WHERE departments.depName LIKE '%$depname%';";
    $result = mysqli_query($connection, $sql);
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // displays in div
          echo "
            <li><span class='font-bold'>Department Name: </span>". $row["depName"] ."</li>
            <li><span class='font-bold'>Department Leader: </span>". $row["name"] ."</li>
            <li>
            <span class='font-bold'>Department Members: </span>";
            deparmentMembers($connection, $depname);
          echo "
          </li><br />
            ";      
        }
      }
    } 
  }

function verifyEmployee($connection, $empID, $empName) {
    $sql = "SELECT * FROM `employees` WHERE eID = " . $empID . " OR name LIKE '%$empName%';";
    $result = mysqli_query($connection, $sql);
        // checks if query is successful
        if ($result) {
            // checks if employee id exist in the database then returns true, otherwise returns false
            if (mysqli_num_rows($result) > 0) {
                $status = true;
            }
            else {
                $status = false;
            }   
        }
        else {
            // query not successful
            $status = false;
        }
    // returns status of verification
    return $status;
}

function verifyDep($connection, $depName) {
    $sql = "SELECT * FROM `departments` WHERE depName LIKE '%$depName%';";
    $result = mysqli_query($connection, $sql);
        // checks if query is successful
        if ($result) {
            // checks if department exist in the database then returns true, otherwise returns false
            if (mysqli_num_rows($result) > 0) {
                $status = true;
            }
            else {
                $status = false;
            }   
        }
        else {
            // query not successful
            $status = false;
        }
    // returns status of verification
    return $status;
}

function verifyJob($connection, $jobTitle) {
    $sql = "SELECT * FROM `jobs` WHERE jobTitle LIKE '%$jobTitle%';";
    $result = mysqli_query($connection, $sql);
        // checks if query is successful
        if ($result) {
            // checks if job title exist in the database then returns true, otherwise returns false
            if (mysqli_num_rows($result) > 0) {
                $status = true;
            }
            else {
                $status = false;
            }   
        }
        else {
            // query not successful
            $status = false;
        }
    // returns status of verification
    return $status;
}

/*===================================================================================================================================
    functions used in: posttrack.php
===================================================================================================================================*/

function verifyJob_jobPost($connection, $sql) {
    $result = mysqli_query($connection, $sql);
        // checks if query is successful
        if ($result) {
            // checks if job title is found in the database then returns true, otherwise returns false
            if (mysqli_num_rows($result) > 0) {
                $status = true;
            }
            else {
                $status = false;
            }   
        }
        else {
            // query not successful
            $status = false;
        }
    // returns status of verification
    return $status;
}

function record_jobPost_entry ($connection, $sql) {
    $result = mysqli_query($connection, $sql);
    // checks if query is successful
        if ($result) {
            // checks if job title is found in the database then returns true, otherwise returns false
            $status = true;  
        }
        else {
            // query not successful
            $status = false;
        }
    // returns status of verification
    return $status;
}

/*===================================================================================================================================
    functions used in: interview.php
===================================================================================================================================*/

function displayInterview_schedules($connection) {
    $sql = "SELECT *
            FROM interview_scheds
            LEFT JOIN applicants ON interview_scheds.ivw_appID = applicants.appID;
            ";
    $result = mysqli_query($connection, $sql);
    // exit function if query unsuccessful
    if(!$result){
        exit();
    }
    // exit function if no records found
    if(mysqli_num_rows($result)==0){
        exit();
    }

    while($row = mysqli_fetch_assoc($result)) {
        $schedDate = date('m/d/Y', strtotime($row["ivwDate"]));
        $schedTime = date("g:i A", strtotime($row["ivwTime"]));
        echo "
            <tr>
                <td class='border border-gray-300 px-4 py-2 text-center'>
                ". $row["name"] ."
                </td>
                <td class='border border-gray-300 px-4 py-2 text-center'>
                ". $schedDate ."
                </td>
                <td class='border border-gray-300 px-4 py-2 text-center'>
                ". $schedTime ."
                </td>
                <td class='border border-gray-300 px-4 py-2 text-center'>
                ". $row["ivwLoc"] ."
                </td>
                <td class='border border-gray-300 px-4 py-2 text-center'>
                ". $row["ivwSts"] ."
                </td>
            </tr>
        ";
    }

}

function verifyApplicant($connection, $applicant) {
    $sql = "SELECT * FROM applicants WHERE name LIKE '%".$applicant."%'";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        exit();
    }
    if (mysqli_num_rows($result)==0) {
        exit();
    }
    while ($row = mysqli_fetch_assoc($result)) {
        return $row["appID"];
    }
    return false;
}

function record_interviewSched ($connection, $sql) {
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        return false;
    }
    return true;
}

/*===================================================================================================================================
    functions used in: rota.php
===================================================================================================================================*/

function displayShiftRotation ($connection) {
    $sql = "SELECT t1.*, t2.name, t2.eID 
            FROM shifts AS t1
            LEFT JOIN employment_details ON t1.shfID = employment_details.ed_shfID
            LEFT JOIN employees AS t2 ON employment_details.ed_eID = t2.eID;
            ";
    $result = mysqli_query($connection, $sql);
    if(!$result){
        exit();
    }
    if(mysqli_num_rows($result)==0){
        exit();
    }
    while($row = mysqli_fetch_assoc($result)){
        $stime = date("H:i", strtotime($row["staTime"]));
        $etime = date("H:i", strtotime($row["endTime"]));
        if ($row['eID']!=NULL){
            echo "
            <tr class='border-b border-human-resource-white'>
                <td class='py-16 text-center'>". $row["name"] ."</td>
                <td class='text-center'>". $row["dotw"] ."</td>
                <td class='text-center'>". $stime."-". $etime ."</td>
            </tr>
            ";
        }
    }
}


function displayShiftRequest ($connection) {
    $sql = "SELECT shift_requests.srID, employees.name, s1.shfName AS currShf, s2.shfName AS reqShf, shift_requests.reqSts 
            FROM `shift_requests` 
            LEFT JOIN employees ON shift_requests.sr_eID = employees.eID
            LEFT JOIN shifts s1 ON shift_requests.curr_shfID = s1.shfID
            LEFT JOIN shifts s2 ON shift_requests.req_shfID = s2.shfID;
            ";
    
    $result = mysqli_query($connection, $sql);        
    if(!$result){
        exit();
    }
    if(mysqli_num_rows($result)==0){
        exit();
    }
    while($row = mysqli_fetch_assoc($result)){
        echo "
            <tr class='rota-row'>
                <td class='border-b px-4 py-2 text-center'>". $row["name"] ."</td>
                <td class='border-b px-4 py-2 text-center'>". $row["currShf"] ."</td>
                <td class='border-b px-4 py-2 text-center'>". $row["reqShf"] ."</td>
                <td class='status-cell border-b px-4 py-2 text-center'>
                    ". $row["reqSts"] ."
                </td>
                <td class='actions-cell border-b px-4 py-2 text-center'>
                    <form action='../../../php/includes/rota.inc.php' method='post' >
                        <button name='approve' value='".$row["srID"]."'
                            class='mx-auto rounded bg-green-500 px-2 py-1 font-semibold text-white hover:bg-green-600'
                        >
                            Approve
                        </button>
                    </form> 
                    <form action='../../../php/includes/rota.inc.php' method='post' >
                        <button name='deny' value='".$row["srID"]."'
                            class='mx-auto rounded bg-red-500 px-2 py-1 font-semibold text-white hover:bg-red-600'
                        >
                            Reject
                        </button>
                    </form> 
                </td>
            </tr>
        ";
    }
}

function update_employmentDetails($connection, $currshfid, $sreid) {
    $sql = "UPDATE employment_details SET ed_shfID = $currshfid WHERE ed_eID = $sreid;";
    mysqli_query($connection, $sql);
}

function changeShift ($connection, $srid) {
    $sql = "UPDATE shift_requests SET curr_shfID = req_shfID WHERE srID = $srid;";
    mysqli_query($connection, $sql);

    $sql2 = "SELECT * FROM shift_requests WHERE srID = $srid;";
    $result = mysqli_query($connection, $sql2);
    $row = mysqli_fetch_assoc($result);
    update_employmentDetails($connection, $row['curr_shfID'], $row['sr_eID']);
}

function delete_shiftrequest($connection, $srid) {
    $sql = "DELETE FROM shift_requests WHERE shift_requests.srID = $srid;";
    mysqli_query($connection, $sql);
}

function shiftOptions($connection) {

    $query = "SELECT * FROM shifts";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful and fetch the options
    if ($result && mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $stime = date('H:i', strtotime($row['staTime']));
            $etime = date('H:i', strtotime($row['endTime']));
            echo "<option value='" . $row['shfID'] . "'>".$row['shfName'].": ". $stime."-".$etime."</option>";
        }
    } else {
        echo "<option value=''>No options found</option>";
    }
}

function getcurrShift ($connection, $eID) {
    $sql = "SELECT employees.eID, employees.name, employment_details.ed_shfID
            FROM employees
            INNER JOIN employment_details ON employment_details.ed_eID = employees.eID
            WHERE eID = $eID;";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['ed_shfID'];
}

/*===================================================================================================================================
    functions used in: payroll.php
===================================================================================================================================*/

function displayPayroll ($connection) {
    $sql = "SELECT employees.eID, employees.name, employment_details.*, compensations_benefits.* 
            FROM employees 
            LEFT JOIN employment_details ON employees.eID = employment_details.ed_eID
            LEFT JOIN compensations_benefits ON compensations_benefits.cb_eID = employment_details.edID;
            ";
    $result = mysqli_query($connection, $sql);

    $payDate = date('M 28, Y');

    while($row = mysqli_fetch_assoc($result)) {
        $regpay = $row['wageRph'] * $row['rgwHrs'];
        $otpay = $row['wageRph'] * $row['otwHrs'];;
        $grosspay = $regpay + $otpay;
        $netpay = $grosspay - $row['deductions'];
        echo "
            <tr class='payroll-row'>
                <td class='employee-id'>". $row['eID'] ."</td>
                <td class='employee-name'>". $row['name'] ."</td>
                <td>". $row['rgwHrs'] ."</td>
                <td>". $row['otwHrs'] ."</td>
                <td>PHP". number_format($row['wageRph'], 2, '.', ',') ."</td>
                <td>PHP". number_format($row['wageRph'], 2, '.', ',') ."</td>
                <td>PHP". number_format($regpay, 2, '.', ',') ."</td>
                <td>PHP". number_format($otpay, 2, '.', ',') ."</td>
                <td>PHP". number_format($grosspay, 2, '.', ',') ."</td>
                <td>PHP". number_format($row['deductions'], 2, '.', ',') ."</td>
                <td>PHP". number_format($netpay, 2, '.', ',') ."</td>
                <td>".$payDate." </td>
                <td>". $row['payMethod'] ."</td>
            </tr>
        ";
    }
}

/*===================================================================================================================================
    functions used in: setup-plans.php
===================================================================================================================================*/


function planOptions ($connection) {
    $query = "SELECT * FROM benefit_plans";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful and fetch the options
    if ($result && mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['benID'] . "'>".$row['planName']."</option>";
        }
    } else {
        echo "<option value=''>No options found</option>";
    }
}

/*===================================================================================================================================
    functions used in: eligibles.php
===================================================================================================================================*/

function displayEligibles ($connection) {
    $sql = "SELECT employees.eID, employees.name, departments.depName, jobs.jobTitle, benefit_plans.planName
            FROM employees
            INNER JOIN employment_details ON employment_details.ed_eID = employees.eID
            INNER JOIN jobs ON employment_details.ed_jobID = jobs.jobID
            INNER JOIN departments ON departments.depID = jobs.depID
            INNER JOIN compensations_benefits ON compensations_benefits.cb_eID = employees.eID
            INNER JOIN benefit_plans ON compensations_benefits.cb_benID = benefit_plans.benID;";
    $result = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr class='border-b border-human-resource-white'>
            <td class='py-16 text-center'>". $row['eID'] ."</td>
            <td class='text-center'>". $row['name'] ."</td>
            <td class='text-center'>". $row['depName'] ."</td>
            <td class='text-center'>". $row['jobTitle'] ."</td>
            <td class='text-center'>". $row['planName'] ."</td>
        </tr>
        ";
    }
}

function displayEligibles_smallscreen ($connection) {
    $sql = "SELECT employees.eID, employees.name, departments.depName, jobs.jobTitle, benefit_plans.planName
            FROM employees
            INNER JOIN employment_details ON employment_details.ed_eID = employees.eID
            INNER JOIN jobs ON employment_details.ed_jobID = jobs.jobID
            INNER JOIN departments ON departments.depID = jobs.depID
            INNER JOIN compensations_benefits ON compensations_benefits.cb_eID = employees.eID
            INNER JOIN benefit_plans ON compensations_benefits.cb_benID = benefit_plans.benID;";
    $result = mysqli_query($connection, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo "
            <div
                class='m-5 mx-auto max-w-sm rounded-lg bg-white bg-gradient-to-r p-8 md:hidden'
                >
                <h2 class='mb-4 text-center text-2xl font-bold text-gray-800'>
                ". $row['eID'] ."
                </h2>
                <p class='mb-2 text-center text-xl font-bold text-gray-800'>
                ". $row['name'] ."
                </p>
                <p class='mb-2 text-center text-xl font-bold text-gray-800'>
                    Department
                </p>
                <p class='mb-2 text-center text-base text-gray-800'>
                ". $row['depName'] ."
                </p>
                <p class='mb-2 text-center text-base text-gray-800'>". $row['jobTitle'] ."</p>
                <p class='mb-2 text-center text-xl font-bold text-gray-800'>
                    Currently Enrolled
                </p>
                <p class='mb-2 text-center text-base text-gray-800'>
                ". $row['planName'] ."
                </p>
            </div>
        ";
    }
}

/*===================================================================================================================================
    functions used in: greif.php
===================================================================================================================================*/
            

function displayGrievances ($connection) {
    $sql = "SELECT grief_plans.grvID, emp1.name AS requester, grief_plans.grvSts, emp2.name AS incharge, grief_plans.uplDate
            FROM grief_plans 
            INNER JOIN employees emp1 ON grief_plans.grv_eID = emp1.eID
            INNER JOIN employees emp2 ON grief_plans.assTo_eID = emp2.eID;";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        echo "
            <tr
                class='ring-human-resource-blue-dark bg-gray-100 text-center text-human-resource-blue'
                >
                <td class='w-1/6 border p-3'>GRV-". $row['grvID'] ."</td>
                <td class='w-1/4 border p-3'>". $row['requester'] ."</td>
                <td class='status-pending w-1/6 border p-3'>". $row['grvSts'] ."</td>
                <td class='w-1/4 border p-3'>". $row['incharge'] ."</td>
                <td class='w-1/4 border p-3'>". $row['uplDate'] ."</td>
            </tr>
        ";
    }        
} 


function displayGrievances_resolution ($connection) {
    $sql = "SELECT grief_plans.*, emp1.name AS incharge 
            FROM grief_plans 
            INNER JOIN employees emp1 ON grief_plans.assTo_eID = emp1.eID;";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        echo "
            <div id='grievanceResolution' class='space-y-4'>
                <div
                class='rounded-lg bg-white p-4 text-human-resource-blue shadow-md'
                >
                <h3
                    class='5/11/2023, 1:33:12 PM continue 5/11/2023, 1:33:38 PM text-lg font-bold'
                >
                    GRV-". $row["grvID"] ."
                </h3>
                <p class='mb-2'>
                    <span class='font-bold'>Status:</span>
                    <span class='status-pending'>". $row["grvSts"] ."</span>
                </p>
                <p class='mb-2'>
                    <span class='font-bold'>Assigned To:</span> ". $row["incharge"] ."
                </p>
                <p class='mb-2'>
                    <span class='font-bold'>Last Updated:</span> ". $row["uplDate"] ."
                </p>
                <p class='mb-2'>
                    <span class='font-bold'>Description:</span> ". $row["grvDesc"] ."
                </p>
                <p class='mb-2'>
                    <span class='font-bold'>Investigation Findings:</span> ". $row["invDesc"] ."
                </p>
                <p class='mb-2'>
                    <span class='font-bold'>Actions Taken:</span> ". $row["actDesc"] ."
                </p>
                <!-- Additional details for other grievances -->
                </div>
            </div>
        ";
    }   
}


/*===================================================================================================================================
    functions used in: greif.php
===================================================================================================================================*/

function displayLeave ($connection) {
    $sql = "SELECT emp1.eID, emp1.name AS leaver, leave_plans.*, emp2.name AS incharge 
            FROM leave_plans
            INNER JOIN employees emp1 ON leave_plans.lve_eID = emp1.eID
            INNER JOIN employees emp2 ON leave_plans.mgr_eID = emp2.eID;
            ";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        echo "
            <tr class='leave-row'>
                <td class='employee-id'>".$row['eID']."</td>
                <td class='employee-name'>".$row['leaver']."</td>
                <td class='leave-type'>".$row['lveType']."</td>
                <td class='leave-start-date'>".$row['staDate']."</td>
                <td class='leave-end-date'>".$row['endDate']."</td>
                <td class='leave-days'>".$row['numdLve']."</td>
                <td class='leave-balance'>".$row['avlLve']."</td>
                <td class='manager-name'>".$row['incharge']."</td>
                    <form action='../../../php/includes/leave.inc.php' method='post'>
                        <td class='manager-signature'>
                        <div class='file-upload'>
                            <input type='file' accept='image' name='filesign'/>
                        </div>
                    </form>
                    </td>
                    <td class='leave-date'>". $row['decisionDate'] ."</td>
                    
                    <td class='leave-status'>".$row['decisionSts']."</td>
                <td class='leave-actions'>
                    <form action='../../../php/includes/leave.inc.php' method='post'>
                        <button  name='submit-app' value=".$row['lveID']." >Approve</button>
                        <button  name='submit-den'  value='".$row['lveID']."' >Deny</button>
                    </form>
                </td>
            </tr>
        ";
    }
}