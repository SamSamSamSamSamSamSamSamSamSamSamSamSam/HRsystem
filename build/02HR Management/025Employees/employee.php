<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="employee tracking page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Employees</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="/build/css/static.css" />
    <link rel="stylesheet" href="/build/css/style.css" />
    <link rel="stylesheet" href="employee.css" />
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

    <!-- Content -->
    <main class="text-human-resource-white">
<!---------------------------------------------------------------------------------------------------------------------->         
    <form action="" method="post"> 
      <div
        class="mx-auto mb-8 mt-8 flex max-w-sm items-center justify-center gap-3"
      >
        <input
          type="text"
          id="search-bar"
          name="search-record"
          placeholder="Search..."
          class="flex-grow rounded-md border border-gray-400 px-4 py-2 text-human-resource-blue"
        />
        <select
          id="filter"
          name="search-selection"
          class="align-self-center rounded-md border border-gray-400 px-4 py-2 text-human-resource-blue"
        >
          <option value="all">All</option>
          <option value="department">Department</option>
          <option value="position">Position</option>
        </select>
      </div>
    </form>
<!---------------------------------------------------------------------------------------------------------------------->         
      <table
        id="employeeTable"
        class="my-2 hidden w-screen border-collapse md:table"
      >
        <thead>
          <tr
            class="rounded-tr-lg bg-human-resource-white text-base text-human-resource-blue"
          >
            <th class="py-3 text-center">Employee ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Position</th>
            <th class="text-center">Department</th>
            <th class="text-center">Contact Details</th>
            <th class="text-center">Status</th>
            <th class="text-center">Employment Details</th>
          </tr>
        </thead>
        <tbody>
          <!-- Employee list data goes here -->
<!---------------------------------------------------------------------------------------------------------------------->  
<?php


?>    
<!---------------------------------------------------------------------------------------------------------------------->           
          <tr class="border-b border-human-resource-white">
            <td class="text-center">123456</td>
            <td class="py-16 text-center">
              <a
                href="/build/02HR Management/025Employees/employeeInfo.php?EID="
                class="employeeDetailsLink font-medium text-blue-600 hover:text-blue-800"
                >Dean Cabangon</a
              >
            </td>
            <td class="text-center">Software Developer</td>
            <td class="text-center">IT</td>
            <td class="text-center">cabangondean@example.com</td>
            <td class="status-approved text-center">Active</td>
            <td class="text-center">
              Hire Date: 4/2/2020<br />Contract Type: Full-time<br />Working
              Hours: 40
            </td>
          </tr>
