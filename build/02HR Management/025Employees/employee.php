<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="employee tracking page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Employees</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="/build/css/static.css" />
    <link rel="stylesheet" href="/build/css/style.css" />
    <link rel="stylesheet" href="employee.css" />
    <!-- CSS.GG -->
    <link href="https://css.gg/css" rel="stylesheet" />
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/4f7e7a7341.js"
      crossorigin="anonymous"
    ></script>
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="text-human-resource-blue">
      <div class="menu">
        <i class="bx bx-menu md:visible"></i>
      </div>
      <div class="logo-itself">
        <a href="/build/01Landing Page/index.php">
          <img
            src="/build/00Image/hrm-logo.png"
            alt="logo"
            class="hrm-logo ring-2 ring-inset ring-human-resource-blue"
          />
        </a>
      </div>
      <ul class="nav-links">
        <li class="dropdown">
          <a class="top active">Administration</a>
          <ul class="dropdown-menu">
            <li>
              <a href="/build/02HR Management/023Recruitment/rlm.php"
                >Recruitment</a
              >
            </li>
            <li>
              <a href="/build/02HR Management/024Performances/perm.php"
                >Performance</a
              >
            </li>
            <li>
              <a href="/build/02HR Management/025Employees/employee.php"
                >Employees</a
              >
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="top">Time and Attendance</a>
          <ul class="dropdown-menu">
            <li>
              <a
                href="/build/04Time and Attendance/041Schedule and Rota/rota.php"
                >Schedule and Rota</a
              >
            </li>
            <li>
              <a
                href="/build/04Time and Attendance/042Absences and Leave/leave.php"
                >Absences and Leave</a
              >
            </li>
            <li>
              <a
                href="/build/04Time and Attendance/043Grievance Handling/grief.php"
                >Grievance Handling</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="/build/03Payroll/payroll.php">Payroll</a>
        </li>
        <li>
          <a href="/build/05Benefits/benefits.php">Benefits</a>
        </li>
        <li>
          <a href="/build/06Analytics/report.php">Analytics</a>
        </li>
      </ul>
      <form action="../../../php/includes/employee.inc.php" method="post">  
      <?php 
        include_once '../../../php/sidebar-and-search.php'; 
        require_once '../../../php/includes/dbconn.inc.php';
        require_once '../../../php/includes/functions.inc.php';
      ?>

    <!-- Content -->
    <main class="text-human-resource-white">
<!---------------------------------------------------------------------------------------------------------------------->         
    <form action="/php/includes/employee.inc.php" method="post"> 
      <div
        class="mx-auto mb-8 mt-8 flex max-w-sm items-center justify-center gap-3"
      >
        <input
          type="text"
          id="search-bar"
          name="search-record"
          placeholder="<?php errorInput_placeholder();  ?>" 
          class="flex-grow rounded-md border border-gray-400 px-4 py-2 text-human-resource-blue"
        />
        <select
          id="filter"
          name="search-selection"
          class="align-self-center rounded-md border border-gray-400 px-4 py-2 text-human-resource-blue"
        >
          <option value="all">All</option>
          <option value="eID">Employee ID</option>
          <option value="empName">Employee Name</option>
          <option value="department">Department</option>
          <option value="position">Position</option>
        </select>
      </div>
    </form>
<!---------------------------------------------------------------------------------------------------------------------->    
<?php 
    // sql to selected columns included for display in this page
    $sqldisplay = "SELECT employees.eID, employees.name, jobs.jobTitle, departments.depName, employees.email, employment_details.jobSts, employment_details.hDate, employment_details.contract, compensations_benefits.rgwHrs
    FROM employees
    INNER JOIN employment_details ON employees.eID = employment_details.ed_eID
    INNER JOIN compensations_benefits ON employees.eID = compensations_benefits.cb_eID
    INNER JOIN jobs ON employment_details.ed_jobID = jobs.jobID
    INNER JOIN departments ON jobs.depID = departments.depID";
?>  
<!---------------------------------------------------------------------------------------------------------------------->  
      <table
        id="employeeTable"
        class="my-2 hidden w-screen border-collapse md:table"
      >
        <thead>
          <tr
            class="rounded-tr-lg bg-human-resource-white text-base text-human-resource-blue"
          >
            <th class="py-3 text-center">Employee ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Position</th>
            <th class="text-center">Department</th>
            <th class="text-center">Contact Details</th>
            <th class="text-center">Status</th>
            <th class="text-center">Employment Details</th>
          </tr>
        </thead>
        <tbody>
