<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="payroll report page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Payroll</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="payroll.css" />
    <link rel="stylesheet" href="/build/css/static.css" />
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
    <!-- Navigation Bar -->
    <nav>
      <div class="menu">
        <i class="bx bx-menu"></i>
      </div>
      <div class="logo-itself">
        <a href="/build/01Landing Page/index.php">
          <img src="/build/00Image/hrm-logo.png" alt="logo" class="hrm-logo" />
        </a>
      </div>
      <ul class="nav-links">
        <li class="dropdown">
          <a class="top">Administration</a>
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
          <a href="/build/03Payroll/payroll.php" class="active">Payroll</a>
        </li>
        <li>
          <a href="/build/05Benefits/benefits.php">Benefits</a>
        </li>
        <li>
          <a href="/build/06Analytics/report.php">Analytics</a>
        </li>
      </ul>
      <form action="../../php/includes/employee.inc.php" method="post">  
      <?php 
            include_once '../../php/sidebar-and-search.php'; 
            include_once '../../php/includes/dbconn.inc.php';
            require_once '../../php/includes/functions.inc.php';
      ?>

    <!-- Content -->
    <main>
      <!-- Table -->
    <div class="table-wrapper">  
      <center><h3 class="mb-2 text-lg font-semibold">Monthly Payroll Information</h3></center>
      <table class="payroll-table">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Total Regular Hours</th>
            <th>Total Overtime Hours</th>
            <th>Regular Pay Rate</th>
            <th>Overtime Pay Rate</th>
            <th>Regular Pay</th>
            <th>Overtime Pay</th>
            <th>Gross Pay</th>
            <th>Deductions</th>
            <th>Net Pay</th>
            <th>Pay Date</th>
            <th>Preferred Pay Method</th>
          </tr>
        </thead>
        <!-- Table contents -->
        <tbody>
          <?php
            displayPayroll($connection);
          ?>
        </tbody>
        <!-- End of Table Contents -->
      </table>
    </div>  
      <!-- End of Table -->
    </main>
    <!-- End of Content -->

    <?php include_once '../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="payroll.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
