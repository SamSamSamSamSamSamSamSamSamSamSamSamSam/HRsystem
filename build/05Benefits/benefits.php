<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="benefits page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Benefits</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="/build/css/static.css" />
    <link rel="stylesheet" href="benefits.css" />
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
      <div class="search-login">
        <div class="search-bar">
          <input
            type="text"
            placeholder="search for an employee...."
            class="search"
          />
          <button><i class="bx bx-search-alt"></i></button>
        </div>
        <a href="/build/002Login Page/login.php" class="sign-in">logout</a>
      </div>
    </nav>
    <!-- End of Navigation Bar -->

    <!-- Sidebar -->
    <aside class="sidebar">
      <!-- Links -->
      <ul class="sidebar-links">
        <li>
          <a class="plusAdm"
            >administration
            <button><i class="gg-math-plus"></i></button>
            <ul class="drp-dn-menuAdm">
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
            </ul></a
          >
        </li>

        <li>
          <a class="plusAtt"
            >time and attendance
            <button><i class="gg-math-plus"></i></button>
            <ul class="drp-dn-menuAtt">
              <li>
                <a
                  href="/build/04Time and Attendance/041Schedule and Rota/rota.php"
                  >Schedule and Rota</a
                >
              </li>
              <li>
                <a
                  href="/build/04Time and Attendance/042Absences and Leave/leave.php"
                  >Abscences and Leave</a
                >
              </li>
              <li>
                <a
                  href="/build/04Time and Attendance/043Grievance Handling/grief.php"
                  >Grievance Handling</a
                >
              </li>
            </ul></a
          >
        </li>

        <li><a href="/build/03Payroll/payroll.php">payroll</a></li>
        <li><a href="/build/05Benefits/benefits.php">benefits</a></li>
        <li><a href="/build/06Analytics/report.php">analytics</a></li>
      </ul>
      <!-- Search and Login -->
      <div class="sidebar-login">
        <a href="" class="login">sign out</a>
      </div>
    </aside>
    <!-- End of Sidebar -->

    <!-- Content -->
    <main class="benefits-page">
      <a href="/build/05Benefits/051 Setup Plans/setup_plans.php">
        <div class="benefits-pages">SETUP PLANS</div>
      </a>
      <a href="/build/05Benefits/052 Track Employees/track_benefits.php">
        <div class="benefits-pages">TRACK EMPLOYEES</div>
      </a>
      <a href="/build/05Benefits/053 Eligibility/eligible.php">
        <div class="benefits-pages">ELIGIBLE EMPLOYEES</div>
      </a>
    </main>
    <!-- End of Content -->

    <!-- Footer -->
    <footer class="end-page">
      <div class="copyright">@2023 Human Resouce System</div>
      <div class="n-end">
        About
        <div class="n-info">
          <hr />
          <p>A basic project of a Human Resource Systems.</p>
        </div>
      </div>
      <div class="n-end">
        Contact Us
        <div class="n-info">
          <hr />
          <section class="info">Japeth Guzon : 09954014922</section>
          <hr />
          <section class="info">Sailor Sam Pacaldo : 09954014922</section>
          <hr />
          <section class="info">Kyle Llaguno : 09954014922</section>
          <hr />
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

    <!-- JavaScript -->
    <script src="benefits.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
