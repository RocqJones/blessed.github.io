<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>BT Admin</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Here is the header where I decided to include the login form for this tutorial. -->
    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <img src="img/logo.jpg" alt="Blessed Tents logo">
        </a>
        <!-- <ul>
          <li><a href="index.php">Admin Page</a></li>
        </ul> -->
      </nav>
      <div class="header-login">
        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button id="logout-btn" type="submit" name="logout-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>
