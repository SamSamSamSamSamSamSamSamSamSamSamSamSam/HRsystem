<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="performance management page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Performance</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="/build/css/static.css" />
    <link rel="stylesheet" href="/build/css/style.css" />
    <link rel="stylesheet" href="perm.css" />
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
      <?php include_once '../../../php/sidebar-and-search.php'; ?>

    <main class="text-human-resource-blue">
      <section class="box-contain">
        <div class="container">
          <h1
            class="m-8 py-8 text-center text-3xl font-bold text-human-resource-white"
          >
            Reviews
          </h1>
          <form class="mx-auto max-w-md rounded-lg bg-white p-6 shadow-md">
            <label for="review-period" class="mb-2 block font-semibold"
              >Employee ID:</label
            >
            <input
              type="text"
              id="employee-id"
              name="employee-id"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="review-period" class="mb-2 block font-semibold"
              >Employee Name:</label
            >
            <input
              type="text"
              id="employee-name"
              name="employee-name"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="review-period" class="mb-2 block font-semibold"
              >Review Period:</label
            >
            <input
              type="text"
              id="review-period"
              name="review-period"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="reviewer" class="mb-2 block font-semibold"
              >Reviewer:</label
            >
            <input
              type="text"
              id="reviewer"
              name="reviewer"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="progress" class="mb-2 block font-semibold"
              >Progress:</label
            >
            <input
              type="text"
              id="progress"
              name="progress"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <button
              type="submit"
              class="focus:shadow-outline submit-btn rounded px-4 py-2 font-bold text-human-resource-white focus:outline-none"
            >
              Submit
            </button>
          </form>
        </div>

        <div class="container">
          <h1
            class="m-8 py-8 text-center text-3xl font-bold text-human-resource-white"
          >
            Goals
          </h1>
          <form class="mx-auto max-w-md rounded-lg bg-white p-6 shadow-md">
            <label for="review-period" class="mb-2 block font-semibold"
              >Employee ID:</label
            >
            <input
              type="text"
              id="employee-id"
              name="employee-id"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="review-period" class="mb-2 block font-semibold"
              >Employee Name:</label
            >
            <input
              type="text"
              id="employee-name"
              name="employee-name"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="smart-goals" class="mb-2 block font-semibold"
              >SMART Goals:</label
            >
            <textarea
              id="smart-goals"
              name="smart-goals"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            ></textarea>

            <label for="goal-progress" class="mb-2 block font-semibold"
              >Goal Progress:</label
            >
            <input
              type="text"
              id="goal-progress"
              name="goal-progress"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="feedback" class="mb-2 block font-semibold"
              >Feedback:</label
            >
            <textarea
              id="feedback"
              name="feedback"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            ></textarea>

            <button
              type="submit"
              class="focus:shadow-outline submit-btn rounded px-4 py-2 font-bold text-human-resource-white focus:outline-none"
            >
              Submit
            </button>
          </form>
        </div>

        <div class="container">
          <h1
            class="m-8 py-8 text-center text-3xl font-bold text-human-resource-white"
          >
            Feedback
          </h1>
          <form class="mx-auto max-w-md rounded-lg bg-white p-6 shadow-md">
            <label for="review-period" class="mb-2 block font-semibold"
              >Employee ID:</label
            >
            <input
              type="text"
              id="employee-id"
              name="employee-id"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="review-period" class="mb-2 block font-semibold"
              >Employee Name:</label
            >
            <input
              type="text"
              id="employee-name"
              name="employee-name"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="performance-feedback" class="mb-2 block font-semibold"
              >Performance Feedback:</label
            >
            <textarea
              id="performance-feedback"
              name="performance-feedback"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            ></textarea>

            <button
              type="submit"
              class="focus:shadow-outline submit-btn rounded px-4 py-2 font-bold text-human-resource-white focus:outline-none"
            >
              Submit
            </button>
          </form>
        </div>

        <div class="container">
          <h1
            class="m-8 py-8 text-center text-3xl font-bold text-human-resource-white"
          >
            Improvement Plans
          </h1>
          <form class="mx-auto max-w-md rounded-lg bg-white p-6 shadow-md">
            <label for="review-period" class="mb-2 block font-semibold"
              >Employee ID:</label
            >
            <input
              type="text"
              id="employee-id"
              name="employee-id"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="review-period" class="mb-2 block font-semibold"
              >Employee Name:</label
            >
            <input
              type="text"
              id="employee-name"
              name="employee-name"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="improvement-goals" class="mb-2 block font-semibold"
              >Improvement Goals:</label
            >
            <textarea
              id="improvement-goals"
              name="improvement-goals"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-indigo-200"
            ></textarea>

            <label for="progress-tracking" class="mb-2 block font-semibold"
              >Progress Tracking:</label
            >
            <input
              type="text"
              id="progress-tracking"
              name="progress-tracking"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            />

            <label for="support-documentation" class="mb-2 block font-semibold"
              >Support Documentation:</label
            >
            <textarea
              id="support-documentation"
              name="support-documentation"
              class="mb-4 w-full rounded-lg border-gray-300 px-4 py-2 ring-2 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"
            ></textarea>

            <button
              type="submit"
              class="focus:shadow-outline submit-btn rounded px-4 py-2 font-bold text-human-resource-white focus:outline-none"
            >
              Submit
            </button>
          </form>
        </div>
      </section>
    </main>
    <!-- End of Content -->

    <?php include_once '../../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="perm.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
