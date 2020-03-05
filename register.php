<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Register - BoiPoka | Book Sharing Platform</title>
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

  <div class="container border border-light" style="width: 500px;">
    <form>
      <h3>Register</h3>
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameText">
        <small id="nameText" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailText">
        <small id="emailText" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="usernameText">
        <small id="usernameText" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="number">Mobile Number</label>
        <input type="tel" class="form-control" id="number" aria-describedby="numberText">
        <small id="numberText" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" aria-describedby="addressText">
        <small id="addressText" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" aria-describedby="passwordText">
        <small id="passwordText" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="cpassword">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" aria-describedby="cpasswordText">
        <small id="cpasswordText" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
  </div>

  <!-- Loads the Footer-->
  <?php include 'include/footer.php'?>
</body>

</html>
