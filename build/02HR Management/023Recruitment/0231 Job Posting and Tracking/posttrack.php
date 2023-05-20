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
      <?php include_once '../../../../php/sidebar-and-search.php'; ?>

    <!-- Content -->
    <main class="m-4 text-human-resource-white">
      <section class="mb-8">
        <h2 class="mb-4 text-center text-xl font-bold">Job Posting</h2>
        <form
          id="jobPostingForm"
          class="mx-auto max-w-2xl rounded-lg bg-human-resource-white p-8 text-human-resource-blue"
        >
          <div class="mb-4">
            <label for="jobTitle" class="mb-2 block font-semibold"
              >Job Title</label
            >
            <input
              type="text"
              id="jobTitle"
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
              class="w-full rounded-md border border-gray-400 px-3 py-2"
            ></textarea>
          </div>

          <button type="submit" class="post-job">Post Job</button>
        </form>
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
            <tr class="border-b border-human-resource-white">
              <td class="job-title p-4 py-8 text-center">Software Engineer</td>
              <td class="px-4 py-2">Bachelor's degree in Computer Science</td>
              <td class="px-4 py-2">2+ years</td>
              <td class="px-4 py-2">P70,000.00 - P90,000.00</td>
            </tr>
            <!-- Additional rows for other job postings -->
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
            <li>Work Experience: Minimum 2 years</li>
            <li>Education: Bachelor's degree or equivalent</li>
            <li>Skills: Proficient in Java programming</li>
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
              <tr class="border-b border-human-resource-white">
                <td class="border px-4 py-2 text-center">1</td>
                <td class="border px-4 py-2 text-center">Enrique Sanchez</td>
                <td
                  class="status-approved border px-4 py-2 text-center font-bold text-green-500"
                >
                  Passed
                </td>
                <td
                  class="status-pending border px-4 py-2 text-center font-bold text-yellow-500"
                >
                  In Progress
                </td>
                <td class="border px-4 py-2 text-center text-gray-400">
                  Scheduled
                </td>
                <td
                  class="status-pending border px-4 py-2 text-center text-gray-400"
                >
                  Pending
                </td>
              </tr>
              <!-- Additional rows for other applicants -->
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
              <li>Enrique Sanchez</li>
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
