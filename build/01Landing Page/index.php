<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="landing page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Human Resource System</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="index.css" />
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
    <!-- Navigation Bar -->
    <nav>
      <div class="menu">
        <i class="bx bx-menu"></i>
      </div>
      <div class="logo-itself">
        <a href="index.php">
          <img src="/build/00Image/hrm-logo.png" alt="logo" class="hrm-logo" />
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
          <a href="/build/06Analytics/report.php">Analytics</a>
        </li>
      </ul>
      <form action="../../php/includes/employee.inc.php" method="post">        
        <?php include_once '../../php/sidebar-and-search.php'; ?>
    
    <!-- Compose Email Button -->
    <button class="compose-btn" onclick="openComposeEmail()"><i class="fas fa-pen"></i> Compose</button>

    <!-- Modal for Composing Email -->
    <div id="emailModal" class="email-modal">
      <div class="email-modal-content">
        <span class="close" onclick="closeEmailModal()">&times;</span>
        <h2>Compose Email</h2>
        <form action="send_email.php" method="POST" id="emailForm">
          <label for="to">Recipient:</label>
          <input type="email" id="to" name="to" required />

          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required />

          <label for="body">Message:</label>
          <textarea id="body" name="body" rows="6" required></textarea>

          <button type="submit">Send Email</button>
        </form>
      </div>
    </div>

    <!-- Content -->
    <header>
      <video class="video-container" muted autoplay loop>
        <source src="../00Image/stock_footage.mp4" type="video/mp4" />
      </video>
    </header>
    <!-- End of Content -->

    

    <?php include_once '../../php/footer.php'; ?>

    <!-- JavaScript -->
    <!-- Compose Email Tab -->
    <script>
      /*function openComposeEmail() {
        window.open('compose_email.php', '_blank', 'width=600,height=600');
      }*/
      // Open Compose Email Modal
      function openComposeEmail() {
        document.getElementById('emailModal').style.display = 'block';
      }

      // Close Compose Email Modal
      function closeEmailModal() {
        document.getElementById('emailModal').style.display = 'none';
      }

      // Close the modal if clicked outside of the modal content
      window.onclick = function(event) {
        if (event.target == document.getElementById('emailModal')) {
          closeEmailModal();
        }
      };
    </script>

    <script src="index.js"></script>
    <script src="/build/js/bars.js"></script>
  </body>
</html>
