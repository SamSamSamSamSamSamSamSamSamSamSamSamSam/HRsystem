<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="schedule and rota page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Schedule and Rota</title>
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
      <div class="search-login">
        <div class="search-bar ring-2 ring-human-resource-gray">
          <input
            type="text"
            placeholder="search for an employee.."
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
    <main>
      <!-- Shift Schedule -->
      <section class="my-4">
        <div
          id="calendar"
          class="m-auto rounded-lg bg-human-resource-white p-4 text-human-resource-blue shadow"
        ></div>
      </section>

      <!-- Shift Assignment -->
      <section class="mx-auto text-center">
        <h2 class="mb-4 text-2xl font-bold">Shift Assignments</h2>
        <table class="my-2 hidden w-screen border-collapse md:table">
          <thead>
            <tr
              class="rounded-tr-lg bg-human-resource-white text-base text-human-resource-blue"
            >
              <th class="py-3 text-center">Employee Name</th>
              <th class="text-center">Shift Days</th>
              <th class="text-center">Shift Time</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-human-resource-white">
              <td class="py-16 text-center">Joseph Cruz</td>
              <td class="text-center">Monday, Wednesday, Friday</td>
              <td class="text-center">09:00 - 17:00</td>
            </tr>
            <tr class="border-b border-human-resource-white">
              <td class="py-16 text-center">Roland Dumlao</td>
              <td class="text-center">Tuesday, Thursday</td>
              <td class="text-center">13:00 - 21:00</td>
            </tr>
            <tr class="border-b border-human-resource-white">
              <td class="py-16 text-center">Michael Johnson</td>
              <td class="text-center">Monday - Friday</td>
              <td class="text-center">09:00 - 17:00</td>
            </tr>
            <tr class="border-b border-human-resource-white">
              <td class="py-16 text-center">Guy Malano</td>
              <td class="text-center">Friday</td>
              <td class="text-center">18:00 - 02:00</td>
            </tr>
          </tbody>
        </table>
        <table id="shiftAssignments" class="w-full border-collapse">
          <!-- Shift assignment data goes here -->
        </table>

        <h3 class="mb-2 text-lg font-semibold">Create Shift Assignment</h3>
        <form
          id="createShiftAssignmentForm"
          class="mx-auto w-full max-w-md rounded-xl bg-human-resource-white p-4"
        >
          <div class="mb-4">
            <label
              for="employeeName"
              class="mb-2 block font-semibold text-human-resource-blue"
              >Employee ID:</label
            >
            <input
              type="text"
              id="employeeName"
              name="employeeName"
              required
              class="w-full rounded border border-gray-300 px-3 py-2 text-center focus:border-indigo-500 focus:outline-none"
            />
          </div>

          <div class="mb-4">
            <label
              for="shiftStartTime"
              class="mb-2 block font-semibold text-human-resource-blue"
              >Shift Start Time:</label
            >
            <input
              type="time"
              id="shiftStartTime"
              name="shiftStartTime"
              required
              class="w-full rounded border border-gray-300 px-3 py-2 text-center focus:border-indigo-500 focus:outline-none"
            />
          </div>

          <div class="mb-4">
            <label
              for="shiftEndTime"
              class="mb-2 block font-semibold text-human-resource-blue"
              >Shift End Time:</label
            >
            <input
              type="time"
              id="shiftEndTime"
              name="shiftEndTime"
              required
              class="w-full rounded border border-gray-300 px-3 py-2 text-center focus:border-indigo-500 focus:outline-none"
            />
          </div>

          <div class="mb-4">
            <label
              for="shiftNotes"
              class="mb-2 block font-semibold text-human-resource-blue"
              >Shift Notes:</label
            >
            <textarea
              id="shiftNotes"
              name="shiftNotes"
              class="w-full rounded border border-gray-300 px-3 py-2 text-center focus:border-indigo-500 focus:outline-none"
            ></textarea>
          </div>

          <button
            type="submit"
            class="rounded bg-human-resource-blue px-4 py-2 font-semibold text-white hover:bg-indigo-700"
          >
            Create
          </button>
        </form>
      </section>

      <!-- Shift Request -->
      <section>
        <h2 class="m-8 text-center text-2xl font-bold">
          Shift Requests and Swaps
        </h2>
        <!-- Table or list of shift requests and swaps -->
        <table id="shiftRequestsSwaps" class="my-2 w-screen border-collapse">
          <thead>
            <tr
              class="rounded-tr-lg bg-human-resource-white text-base text-human-resource-blue"
            >
              <th class="px-4 py-2">Employee Name</th>
              <th class="px-4 py-2">Current Shift</th>
              <th class="px-4 py-2">Requested Shift</th>
              <th class="px-4 py-2">Status</th>
              <th class="px-4 py-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Shift request/swap data goes here -->
            <tr class="rota-row">
              <td class="border-b px-4 py-2 text-center">Joseph Cruz</td>
              <td class="border-b px-4 py-2 text-center">Morning Shift</td>
              <td class="border-b px-4 py-2 text-center">Afternoon Shift</td>
              <td class="status-cell border-b px-4 py-2 text-center">
                Pending
              </td>
              <td class="actions-cell border-b px-4 py-2 text-center">
                <button
                  class="approve-button mx-auto rounded bg-green-500 px-2 py-1 font-semibold text-white hover:bg-green-600"
                >
                  Approve
                </button>
                <button
                  class="deny-button mx-auto rounded bg-red-500 px-2 py-1 font-semibold text-white hover:bg-red-600"
                >
                  Reject
                </button>
              </td>
            </tr>
            <tr class="rota-row">
              <td class="border-b px-4 py-2 text-center">Roland Dumlao</td>
              <td class="border-b px-4 py-2 text-center">Evening Shift</td>
              <td class="border-b px-4 py-2 text-center">Night Shift</td>
              <td class="status-cell border-b px-4 py-2 text-center">
                Pending
              </td>
              <td class="actions-cell border-b px-4 py-2 text-center">
                <button
                  class="approve-button rounded bg-green-500 px-2 py-1 font-semibold text-white hover:bg-green-600"
                >
                  Approve
                </button>
                <button
                  class="deny-button rounded bg-red-500 px-2 py-1 font-semibold text-white hover:bg-red-600"
                >
                  Reject
                </button>
              </td>
            </tr>
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
    <script src="/node_modules/fullcalendar/index.global.js"></script>
    <script src="rota.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
