<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="leave report-request page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Leave and Abscences</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="/build/css/static.css" />
    <link rel="stylesheet" href="leave.css" />
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
          <a class="top active">Time and Attendance</a>
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
      <?php include_once '../../../php/sidebar-and-search.php'; ?>

    <!-- Content -->
    <main>
      <table class="leave-table">
        <thead>
          <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Type of Leave</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Number of Days</th>
            <th>Reason</th>
            <th>Available Leave Days</th>
            <th>Manager Name</th>
            <th>Manager Signature</th>
            <th>Date</th>
            <th>Approval Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Jana Adriana Quiambao -->
          <tr class="leave-row">
            <td class="employee-id">5851</td>
            <td class="employee-name">Jana Adriana Quiambao</td>
            <td class="leave-type">Sick</td>
            <td class="leave-start-date">4/15/2023</td>
            <td class="leave-end-date">4/18/2023</td>
            <td class="leave-days">3</td>
            <td class="leave-reason">Fever</td>
            <td class="leave-balance">8</td>
            <td class="manager-name">Derrick Guzman</td>
            <td class="manager-signature">
              <!-- Upload manager signature here -->
              <div class="file-upload">
                <input type="file" accept="image/*" />
              </div>
            </td>
            <td class="leave-date"></td>
            <td class="leave-status status-pending">Pending</td>
            <td class="leave-actions">
              <!-- Add approve/deny buttons here -->
              <button class="approve-button">Approve</button>
              <button class="deny-button">Deny</button>
            </td>
          </tr>
          <!-- Rosalyn Cadar -->
          <tr class="leave-row">
            <td class="employee-id">7236</td>
            <td class="employee-name">Rosalyn Cadar</td>
            <td class="leave-type">Sick</td>
            <td class="leave-start-date">4/15/2023</td>
            <td class="leave-end-date">4/18/2023</td>
            <td class="leave-days">3</td>
            <td class="leave-reason">Fever</td>
            <td class="leave-balance">8</td>
            <td class="manager-name">Jonathan Kyle</td>
            <td class="manager-signature">
              <!-- Upload manager signature here -->
              <div class="file-upload">
                <input type="file" accept="image/*" />
              </div>
            </td>
            <td class="leave-date"></td>
            <td class="leave-status status-pending">Pending</td>
            <td class="leave-actions">
              <!-- Add approve/deny buttons here -->
              <button class="approve-button">Approve</button>
              <button class="deny-button">Deny</button>
            </td>
          </tr>
          <!-- Bob Johnson -->
          <tr class="leave-row">
            <td class="employee-id">7715</td>
            <td class="employee-name">Bob Johnson</td>
            <td class="leave-type">Sick</td>
            <td class="leave-start-date">4/15/2023</td>
            <td class="leave-end-date">4/18/2023</td>
            <td class="leave-days">3</td>
            <td class="leave-reason">Fever</td>
            <td class="leave-balance">8</td>
            <td class="manager-name">Derrick Guzman</td>
            <td class="manager-signature">
              <!-- Upload manager signature here -->
              <div class="file-upload">
                <input type="file" accept="image/*" />
              </div>
            </td>
            <td class="leave-date"></td>
            <td class="leave-status status-pending">Pending</td>
            <td class="leave-actions">
              <!-- Add approve/deny buttons here -->
              <button class="approve-button">Approve</button>
              <button class="deny-button">Deny</button>
            </td>
            <!-- Samantha Lee -->
          </tr>

          <tr class="leave-row">
            <td class="employee-id">8909</td>
            <td class="employee-name">Samantha Lee</td>
            <td class="leave-type">Sick</td>
            <td class="leave-start-date">4/15/2023</td>
            <td class="leave-end-date">4/18/2023</td>
            <td class="leave-days">3</td>
            <td class="leave-reason">Fever</td>
            <td class="leave-balance">8</td>
            <td class="manager-name">Derrick Guzman</td>
            <td class="manager-signature">
              <!-- Upload manager signature here -->
              <div class="file-upload">
                <input type="file" accept="image/*" />
              </div>
            </td>
            <td class="leave-date"></td>
            <td class="leave-status status-pending">Pending</td>
            <td class="leave-actions">
              <!-- Add approve/deny buttons here -->
              <button class="approve-button">Approve</button>
              <button class="deny-button">Deny</button>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- End of Table -->
    </main>
    <!-- End of Content -->

    <?php include_once '../../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="leave.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
