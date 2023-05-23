<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="job posting and applicant tracking page"
    />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Job Posting and Applicant Tracking</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="/build/css/static.css" />
    <link rel="stylesheet" href="/build/css/style.css" />
    <link rel="stylesheet" href="posttrack.css" />
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
      <form action="../../../../php/includes/employee.inc.php" method="post">  
      <?php 
        include_once '../../../../php/sidebar-and-search.php'; 
        require_once '../../../../php/includes/dbconn.inc.php';
      ?>

    <!-- Content -->
    <main class="m-4 text-human-resource-white">
      <section class="mb-8">
        <h2 class="mb-4 text-center text-xl font-bold">Job Posting</h2>
<!----------------[ FORM JOB POST ]------------------------------------------------------------------------------------------------------->        
        <form
          id="jobPostingForm" action="../../../../php/includes/posttrack.inc.php" method="post" 
          class="mx-auto max-w-2xl rounded-lg bg-human-resource-white p-8 text-human-resource-blue"
        >
          <div class="mb-4">
            <label for="jobTitle" class="mb-2 block font-semibold"
              >Job Title</label
            >
            <input
              type="text"
              id="jobTitle"
              name="job-name"
              required
              class="w-full rounded-md border border-gray-400 px-3 py-2"
            />
          </div>

          <div class="mb-4">
            <label for="jobDescription" class="mb-2 block font-semibold"
              >Job Description</label
            >
            <textarea
              id="jobDescription"
              name="job-desc"
              required
              class="w-full rounded-md border border-gray-400 px-3 py-2"
            ></textarea>
          </div>

          <div class="mb-4">
            <label for="qualifications" class="mb-2 block font-semibold"
              >Qualifications</label
            >
            <textarea
              id="qualifications"
              name="quals"
              required
              class="w-full rounded-md border border-gray-400 px-3 py-2"
            ></textarea>
          </div>

          <div class="mb-4">
            <label for="experience" class="mb-2 block font-semibold"
              >Experience Requirements</label
            >
            <input
              type="text"
              id="experience"
              name="exp"
              required
              class="w-full rounded-md border border-gray-400 px-3 py-2"
            />
          </div>

          <div class="mb-4">
            <label for="salaryRange" class="mb-2 block font-semibold"
              >Salary Range</label
            >
            <input
              type="text"
              id="salaryRange"
              name="sal-range"
              required
              class="w-full rounded-md border border-gray-400 px-3 py-2"
            />
          </div>

          <div class="mb-4">
            <label for="otherDetails" class="mb-2 block font-semibold"
              >Other Details</label
            >
            <textarea
              id="otherDetails"
              name="others"
              class="w-full rounded-md border border-gray-400 px-3 py-2"
            ></textarea>
          </div>

          <button type="submit" class="post-job" name="submit-post">Post Job</button>
        </form>
<!------------------------------------------------------------------------------------------------------------------------------> 
<?php

  function displayJobPost ($connection) {
    $sql = "SELECT * FROM job_postings LEFT JOIN jobs ON job_postings.jp_jobID = jobs.jobID;";
    $result = mysqli_query($connection, $sql);
      if (!$result) {
        exit();
      }
      // checks if their are records in the job postings
      if (mysqli_num_rows($result) > 0) {
        // display all job postings
        while ($row = mysqli_fetch_assoc($result)) {
          echo "
            <tr class='border-b border-human-resource-white'>
              <td class='job-title p-4 py-8 text-center'>". $row["jobTitle"] ."</td>
              <td class='px-4 py-2'>". $row["qualDesc"] ."</td>
              <td class='px-4 py-2'>". $row["expReq"] ."</td>
              <td class='px-4 py-2'>". $row["salRange"] ."</td>
            </tr>
          ";
        }
      }
  }

  function displayJobPost_otherdetails ($connection) {
    $sql = "SELECT * FROM job_postings LEFT JOIN jobs ON job_postings.jp_jobID = jobs.jobID;";
    $result = mysqli_query($connection, $sql);
      if (!$result) {
        exit();
      }
      // checks in there are job postings
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "
            <li>(". $row["jobTitle"] .")</li>
            ". $row["otherDesc"] ."
            <br><br>
          ";
        }
      }
  }

  function displayApplicant_progress($connection) {
    $sql = "SELECT applicants.appID, applicants.name, application_progress.resumeScr, application_progress.phoneScr, application_progress.refCheck, interview_scheds.ivwSts 
            FROM `application_progress` 
            INNER JOIN applicants ON application_progress.prog_appID = applicants.appID
            INNER JOIN interview_scheds ON application_progress.prog_ivwID = interview_scheds.ivwID;
            ";
    $result = mysqli_query($connection, $sql);
      if (!$result) {
        exit();
      }
      // checks in there are job postings
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "
            <tr class='border-b border-human-resource-white'>
              <td class='border px-4 py-2 text-center'>". $row["appID"] ."</td>
              <td class='border px-4 py-2 text-center'>". $row["name"] ."</td>
              <td
                class=' border px-4 py-2 text-center text-green-500'
              >
                ". $row["resumeScr"] ."
              </td>
              <td
                class=' border px-4 py-2 text-center text-yellow-500'
              >
                ". $row["phoneScr"] ."
              </td>
              <td class='border px-4 py-2 text-center text-gray-400'>
                ". $row["ivwSts"] ."
              </td>
              <td
                class=' border px-4 py-2 text-center text-gray-400'
              >
                ". $row["refCheck"] ."
              </td>
            </tr>
          ";
        }
      }
  }

  function displayApplicant_shortlisted ($connection) {
    $sql = "SELECT applicants.appID, applicants.name, application_progress.shortListed  
            FROM `application_progress` 
            INNER JOIN applicants ON application_progress.prog_appID = applicants.appID
            ";
    $result = mysqli_query($connection, $sql);
      if (!$result) {
        exit();
      }
      // checks in there are job postings
      if (mysqli_num_rows($result) > 0) {
        $slCount = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          // checks if applicant is shortlisted
          if ($row["shortListed"]==1) {
            echo "
              <li>". $row["name"] ."</li><br>
            ";
            $slCount++;
          }
        }

        if ($slCount==0) {
          echo "
              <li>no applicant shortlisted</li>
          ";
        }

      }
  }
