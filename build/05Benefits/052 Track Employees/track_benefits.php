<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="track benefits page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Benefits</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="track_benefits.css" />
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
          <a href="/build/05Benefits/benefits.php" class="active">Benefits</a>
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

    <!-- Contents -->
    <main>
      <div class="mx-auto max-w-2xl py-10">
        <form
          action="<!-- redirects to an indivuals benefits -->"
          method="post"
          class="rounded-lg bg-human-resource-white px-8 py-6 shadow-lg"
        >
          <div class="mb-6">
            <h2
              class="mb-4 text-center text-2xl font-bold text-human-resource-blue"
            >
              Create Employee Benefits
            </h2>
            <div class="-mx-2 mb-4 flex flex-wrap">
              <div class="mb-4 w-full px-2 md:mb-0 md:w-1/2">
                <label
                  class="mb-2 block font-bold text-human-resource-blue"
                  for="employee-name"
                >
                  Employee Name
                </label>
                <input
                  class="focus:shadow-outline w-full appearance-none rounded px-3 py-2 leading-tight text-human-resource-gray focus:outline-none"
                  id="employee-name"
                  name="employee-name"
                  type="text"
                  placeholder="John Doe"
                />
              </div>
              <div class="w-full px-2 md:w-1/2">
                <label
                  class="mb-2 block font-bold text-human-resource-blue"
                  for="employee-id"
                >
                  Employee ID
                </label>
                <input
                  class="focus:shadow-outline w-full appearance-none rounded px-3 py-2 leading-tight text-human-resource-gray focus:outline-none"
                  id="employee-id"
                  name="employee-id"
                  type="text"
                  placeholder="9565323"
                />
              </div>
            </div>
          </div>

          <div class="mb-6">
            <h3 class="mb-4 text-lg font-bold text-human-resource-blue">
              Health Insurance
            </h3>
            <div class="-mx-2 mb-4 flex flex-wrap">
              <div class="mb-4 w-full px-2 md:mb-0 md:w-1/2">
                <label
                  class="mb-2 block font-bold text-human-resource-blue"
                  for="health-plan-type"
                >
                  Plan Type
                </label>
                <select
                  class="focus:shadow-outline w-full appearance-none rounded px-3 py-2 leading-tight text-sky-900 focus:outline-none"
                  id="health-plan-type"
                  name="health-plan-type"
                >
                  <option value="A">WHEN THE HR WILL ADD</option>
                  <option value="B">THE SETUP PLAN TYPE</option>
                  <option value="C">THEY WILL AUTOMATICALLY</option>
                  <option value="D">ADDED IN THIS FIELD</option>
                </select>
              </div>
              <div class="w-full px-2 md:w-1/2">
                <label
                  class="mb-2 block font-bold text-human-resource-blue"
                  for="health-coverage-level"
                >
                  Coverage Level
                </label>
                <select
                  class="focus:shadow-outline w-full appearance-none rounded px-3 py-2 leading-tight text-sky-900 focus:outline-none"
                  id="health-coverage-level"
                  name="health-coverage-level"
                >
                  <option value="Individual">Individual</option>
                  <option value="Family">Family</option>
                </select>
              </div>
            </div>
            <div class="-mx-2 mb-4 flex flex-wrap">
              <div class="mb-4 w-full px-2 md:mb-0 md:w-1/2">
                <label
                  class="mb-2 block font-bold text-human-resource-blue"
                  for="health-start-date"
                >
                  Start Date
                </label>
                <input
                  class="focus:shadow-outline w-full appearance-none rounded px-3 py-2 leading-tight text-gray-700 focus:outline-none"
                  id="health-start-date"
                  name="health-start-date"
                  type="date"
                />
              </div>
              <div class="mb-4 w-full px-2 md:mb-0 md:w-1/2">
                <label
                  class="mb-2 block font-bold text-human-resource-gray"
                  for="health-start-date"
                >
                  End Date
                </label>
                <input
                  class="focus:shadow-outline w-full appearance-none rounded px-3 py-2 leading-tight text-human-resource-blue focus:outline-none"
                  id="health-start-date"
                  name="health-start-date"
                  type="date"
                />
              </div>
            </div>
          </div>
          <div class="text-center">
            <button
              class="focus:shadow-outline rounded bg-human-resource-blue px-4 py-2 font-bold text-white hover:bg-red-700 hover:text-human-resource-blue focus:outline-none"
              type="submit"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
    </main>
    <!-- End of Contents -->

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
    <script src="track_benefits.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
