<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="grievance handling page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Grievance Handling</title>
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
      <?php include_once '../../../php/sidebar-and-search.php'; ?>

    <!-- Content -->
    <main class="m-4 text-human-resource-white">
      <section>
        <h2 class="mb-4 text-center text-9xl font-bold">SUBMIT A GRIEVANCE</h2>
        <form id="grievanceForm" class="m-auto flex flex-col space-y-4">
          <label for="employeeID" class="block font-bold">Employee ID</label>
          <input
            type="text"
            id="employeeID"
            required
            class="focus:ring-human-resource-blue-dark w-full rounded-md border px-3 py-2 text-human-resource-blue shadow-sm focus:border-transparent focus:outline-none focus:ring-2"
          />

          <label for="employeeName" class="block font-bold"
            >Employee Name</label
          >
          <input
            type="text"
            id="employeeName"
            required
            class="focus:ring-human-resource-blue-dark w-full rounded-md border px-3 py-2 text-human-resource-blue shadow-sm focus:border-transparent focus:outline-none focus:ring-2"
          />

          <label for="grievanceDate" class="block font-bold"
            >Date and Time of Grievance</label
          >
          <input
            type="datetime-local"
            id="grievanceDate"
            required
            class="focus:ring-human-resource-blue-dark w-full rounded-md border px-3 py-2 text-center text-human-resource-blue shadow-sm focus:border-transparent focus:outline-none focus:ring-2"
          />

          <label for="grievanceDescription" class="block font-bold"
            >Description of Grievance</label
          >
          <textarea
            id="grievanceDescription"
            required
            class="focus:ring-human-resource-blue-dark w-full rounded-md border px-3 py-2 text-human-resource-blue shadow-sm focus:border-transparent focus:outline-none focus:ring-2"
          ></textarea>

          <label for="supportingDocuments" class="block font-bold"
            >Supporting Documents</label
          >
          <input
            type="file"
            id="supportingDocuments"
            class="focus:ring-human-resource-blue-dark w-full rounded-md border px-3 py-2 text-human-resource-white shadow-sm focus:border-transparent focus:outline-none focus:ring-2"
          />

          <button
            type="submit"
            class="mx-auto max-w-sm rounded bg-human-resource-gray px-4 py-2 text-center font-bold text-human-resource-blue hover:bg-human-resource-white"
          >
            Submit Grievance
          </button>
        </form>
      </section>

      <section class="mt-8">
        <h2 class="mb-4 text-xl text-human-resource-white">Grievance Status</h2>
        <table id="grievanceStatus" class="w-full table-auto">
          <thead>
            <tr
              class="ring-human-resource-blue-dark rounded-xl bg-human-resource-white text-human-resource-blue"
            >
              <th class="w-1/6 p-3">Grievance ID</th>
              <th class="w-1/4 p-3">Employee Name</th>
              <th class="w-1/6 p-3">Status</th>
              <th class="w-1/4 p-3">Assigned To</th>
              <th class="w-1/4 p-3">Last Updated</th>
            </tr>
          </thead>
          <tbody>
            <tr
              class="ring-human-resource-blue-dark bg-gray-100 text-center text-human-resource-blue"
            >
              <td class="w-1/6 border p-3">GRV-001</td>
              <td class="w-1/4 border p-3">Joseph Santa-Maria</td>
              <td class="status-pending w-1/6 border p-3">Pending</td>
              <td class="w-1/4 border p-3">HR Manager</td>
              <td class="w-1/4 border p-3">5/11/2023 09:30 AM</td>
            </tr>
            <!-- Additional rows for other grievances -->
          </tbody>
        </table>
      </section>

      <section
        class="mt 5/11/2023, 1:05:21 PM continue 5/11/2023, 1:05:58 PM -8"
      >
        <h2 class="mb-4 mt-8 text-xl">Grievance Resolution</h2>
        <div id="grievanceResolution" class="space-y-4">
          <div
            class="rounded-lg bg-white p-4 text-human-resource-blue shadow-md"
          >
            <h3
              class="5/11/2023, 1:33:12 PM continue 5/11/2023, 1:33:38 PM text-lg font-bold"
            >
              GRV-001
            </h3>
            <p class="mb-2">
              <span class="font-bold">Status:</span>
              <span class="status-pending">Pending</span>
            </p>
            <p class="mb-2">
              <span class="font-bold">Assigned To:</span> HR Manager
            </p>
            <p class="mb-2">
              <span class="font-bold">Last Updated:</span> 5/11/2023 09:30 AM
            </p>
            <p class="mb-2">
              <span class="font-bold">Description:</span> Lorem ipsum dolor sit
              amet, consectetur adipiscing elit. Ut aliquet gravida lectus, et
              consectetur tellus euismod id.
            </p>
            <p class="mb-2">
              <span class="font-bold">Investigation Findings:</span> Lorem ipsum
              dolor sit amet, consectetur adipiscing elit. Nulla in neque sit
              amet eros congue auctor.
            </p>
            <p class="mb-2">
              <span class="font-bold">Actions Taken:</span> Lorem ipsum dolor
              sit amet, consectetur adipiscing elit. Sed et lacus ut felis
              congue consectetur.
            </p>
            <!-- Additional details for other grievances -->
          </div>
        </div>
      </section>
    </main>
    <!-- End of Content -->

    <?php include_once '../../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="grief.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