<!--------------[ EMPLOYEES DISPLAY ]-------------------------------------------------------------------------------------------------------->          
<?php
  if (isset($_GET["page"])){
    if ($_GET["page"]=="default") {
      // select query for the display table
      $sql = $sqldisplay ;
      // display data from database base on user input
      displayEmployee($connection, $sql);
    }
  }
  else if (isset($_GET["verifyall"])) {

    if ($_GET["verifyall"] == "true") {
      // get the value of input from url
      $userinput = $_GET["input"];
      // select query for the display table
      $sql = $sqldisplay . " WHERE employees.eID = " . (int)$userinput . " OR employees.name LIKE '%". $userinput ."%' 
      OR departments.depName LIKE '%". $userinput ."%' OR jobs.jobTitle LIKE '%". $userinput ."%';";
      // display data from database base on user input
      displayEmployee($connection, $sql);  
    }
  }
  else if (isset($_GET["verifyemp"])) {

    if ($_GET["verifyemp"] == "true") {
      // get the value of input from url
      $userinput = $_GET["input"];
      // select query for the display table
      $sql = $sqldisplay . " WHERE employees.eID = " . (int)$userinput . " OR employees.name LIKE '%". $userinput ."%';";
      // display data from database base on user input
      displayEmployee($connection, $sql);        
    }

  }
  else if (isset($_GET["verifypos"])) {
    // checks if user input is found in the database
    if ($_GET["verifypos"] == "true") {
      // get the value of input from url
      $userinput = $_GET["input"];
      // select query for the display table
      $sql = $sqldisplay . " WHERE jobs.jobTitle LIKE '%". $userinput ."%';";
      // display data from database base on user input
      displayEmployee($connection, $sql);   
    }
  } 
  else {
      // select query for the display table
      $sql = $sqldisplay ;
      // display data from database base on user input
      displayEmployee($connection, $sql);
  }
  

  if (isset($_GET["verifydep"])) {
    if ($_GET["verifydep"]=="true") {
      // gets the value of input from url
      $userinput = $_GET["input"];
      // query
      $sql = $sqldisplay . " WHERE departments.depName LIKE '%". $userinput ."%';";
      // display table for employees with same departments
      displayEmployee($connection, $sql);
    }
  }
?>
<!---------------------------------------------------------------------------------------------------------------------->        
        </tbody>
      </table>

<!--------------[ EMPLOYEES DISPLAY SMALL SCREENS ]----------------------------------------------------------------------------------------->       
      <!-- For Small Screens -->
      <h3 class="mb-4 text-center text-lg font-bold md:hidden">
        Employee Details
      </h3>

      <div id="employeeDetailsContainer" class="grid grid-cols-2 gap-4">
        <!-- Employee details content goes here -->
        <div
          class="mx-auto my-8 w-80 max-w-2xl rounded-md bg-human-resource-white p-4 text-human-resource-blue shadow md:hidden"
        >
<!---------------------------------------------------------------------------------------------------------------------->  
<?php
  if (isset($_GET["page"])){
    if ($_GET["page"]=="default") {
      // select query for the display table
      $sql = $sqldisplay ;
      // display data from database base on user input
      displayEmployee_smallscreen($connection, $sql);
    }
  }
  // executes code when all category is chosen
  else if (isset($_GET["verifyall"])) {
    if ($_GET["verifyall"] == "true") {
      // get the value of input from url
      $userinput = $_GET["input"];
      // select query for the display table
      $sql = $sqldisplay . " WHERE employees.eID = " . (int)$userinput . " OR employees.name LIKE '%". $userinput ."%' 
      OR departments.depName LIKE '%". $userinput ."%' OR jobs.jobTitle LIKE '%". $userinput ."%' ;";
      // display data from database base on user input
      displayEmployee_smallscreen($connection, $sql); 
    }
  }
  // executes code when employee id or name category is chosen
  else if (isset($_GET["verifyemp"])) {

    if ($_GET["verifyemp"] == true) {
      // get the value of input from url
      $userinput = $_GET["input"];
      // select query for the display table

      $sql = $sqldisplay . " WHERE employees.eID = " . (int)$userinput . " OR employees.name LIKE '%". $userinput ."%';";
      // display data from database base on user input
      displayEmployee_smallscreen($connection, $sql);        
    }

  }
  // executes code when employee position category is chosen
  else if (isset($_GET["verifypos"])) {
    // checks if user input is found in the database
    if ($_GET["verifypos"] == "true") {
      // gets the value of input from url
      $userinput = $_GET["input"];
      // select query for the display table
      $sql = $sqldisplay . " WHERE jobs.jobTitle LIKE '%". $userinput ."%';";
      // display data from database base on user input
      displayEmployee_smallscreen($connection, $sql);   
    }
  } 
  else {
    // select query for the display table
    $sql = $sqldisplay ;
    // display data from database base on user input
    displayEmployee_smallscreen($connection, $sql);
  }
  

  // executes code when departments category is chosen
  if (isset($_GET["verifydep"])) {
    if ($_GET["verifydep"]=="true") {
      // gets the value of input from url
      $userinput = $_GET["input"];
      // query
      $sql = $sqldisplay . " WHERE departments.depName LIKE '%". $userinput ."%';";
      displayEmployee_smallscreen($connection, $sql);
    }
  }
