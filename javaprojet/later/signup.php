<?php
     include_once 'header.php';
 ?>

<section >
<div>
<h2>Signup</h2>
<form action="includes/signupp.php" method="POST">
  <input type="text" name="first" placeholder="Firstname" />
  <input type="text" name="last" placeholder="Lastname" />
  <input type="text" name="email" placeholder="E-mail" />
  <input type="text" name="uid" placeholder="Username" />
  <input type="password" name="pwd" placeholder="password" />
  <button type="submit" name="submit">Sign up</button>
</form>
</div>
</section>

<?php
     include_once 'footer.php';
 ?>
