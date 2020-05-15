<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login - BoiPoka | Book Sharing Platform</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png" >
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="favicon.ico" type="image/png" sizes="16x16">
</head>

<body>
  <!-- Loads the Header-->
  <?php include '../include/header.php'?>
  <?php include '../include/login-validate.php'?>

  <div class="container" >
    
    <div class="container border border-light" style="width: 500px; margin-top: 10px;">
          <h3>Sign In</h3>
          <hr>
      <form method="post">
            <?php
              print $authenticationError;
            ?>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control text-lowercase <?php print $usernameValidity;?>" value="<?php print $username?>" name="username" id="username" placeholder="username" aria-describedby="usernameText" required>
              <small id="nameText" class="invalid-feedback"><?php print $usernameErr;?></small>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control <?php print $passwordValidity;?>" value="<?php print $password?>" name="password" id="password" placeholder="********" aria-describedby="passwordText" required>
              <small id="nameText" class="invalid-feedback"><?php print $passwordErr;?></small>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="form-group">
              <span>Don't have an account? <a href="register.php">Register</a></span>
            </div>
          </div>
      </form>
      
      </div>

  <!-- Loads the Footer-->
  <?php include '../include/footer.php'?>
</body>


<?php

    






?>

</html>
