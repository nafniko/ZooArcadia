<?php

require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/lib/session.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

?>
<form class="container col-3">
   
    <h1 class="h3 mb-3 fw-normal">creer un compte </h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

  </form>

  <?php
    require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>