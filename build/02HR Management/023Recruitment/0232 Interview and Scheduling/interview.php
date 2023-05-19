<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="recruitment page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Recruitment</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="/build/css/static.css" />
    <link rel="stylesheet" href="/build/css/style.css" />
    <link rel="stylesheet" href="interview.css" />
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
      <div class="search-login">
        <div class="search-bar ring-2 ring-human-resource-gray">
          <input
            type="text"
            placeholder="search for an employee...."
            class="search focus:outline-none"
          />
          <button><i class="bx bx-search-alt"></i></button>
        </div>
        <a href="/build/002Login Page/login.php" class="sign-in">logout</a>
      </div>
    </nav>
    <!-- End of Navigation Bar -->

    <!-- Sidebar -->
    <aside class="sidebar text-human-resource-blue">
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
    <main class="m-4 text-human-resource-white">
      <section>
        <h2
          class="mb-4 text-center text-2xl font-bold text-human-resource-white"
        >
          Interview Scheduling
        </h2>
        <div
          id="interviewScheduling"
          class="rounded-md bg-gray-100 p-4 text-human-resource-blue"
        >
          <h3 class="mb-4 text-xl font-bold">Schedule Interviews</h3>
          <form id="interviewSchedulingForm" class="flex flex-col gap-4">
            <label for="candidateName" class="font-medium"
              >Candidate Name</label
            >
            <input
              type="text"
              id="candidateName"
              name="candidateName"
              required
              class="rounded-lg border border-gray-300 px-4 py-2"
            />

            <label for="interviewDate" class="font-medium"
              >Interview Date</label
            >
            <input
              type="date"
              id="interviewDate"
              name="interviewDate"
              required
              class="rounded-lg border border-gray-300 px-4 py-2"
            />

            <label for="interviewTime" class="font-medium"
              >Interview Time</label
            >
            <input
              type="time"
              id="interviewTime"
              name="interviewTime"
              required
              class="rounded-lg border border-gray-300 px-4 py-2"
            />

            <label for="interviewLocation" class="font-medium"
              >Interview Location</label
            >
            <input
              type="text"
              id="interviewLocation"
              name="interviewLocation"
              required
              class="rounded-lg border border-gray-300 px-4 py-2"
            />

            <button
              type="submit"
              class="btnS mx-auto mt-4 rounded-md px-4 py-2 font-bold text-human-resource-white"
            >
              Schedule Interview
            </button>
          </form>
        </div>
        <table id="scheduledInterviews" class="my-4 w-full border-collapse">
          <thead>
            <tr class="bg-human-resource-white text-human-resource-blue">
              <th
                class="border border-gray-300 px-4 py-2 text-left font-medium"
              >
                Applicant Name
              </th>
              <th
                class="border border-gray-300 px-4 py-2 text-left font-medium"
              >
                Date
              </th>
              <th
                class="border border-gray-300 px-4 py-2 text-left font-medium"
              >
                Time
              </th>
              <th
                class="border border-gray-300 px-4 py-2 text-left font-medium"
              >
                Location
              </th>
              <th
                class="border border-gray-300 px-4 py-2 text-left font-medium"
              >
                Status
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-gray-300 px-4 py-2 text-center">
                Enrique Sanchez
              </td>
              <td class="border border-gray-300 px-4 py-2 text-center">
                3/20/2023
              </td>
              <td class="border border-gray-300 px-4 py-2 text-center">
                10:00 AM
              </td>
              <td class="border border-gray-300 px-4 py-2 text-center">
                Office Room 101
              </td>
              <td class="border border-gray-300 px-4 py-2 text-center">
                Scheduled
              </td>
            </tr>
            <!-- Additional rows for other scheduled interviews -->
          </tbody>
        </table>
      </section>
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
    <script src="interview.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
