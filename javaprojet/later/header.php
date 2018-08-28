<?php

session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section >
      <div>
        <li><a href="index.php" >Home</a></li>
        <form action="includes/login.php" method="POST">
          <input type="text" name="uid" placeholder="Username/e-mail" />
          <input type="text" name="pwd" placeholder="password" />
          
          <button type="submit" name="submit">Login</button>
        </form>
      </div>
    </section>

  </body>
</html>

<?php
     include_once 'footer.php';
 ?>
