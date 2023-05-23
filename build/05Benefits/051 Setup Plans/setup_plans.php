<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="setup-plans for hr page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Benefits</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="/build/css/static.css" />
    <link rel="stylesheet" href="setup_plans.css" />
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
          <a href="/build/03Payroll/payroll.php">Payroll</a>
        </li>
        <li>
          <a href="/build/05Benefits/benefits.php" class="active">Benefits</a>
        </li>
        <li>
          <a href="/build/06Analytics/report.php">Analytics</a>
        </li>
      </ul>

      <form action="../../../php/includes/employee.inc.php" method="post">  
      <?php include_once '../../../php/sidebar-and-search.php'; ?>

    <!-- Content -->
    <main>
      <form action="submit_plan_setup.php" method="post" id="plan_setup_form">
        <label for="plan_name">Plan Name</label>
        <input type="text" id="plan_name" name="plan_name" />

        <label for="plan_type">Plan Type</label>
        <select id="plan_type" name="plan_type">
          <option value="health_insurance">Health</option>
          <option value="dental_insurance">Dental</option>
          <option value="vision_insurance">Vision</option>
          <option value="life_insurance">Life</option>
          <option value="disability_insurance">Disability</option>
          <option value="retirement_plan">Retirement Plan</option>
        </select>

        <label for="coverage_level">Coverage Level</label>
        <input type="text" id="coverage_level" name="coverage_level" />

        <label for="deductible">Deductible</label>
        <input type="text" id="deductible" name="deductible" />

        <label for="premium">Premium</label>
        <input type="text" id="premium" name="premium" />

        <input type="submit" value="Submit" />
      </form>
    </main>
    <!-- End of Content -->

    <?php include_once '../../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="setup_plans.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