?> 
<!------------------------------------------------------------------------------------------------------------------------------>       
      </section>

      <section style="position: relative">
        <h2 class="mb-4 text-center text-xl font-bold">Current Postings</h2>



        <table
          id="jobPostings"
          class="mx-auto rounded-md border border-gray-300"
        >
          <thead class="bg-gray-200">
            <tr
              class="rounded-tr-lg bg-human-resource-white text-base text-human-resource-blue"
            >
              <th class="p-4 py-3 text-center">Job Title</th>
              <th class="text-center">Qualifications</th>
              <th class="text-center">Experience</th>
              <th class="text-center">Salary Range</th>
            </tr>
          </thead>
          <tbody>
<!------------------------------------------------------------------------------------------------------------------------------>                
 <?php
      displayJobPost($connection);
 ?>           
<!------------------------------------------------------------------------------------------------------------------------------>                
          </tbody>
        </table>

        <div
          id="resumeScreeningCriteriaPopup"
          class="criteria-popup m-4 mx-auto rounded-lg bg-white p-4 shadow"
        >
          <!-- This is where the other details come in -->
          <ul
            id="resumeScreeningCriteria"
            class="list-inside list-disc text-human-resource-blue"
          >
<!------------------------------------------------------------------------------------------------------------------------------>                
<?php
      displayJobPost_otherdetails($connection);
 ?>           
<!------------------------------------------------------------------------------------------------------------------------------>              
          </ul>
        </div>
      </section>

      <section class="px-4 py-6">
        <h2 class="mb-4 text-center text-xl font-semibold">
          Applicant Tracking
        </h2>
        <div class="overflow-x-auto">
          <table class="mx-auto w-full table-auto border">
            <thead>
              <tr
                class="rounded-tr-lg bg-human-resource-white text-base text-human-resource-blue"
              >
                <th class="px-4 py-2 text-center">#</th>
                <th class="px-4 py-2 text-center">Applicant Name</th>
                <th class="px-4 py-2 text-center">Resume Screening</th>
                <th class="px-4 py-2 text-center">Phone Screen</th>
                <th class="px-4 py-2 text-center">Interview</th>
                <th class="px-4 py-2 text-center">Reference Check</th>
              </tr>
            </thead>
            <tbody>
<!------------------------------------------------------------------------------------------------------------------------------>                 
<?php
      displayApplicant_progress($connection);
?>              
<!------------------------------------------------------------------------------------------------------------------------------>    
            </tbody>
          </table>
        </div>
      </section>

      <section class="px-4 py-6">
        <h2 class="mb-4 text-center text-xl font-semibold">
          Screening and Shortlisting
        </h2>
        <div
          id="screeningAndShortlisting"
          class="grid grid-cols-1 gap-4 md:grid-cols-2"
        >
          <div
            class="min-h-screen rounded-lg bg-white p-4 text-human-resource-blue shadow"
          >
            <h3 class="mb-2 text-lg font-semibold">Shortlisted Candidates</h3>
            <ul id="shortlistedCandidates" class="list-inside list-disc">
<!------------------------------------------------------------------------------------------------------------------------------>                 
<?php
      displayApplicant_shortlisted($connection);
?>              
<!------------------------------------------------------------------------------------------------------------------------------> 
            </ul>
          </div>
        </div>
      </section>
    </main>
    <!-- End of Content -->

    <?php include_once '../../../../php/footer.php'; ?>
    <!-- JavaScript -->
    <script src="/build/js/bars.js"></script>
    <script src="posttrack.js"></script>
  </body>
</html>
