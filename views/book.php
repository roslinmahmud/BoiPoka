<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>BoiPoka | Book Sharing Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png" >
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico" type="image/png" sizes="16x16">
  </head>

  <body>
    <!-- Loads the Header-->
    <?php include '../include/header.php' ?>

    <!-- Import getBookData() function -->
    <?php include '../controllers/book-control.php' ?>
    <div class="container">
<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $bookid = $_REQUEST['id'];
        $result = getBookData($bookid);
        
        if ($result->num_rows > 0) {
            print '<div class="row jumbotron" style="margin: 10px;">';
            while($data = $result->fetch_assoc()){
              $user = getUser($data['ID']);
              $user = $user->fetch_assoc();
            print'
                <div class="col-4">
                    <div class="border border-info" style="padding: 10px;">
                        <img src="/BoiPoka/img/book/'.$data['BookImage'].'" class="img-thumbnail mx-auto d-block" alt="..." width="192px" height="164px">
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-body">
                        <h4 class="">'.$data['BookName'].'</h4>
                        <h6 class="lead"><b>By:</b> '.$data['AuthorName'].'</h6>
                        <h6 class="lead"><b>Category:</b> '.$data['Category'].'</h6>
                        <h6 class="lead"><b>Price:</b> TK. '.$data['Price'].'</h6>
                        <br>
                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                              Get this book
                            </button>
                        </p>  
                    </div>
                </div>
                </div>
            ';
            }
            print "</div>";
        }
    }
    
?>
    </div>

    <div class="container">
      <div class="collapse" id="collapseExample">
        <div class="jumbotron" style="margin: 10px;">
          <h3>Contact Seller</h3>
          <hr class="my-4">
          <h6 class="lead"><b>Name:</b> <?php print $user['name'] ?></h6>
          <h6 class="lead"><b>Email:</b> <?php print $user['email'] ?></h6>
          <h6 class="lead"><b>Mobile:</b> <?php print $user['number'] ?></h6>
          <h6 class="lead"><b>Address:</b> <?php print $user['address'] ?></h6>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="border border-light bg-light" style="margin: 10px; padding: 10px;">
        <h3>Reviews</h3>
        <hr>
<?php
  if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    print '
        <div class="form-group">
          <label for="review">Write your review</label>
          <textarea onkeyup="validate()" class="form-control" id="review" placeholder="Please write your honest opinion"></textarea>
          <div class="invalid-feedback">
            Please enter a review.
          </div>
        </div>
        <div class="form-group">
          <button onclick='."'".'submit("'.$bookid.'","'.$name.'")'."'".' class="btn btn-primary">Submit</button>
        </div>
    ';
  }
  else{
    print '
    <div class="alert alert-danger" role="alert">
      Please login to submit review.
    </div>
    ';
  }

  $result = getReviews($bookid);
  print '<ul id="reviews" class="list-group">';
  if ($result->num_rows > 0) {
      while($data = $result->fetch_assoc()){
        $user = getUserName($data['ID']);
        $user = $user->fetch_assoc();
        print'
          <li class="list-group-item">
            <h6>'.$user['name'].'</h6>
            <p>'.$data['Review'].'</p>
          </li>
        ';
      }
  }
  print "</ul>";
?>
      </div>
    </div>

    <!-- Javascript validation -->
    <script src="js/review-validate.js"></script>
    <!-- Loads the Footer-->
    <?php include '../include/footer.php'?>
  </body>

</html>