?>
<!---------------------------------------------------------------------------------------------------------------------->             
        </div>
      </div>

<!--------------[ DEPARTMENTS DISPLAY ]--------------------------------------------------------------------------------------------------------> 
      <h2 class="mt-8 text-center text-xl font-bold">Department Information</h2>
      <div
        class="mx-auto max-w-2xl rounded-md bg-human-resource-white p-4 text-human-resource-blue"
      >
        <ul class="list-disc">
<!---------------------------------------------------------------------------------------------------------------------->  
<?php
  if (isset($_GET["verifyall"])) {

    if ($_GET["verifyall"] == "true") {
      // get the value of input from url
      $userinput = $_GET["input"];
      // select query for the display table
      $sql = $sqldisplay . " WHERE employees.eID = " . (int)$userinput . " OR employees.name LIKE '%". $userinput ."%' 
      OR departments.depName LIKE '%". $userinput ."%' OR jobs.jobTitle LIKE '%". $userinput ."%' ;"; 
      $result = mysqli_query($connection, $sql);
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        displayDepartment($connection, $row['depName']);
      }
    }
  }
  
  if (isset($_GET["verifydep"])) {
    if ($_GET["verifydep"]=="true") {
      // gets the value of input from url 
      $userinput = $_GET["input"];
      // Displays department information
      displayDepartment($connection, $userinput);
    }
    else {
      $sql = "SELECT DISTINCT departments.depName, departments.depLdr_eID, employees.name 
      FROM departments INNER JOIN jobs ON jobs.depID = departments.depID 
      INNER JOIN employees ON departments.depLdr_eID = employees.eID;";
      $result = mysqli_query($connection, $sql);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          displayDepartment($connection, $row['depName']);
        }
      }
    }
  }
  else if (!isset($_GET["verifydep"]) && !isset($_GET["verifyall"])){
    $sql = "SELECT DISTINCT departments.depName, departments.depLdr_eID, employees.name 
    FROM departments INNER JOIN jobs ON jobs.depID = departments.depID 
    INNER JOIN employees ON departments.depLdr_eID = employees.eID;";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        displayDepartment($connection, $row['depName']);
      }
    }
  }
  
?>
<!---------------------------------------------------------------------------------------------------------------------->  
        </ul>
      </div>

<!--------------[ INDIVIDUAL PROFILE ]-------------------------------------------------------------------------------------------------------->      

      <!-- This will be seen in the individual's profile instead... -->
      <h2 class="mt-8 text-center text-xl font-bold">
        Employee Documents and Files
      </h2>
      <div id="personalInfos"
        class="mx-auto max-w-2xl rounded-md bg-human-resource-white p-4 text-human-resource-blue"
      >
        <?php
          displayEmployee_personalInfo($connection, 1);
        ?>
      </div>

<!--------------[ MANIPULATE EMPLOYEE DATA ]-------------------------------------------------------------------------------------------------------->

      <h2 class="mt-8 text-center text-xl font-bold">Employee Actions</h2>

      <!-- This button will make all of those who requested to leave to be approved -->
      <div class="mx-auto mt-8 flex max-w-2xl gap-4">
        <button
          class="employee-actions m-4 rounded-md bg-human-resource-white px-4 py-2 font-bold text-human-resource-blue"
        >
          Initiate Leave Request
        </button>

        <!-- This button will check all of those who has the employee benefits -->
        <button
          class="employee-actions m-4 rounded-md bg-human-resource-white px-4 py-2 font-bold text-human-resource-blue"
        >
          Manage Employee Benefits
        </button>

        <!-- When this button is clicked, it will be then asked whose user should be updated. Only those who have searched will appear here -->
        <button
          class="employee-actions m-4 rounded-md bg-human-resource-white px-4 py-2 font-bold text-human-resource-blue"
        >
          Update Employee Information
        </button>

        <!-- This will update the Analytics tab in accordance to the employees -->
        <button
          class="employee-actions m-4 rounded-md bg-human-resource-white px-4 py-2 font-bold text-human-resource-blue"
        >
          Generate Reports
        </button>
      </div>
    </main>
    <!-- End of Content -->

    <?php include_once '../../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="employee.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