<!---------------------------------------------------------------------------------------------------------------------->               
        </tbody>
      </table>

      <!-- For Small Screens -->
      <h3 class="mb-4 text-center text-lg font-bold md:hidden">
        Employee Details
      </h3>

      <div id="employeeDetailsContainer" class="grid grid-cols-2 gap-4">
        <!-- Employee details content goes here -->

        <!-- Dean Cabangon -->
        <div
          class="mx-auto my-8 w-80 max-w-2xl rounded-md bg-human-resource-white p-4 text-human-resource-blue shadow md:hidden"
        >
          <p><strong>Name:</strong> Dean Cabangon</p>
          <p><strong>Employee ID:</strong> 123456</p>
          <p><strong>Position:</strong> Software Developer</p>
          <p><strong>Department:</strong> IT</p>
          <p><strong>Contact Details:</strong> cabangondean@example.com</p>
          <p>
            <strong>Status:</strong><span class="status-approved"> Active</span>
          </p>
          <p>
            <strong>Employment Details:</strong> Hire Date: 4/2/2020<br />Contract
            Type: Full-time<br />Working Hours: 40
          </p>
        </div>
        <!-- Additional employee information -->

        <!-- Lazaro Cayabyab -->
        <div
          class="mx-auto my-8 w-80 max-w-2xl rounded-md bg-human-resource-white p-4 text-human-resource-blue shadow md:hidden"
        >
          <p><strong>Name:</strong> Lazaro Cayabyab</p>
          <p><strong>Employee ID:</strong> 123457</p>
          <p><strong>Position:</strong> Junior Software Engineer</p>
          <p><strong>Department:</strong> IT</p>
          <p><strong>Contact Details:</strong> lazarocayabyab@example.com</p>
          <p>
            <strong>Status:</strong><span class="status-approved"> Active</span>
          </p>
          <p>
            <strong>Employment Details:</strong> Hire Date: 1/1/2023<br />Contract
            Type: Full-time<br />Working Hours: 40
          </p>
        </div>
        <!-- Additional employee information -->

        <!-- Iyana Paz Sison -->
        <div
          class="mx-auto my-8 w-80 max-w-2xl rounded-md bg-human-resource-white p-4 text-human-resource-blue shadow md:hidden"
        >
          <p><strong>Name:</strong> Iyana Paz Sison</p>
          <p><strong>Employee ID:</strong> 123458</p>
          <p><strong>Position:</strong> Network Engineer</p>
          <p><strong>Department:</strong> IT</p>
          <p><strong>Contact Details:</strong> iyanpaz@example.com</p>
          <p>
            <strong>Status:</strong
            ><span class="status-pending"> On Leave</span>
          </p>
          <p>
            <strong>Employment Details:</strong> Hire Date: 6/3/2016<br />Contract
            Type: Full-time<br />Working Hours: 40
          </p>
        </div>
        <!-- Additional employee information -->

        <!-- Guy Malano -->
        <div
          class="mx-auto my-8 w-80 max-w-2xl rounded-md bg-human-resource-white p-4 text-human-resource-blue shadow md:hidden"
        >
          <p><strong>Name:</strong> Guy Malano</p>
          <p><strong>Employee ID:</strong> 123459</p>
          <p><strong>Position:</strong> Senior Software Engineer</p>
          <p><strong>Department:</strong> IT</p>
          <p><strong>Contact Details:</strong> malano@example.com</p>
          <p>
            <strong>Status:</strong><span class="status-approved"> Active</span>
          </p>
          <p>
            <strong>Employment Details:</strong> Hire Date: 5/8/2012<br />Contract
            Type: Full-time<br />Working Hours: 40
          </p>
        </div>
        <!-- Additional employee information -->
      </div>

      <h2 class="mt-8 text-center text-xl font-bold">Department Information</h2>

      <div
        class="mx-auto max-w-2xl rounded-md bg-human-resource-white p-4 text-human-resource-blue"
      >
        <ul class="list-disc">
          <li><span class="font-bold">Department Name: </span>IT Team</li>
          <li><span class="font-bold">Department Leader: </span>Guy Malano</li>
          <li>
            <span class="font-bold">Department Members: </span>
            Lazaro Cayabyab, Dean Cabangon, Iyana Paz Sison
          </li>
        </ul>
      </div>

      <!-- This will be seen in the individual's profile instead... -->
      <h2 class="mt-8 text-center text-xl font-bold">
        Employee Documents and Files
      </h2>
      <ul class="mx-auto my-8 w-80 list-inside list-disc">
        <li>
          <a href="#" class="text-blue-600 hover:text-orange-300">- Contract</a>
        </li>
        <li>
          <a href="#" class="text-blue-600 hover:text-blue-800"
            >- Performance Evaluation</a
          >
        </li>
        <li>
          <a href="#" class="text-blue-600 hover:text-blue-800"
            >- Training Records</a
          >
        </li>
        <!-- additional list items for other employee files -->
      </ul>

      <h2 class="mt-8 text-center text-xl font-bold">Employee Actions</h2>

      <!-- This button will make all of those who requested to leave to be approved -->
      <div class="mx-auto mt-8 flex max-w-2xl gap-4">
        <button
          class="employee-actions m-4 rounded-md bg-human-resource-white px-4 py-2 font-bold text-human-resource-blue"
        >
          Initiate Leave Request
        </button>

        <!-- This button will check all of those who has the employee benefits -->
        <button
          class="employee-actions m-4 rounded-md bg-human-resource-white px-4 py-2 font-bold text-human-resource-blue"
        >
          Manage Employee Benefits
        </button>

        <!-- When this button is clicked, it will be then asked whose user should be updated. Only those who have searched will appear here -->
        <button
          class="employee-actions m-4 rounded-md bg-human-resource-white px-4 py-2 font-bold text-human-resource-blue"
        >
          Update Employee Information
        </button>

        <!-- This will update the Analytics tab in accordance to the employees -->
        <button
          class="employee-actions m-4 rounded-md bg-human-resource-white px-4 py-2 font-bold text-human-resource-blue"
        >
          Generate Reports
        </button>
      </div>
    </main>
    <!-- End of Content -->

    <?php include_once '../../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="employee.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
