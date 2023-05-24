<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="login page" />
    <meta name="author" content="Guzon Japeth, Llaguno Kyle, Pacaldo Sam" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="4680" />
    <title>Human Resource System</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/build/00Image/favicon.ico" />
    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="login.css" />
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
    <!-- Header -->
    <header>
      <div class="logo-itself">
        <a href="#logo">
          <img src="../00Image/hrm-logo.png" alt="logo" class="hrm-logo" />
        </a>
      </div>
      <div class="sign-text">Sign in to Human Resource Systems</div>
    </header>
    <!-- End of Header -->

    <!-- Content -->
    <main>
      <!-- SIGN - IN -->
      <div class="wrapper-sign-in">
<!---------------------------------------------------------------------------------------------------------------------->
        <form action="/php/includes/login.inc.php" method="post">
          <!-- Username -->
          <div class="user-name">
            <label for="username">Username or email address</label>
            <input
              type="text"
              name="login-email"
              id="username"
              placeholder="usename123@gmail.com"
              class="input-style"
            />
          </div>
          <!-- Password -->
          <div class="password">
            <div class="password-wrapper">
              <label for="password">Password</label>
              <a href="#forgot" aria-label="Reset your password"
                >Forgot password?</a
              >
            </div>
            <input
              type="password"
              name="login-pass"
              id="password"
              placeholder=""
              class="input-style"
            />
          </div>
          <!-- Submit -->
          <div class="submit-sign">
            <button type="submit" name="submit">Sign in</button>
          </div>
        </form>
<!---------------------------------------------------------------------------------------------------------------------->   
<?php
  // Error Handling:
  if (isset($_GET["error"])) {
    switch ($_GET["error"]) {
      case "emptyinput":
        echo "<br><p class='error-msg'>Please enter username and password!</p>";
        break;
      case "dbisempty":
        echo "<br><p class='error-msg'>Table currently has no data!</p>";
        break;
      case "dbconnfailed":
        echo "<br><p class='error-msg'>Error: Database query failed!</p>";
        break;
      case "usernotfound":
        echo "<br><p class='error-msg'>Account is not registered!</p>";
        break;
      case "wrongpass":
        echo "<br><p class='error-msg'>Incorrect password!</p>";
        break;
      default:
        break;
    }
  }
?>
<!---------------------------------------------------------------------------------------------------------------------->       
      </div>
    </main>
    <!-- End of Content -->

    <!-- JavaScript -->
    <script src="login.js"></script>
  </body>
</html>
