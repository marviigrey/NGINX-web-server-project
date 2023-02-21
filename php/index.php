<!DOCTYPE html>
<html>
  <head>
    <title>My Dynamic Web Page</title>
  </head>
  <body>
    <h1>Welcome to My Dynamic Web Page</h1>
    <?php
      // This is a PHP code block that generates dynamic content
      $username = "John";
      $greeting = "Hello, $username!";

      echo "<p>$greeting</p>";

      $current_time = date("H:i:s");
      echo "<p>The current time is $current_time</p>";
    ?>
  </body>
</html>

