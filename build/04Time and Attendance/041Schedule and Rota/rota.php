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
    <link href="rota.css" rel="stylesheet" />
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
      <form action="../../../php/includes/employee.inc.php" method="post">  
      <?php 
        include_once '../../../php/sidebar-and-search.php'; 
        require_once '../../../php/includes/dbconn.inc.php';
        require_once '../../../php/includes/functions.inc.php';
      ?>

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
<!--------------------------------------------------------------------------------------------------------------------------------->
            <?php
              displayShiftRotation($connection);
            ?>
<!--------------------------------------------------------------------------------------------------------------------------------->            
          </tbody>
        </table>
        <table id="shiftAssignments" class="w-full border-collapse">
          <!-- Shift assignment data goes here -->    
        </table>
<!---------------------------------------------------------------------------------------------------------------------------------> 
      <div class="form-container">
        <div class="f-l form-wrapper">        
          <h3 class="mb-2 text-lg font-semibold">Employee Shift Assignment</h3>
          <form
            id="createShiftAssignmentForm" action="../../../php/includes/rota.inc.php" method="post"
            class="mx-auto w-full max-w-md rounded-xl bg-human-resource-white p-4"
          >
            <div class="mb-4">
              <label
                for="employeeID"
                class="mb-2 block font-semibold text-human-resource-blue"
                >Employee ID:</label
              >
              <input
                type="text"
                id="employeeName"
                name="employeeID"
                required
                class="w-full rounded border border-gray-300 px-3 py-2 text-center focus:border-indigo-500 focus:outline-none"
              />
            </div>
            <div class="mb-4">
              <label
                  for="shiftName"
                  class="mb-2 block font-semibold text-human-resource-blue"
                  >Shift name:</label
                >
              <select onchange="updateTextBox(this)" name="shiftID" 
                class="align-self-center rounded-md border border-gray-400 px-4 py-2 text-human-resource-blue">
                <?php
                  shiftOptions($connection);
                ?>
              </select>
            </div>
            <button
              type="submit" name="submit-assign"
              class="rounded bg-human-resource-blue px-4 py-2 font-semibold text-white hover:bg-indigo-700"
            >
              Request
            </button>
          </form>
        </div><br>
<!--------------------------------------------------------------------------------------------------------------------------------->
        <div class="f-l form-wrapper"> 
          <h3 class="mb-2 text-lg font-semibold">Create Shift Assignment</h3>
          <form
            id="createShiftAssignmentForm" action="../../../php/includes/rota.inc.php" method="post"
            class="mx-auto w-full max-w-md rounded-xl bg-human-resource-white p-4"
          >

            <div class="mb-4">
              <label
                for="shiftName"
                class="mb-2 block font-semibold text-human-resource-blue"
                >Shift Name:</label
              >
              <input
                type="text"
                id="shiftName"
                name="shiftName"
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
                for="shiftDays"
                class="mb-2 block font-semibold text-human-resource-blue"
                >Shift Days:</label
              >
              <textarea
                id="shiftNotes"
                name="shiftDays"
                required
                class="w-full rounded border border-gray-300 px-3 py-2 text-center focus:border-indigo-500 focus:outline-none"
              ></textarea>
            </div>

            <button
              type="submit" name="submit-shift"
              class="rounded bg-human-resource-blue px-4 py-2 font-semibold text-white hover:bg-indigo-700"
            >
              Create
            </button>
          </form>
        </div>  
      </div>      
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
<!--------------------------------------------------------------------------------------------------------------------------------->
            <?php
               displayShiftRequest($connection);   
            ?>
<!--------------------------------------------------------------------------------------------------------------------------------->          
          </tbody>
        </table>
      </section>
    </main>
    <!-- End of Content -->

    <?php include_once '../../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="/node_modules/fullcalendar/index.global.js"></script>
    <script src="rota.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
