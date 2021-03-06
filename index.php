<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CSRF Protection  by Synchronizer Token Pattern</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
  </head>
  <body>
  <style>

    body {

      background-image: url("one.jpg");
    }

  </style>
  <!-- navbar start -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">CSRF Protection</a>
      </div>
      <ul class="nav navbar-nav">
        <?php
          if (isset($_COOKIE['session_cookie'])) {
            echo "<li class='active'><a href='profile.php'>Profile</a></li>";
          }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if (!isset($_COOKIE['session_cookie'])) {
            echo "<li><a href='login.php'><span class='glyphicon glyphicons-log-in'></span> Login </a></li>";
          }
        ?><?php
          if (isset($_COOKIE['session_cookie'])) {
            echo "<li><a href='logout.php'><span class='glyphicon glyphicons-log-out'></span> Logout</a></li>";
          }
        ?>
      </ul>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- body content start -->
    <h1 align='center'> CSRF Protection by Synchronizer Token Pattern </h1>
    <br><h1 align="center"> IT16016026</h1>
  <!-- body content end -->
  </body>
</html>
