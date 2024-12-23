<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="analytics page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Analytics</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="/build/css/static.css" />
    <link rel="stylesheet" href="/build/css/style.css" />
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
  <body class="bg-human-resource-blue">
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
          <a href="/build/05Benefits/benefits.php">Benefits</a>
        </li>
        <li>
          <a href="/build/06Analytics/report.php" class="active">Analytics</a>
        </li>
      </ul>
      <form action="../../php/includes/employee.inc.php" method="post">  
      <?php 
          include_once '../../php/sidebar-and-search.php'; 
          require_once '../../php/includes/dbconn.inc.php';
          require_once '../../php/includes/functions.inc.php';
      ?>

    <!-- Contents -->
    <main class="grid place-content-center">
      <h1 class="mb-2 mt-2 text-center text-4xl font-bold text-white">
        Analytics Dashboard
      </h1>
      <section class="max-w-2xl">
        <div
          id="employee-demographics"
          class="mb-8 rounded-lg bg-white bg-gradient-to-r p-8"
        >
          <h2 class="mb-4 text-center text-2xl font-bold text-gray-800">
            Employee Demographics
          </h2>
          <?php
            echo"
            <p class='mb-2 text-lg text-gray-800'>Median Age: ". number_format(demographics_agemedian($connection), 2, ".", ",") ."</p>
            <p class='mb-2 text-lg text-gray-800'>Gender:</p>";
            demographics_gender($connection);
            echo"<p class='mb-2 text-lg text-gray-800'>Nationality:</p>";
            demographics_nationality($connection);
          ?>
        </div>
        <div id="recruitment-metrics" class="mb-8 rounded-lg bg-white p-8">
          <h2 class="mb-4 text-center text-2xl font-bold text-gray-800">
            Recruitment Metrics
          </h2>
          <p class="mb-2 text-lg text-gray-800">Number of Applicants: 500</p>
          <p class="mb-2 text-lg text-gray-800">
            Time to Fill Positions (Average): 30 days
          </p>
          <p class="mb-2 text-lg text-gray-800">Source of Hires:</p>
          <p class="mx-8 text-lg text-gray-800">Job Boards - 60%</p>
          <p class="mx-8 text-lg text-gray-800">Employee Referrals - 30%</p>
          <p class="mx-8 text-lg text-gray-800">Others - 10%</p>
        </div>
        <div id="performance-metrics" class="mb-8 rounded-lg bg-white p-8">
          <h2 class="mb-4 text-center text-2xl font-bold text-gray-800">
            Performance Metrics
          </h2>
          <p class="mb-2 text-lg text-gray-800">
            Employee Ratings (Average): 4.2 out of 5
          </p>
          <p class="mb-2 text-lg text-gray-800">Employee Feedback:</p>
          <p class="mx-8 text-lg text-gray-800">Positive - 80%</p>
          <p class="mx-8 text-lg text-gray-800">Neutral - 15%</p>
          <p class="mx-8 text-lg text-gray-800">Negative - 5%</p>
          <p class="mb-2 text-lg text-gray-800">
            Engagement Survey Results: Engagement Score - 78%
          </p>
        </div>
        <h2 class="mb-4 text-center text-2xl font-bold">Turnover Rate</h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
          <div class="rounded-lg bg-white p-4 shadow">
            <h3 class="mb-2 text-center text-lg font-semibold">
              Overall Turnover Rate
            </h3>
            <p class="text-gray-600">
              This is the percentage of employees who have left the company in
              the last 12 months.
            </p>
            <div class="mt-4 flex items-center">
              <div class="relative h-6 flex-grow rounded-lg bg-green-500">
                <div
                  class="absolute left-0 top-0 h-6 rounded-lg bg-red-500"
                  style="width: 25%"
                ></div>
              </div>
              <span class="ml-2 text-gray-600">25%</span>
            </div>
          </div>
          <div class="rounded-lg bg-white p-4 shadow">
            <h3 class="mb-2 text-center text-lg font-semibold">
              Turnover Rate by Department
            </h3>
            <p class="text-gray-600">
              This chart shows the turnover rate by department.
            </p>
            <div class="mt-4">
              <canvas id="turnoverChart" width="400" height="300"></canvas>
            </div>
          </div>
          <div class="rounded-lg bg-white p-4 shadow">
            <h3 class="mb-2 text-center text-lg font-semibold">
              Top Reasons for Turnover
            </h3>
            <p class="text-gray-600">
              This chart shows the top reasons for employee turnover.
            </p>
            <div class="mt-4">
              <canvas
                id="turnoverReasonsChart"
                width="400"
                height="300"
              ></canvas>
            </div>
          </div>
        </div>

        <h2 class="mb-4 mt-8 text-center text-2xl font-bold">
          Training and Development Metrics
        </h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div class="rounded-lg bg-white p-4 text-center shadow">
            <h3 class="mb-2 text-lg font-semibold">Training Hours Completed</h3>
            <p class="text-gray-600">
              This chart shows the total number of training hours completed by
              employees in the last 12 months.
            </p>
            <div class="mt-4">
              <canvas id="trainingHoursChart" width="400" height="300"></canvas>
            </div>
          </div>
          <div class="rounded-lg bg-white p-4 shadow">
            <h3 class="mb-2 text-center text-lg font-semibold">
              Percentage of Employees Completed Training
            </h3>
            <p class="text-gray-600">
              This chart shows the percentage of employees who have completed
              training.
            </p>
            <div class="mt-4">
              <canvas
                id="trainingCompletionChart"
                width="400"
                height="300"
              ></canvas>
            </div>
          </div>
        </div>
        <h2 class="mb-4 mt-8 text-center text-2xl font-bold">
          Compensation and Benefits Metrics
        </h2>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
          <div class="rounded-lg bg-white p-4 shadow">
            <h3 class="mb-2 text-center text-lg font-semibold">
              Average Salary
            </h3>
            <?php
              displayAverageSalary($connection);
            ?>
            <div class="mt-4">
              <canvas id="averageSalaryChart" width="400" height="300"></canvas>
            </div>
          </div>
          <div class="rounded-lg bg-white p-4 shadow">
            <h3 class="mb-2 text-center text-lg font-semibold">
              Percentage of Employees Receiving Bonuses
            </h3>
            <p class="text-gray-600">
              This chart shows the percentage of employees receiving bonuses or
              other incentives.
            </p>
            <div class="mt-4">
              <canvas
                id="bonusPercentageChart"
                width="400"
                height="300"
              ></canvas>
            </div>
          </div>
          <div class="rounded-lg bg-white p-4 shadow">
            <h3 class="mb-2 text-center text-lg font-semibold">
              Cost of Employee Benefits
            </h3>
            <p class="text-gray-600">
              This chart shows the cost of employee benefits.
            </p>
            <div class="mt-4">
              <canvas id="benefitsCostChart" width="400" height="300"></canvas>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End of Contents -->

    <?php include_once '../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="report.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
