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
      <?php include_once '../../php/sidebar-and-search.php'; ?>

    <!-- Content -->
    <main>
      <!-- Table -->
      <table class="payroll-table">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Period Start</th>
            <th>Period End</th>
            <th>Regular Hours</th>
            <th>Overtime Hours</th>
            <th>Regular Pay Rate</th>
            <th>Overtime Pay Rate</th>
            <th>Regular Pay</th>
            <th>Overtime Pay</th>
            <th>Gross Pay</th>
            <th>Deductions</th>
            <th>Net Pay</th>
            <th>Pay Date</th>
            <th>Pay Method</th>
            <th>Status</th>
          </tr>
        </thead>
        <!-- Table contents -->
        <tbody>
          <tr class="payroll-row">
            <td class="employee-id">2984</td>
            <td class="employee-name">Joseph Brody</td>
            <td><time datetime="2023-03-01">3/1/2023</time></td>
            <td><time datetime="2023-03-15">3/15/2023</time></td>
            <td>80</td>
            <td>10</td>
            <td>PHP200.00</td>
            <td>PHP300.00</td>
            <td>PHP16,000.00</td>
            <td>PHP3,000.00</td>
            <td>PHP19,000.00</td>
            <td>PHP4,000.00</td>
            <td>PHP15,000.00</td>
            <td><time datetime="2023-03-20">3/20/2023</time></td>
            <td>Direct Deposit</td>
            <td class="status-approved">Paid</td>
          </tr>
          <tr class="payroll-row">
            <td class="employee-id">3580</td>
            <td class="employee-name">John Doe</td>
            <td><time datetime="2023-03-01">3/1/2023</time></td>
            <td><time datetime="2023-03-15">3/15/2023</time></td>
            <td>75</td>
            <td>5</td>
            <td>PHP180.00</td>
            <td>PHP270.00</td>
            <td>PHP13,500.00</td>
            <td>PHP1,350.00</td>
            <td>PHP14,850.00</td>
            <td>PHP3,000.00</td>
            <td>PHP11,850.00</td>
            <td><time datetime="2023-03-20">3/20/2023</time></td>
            <td>Check</td>
            <td class="status-approved">Paid</td>
          </tr>
          <tr class="payroll-row">
            <td class="employee-id">4800</td>
            <td class="employee-name">Bob Johnson</td>
            <td><time datetime="2023-03-01">3/1/2023</time></td>
            <td><time datetime="2023-03-15">3/15/2023</time></td>
            <td>70</td>
            <td>15</td>
            <td>PHP220.00</td>
            <td>PHP330.00</td>
            <td>PHP15,400.00</td>
            <td>PHP4,950.00</td>
            <td>PHP20,350.00</td>
            <td>PHP3,500.00</td>
            <td>PHP16,850.00</td>
            <td><time datetime="2023-03-20">3/20/2023</time></td>
            <td>Direct Deposit</td>
            <td class="status-approved">Paid</td>
          </tr>
          <tr class="payroll-row">
            <td class="employee-id">8909</td>
            <td class="employee-name">Samantha Lee</td>
            <td><time datetime="2023-03-01">3/1/2023</time></td>
            <td><time datetime="2023-03-15">3/15/2023</time></td>
            <td>85</td>
            <td>20</td>
            <td>PHP250.00</td>
            <td>PHP370.50</td>
            <td>PHP21,250.00</td>
            <td>PHP7,500.00</td>
            <td>PHP28,750.00</td>
            <td>PHP4,000.00</td>
            <td>PHP24,750.00</td>
            <td><time datetime="2023-03-20">3/20/2023</time></td>
            <td>Check</td>
            <td class="status-approved">Paid</td>
          </tr>
        </tbody>
        <!-- End of Table Contents -->
      </table>
      <!-- End of Table -->
    </main>
    <!-- End of Content -->

    <?php include_once '../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="payroll.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
