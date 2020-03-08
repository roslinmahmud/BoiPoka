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
  <?php include 'include/header.php'?>
  <br>

  <div class="container" >

    <!--Start your coding here-->
     
    
    <div class="container border border-light" style="width: 500px;">
          <h1>Sign in</h1>
     
      <form method="post">
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" class="form-control text-lowercase"  id="username" aria-describedby="usernameText">
                <small id="usernameText" ></small>
            </div>
            <div  class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="password" aria-describedby="passwordText">
                <small id="passwordText" ></small>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
              
          </div>
      </form>
      
      </div>

  <!-- Loads the Footer-->
  <?php include 'include/footer.php'?>
</body>


<?php

    






?>

</html>
