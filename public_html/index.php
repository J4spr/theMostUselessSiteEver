<?php
include '../includes/addpassword.inc.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/main.css" />
    <title>Index</title>
  </head>
  <body>
    <div class="container">
        <div class="content-wrapper">
          <form action="../includes/addpassword.inc.php" method="post">
            <div class="input-wrapper">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" />
            </div>
            <input type="submit" value="submit" />
            <a href="delete.php"></a>
          </form>
          <p>
            You have <em>10 seconds</em> to copy the hash before you will be
            redirected
          </p>
          <?php
          echo $_SESSION["vardump"]
          ?>
        </div>
        <div class="footer">
          <footer>
            <p>© 2023 - All rights reserved</p>
            <p>
              Created by:
              <a href="https://github.com/J4spr" target="blank">Jasper</a>
            </p>
          </footer>
        </div>
    </div>
  </body>
</html>
