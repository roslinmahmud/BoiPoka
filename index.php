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
    <?php include 'include/header.php' ?>

    <!-- Import getBookData() function -->
    <?php include 'controllers/index-control.php' ?>

    <div class="container">
<?php
    $result = getBookData();
    if ($result->num_rows > 0) {
        print '<div class="row border" style="margin: 10px;">';
        while($data = $result->fetch_assoc()){
        print'
            <div class="col">
              <div class="card" style="width: 192px; margin: 2px;">
                  <img src="/BoiPoka/img/book/'.$data['BookImage'].'" class="card-img-top" alt="..." height="160px" width="160px">
                  <div class="card-body">
                  <h6 class="card-title">'.$data['BookName'].'</h6>
                  <p class="card-text">'.$data['AuthorName'].'</p>
                  <a href="book.php?id='. $data['BookID'].'" class="btn btn-primary">View Details</a>
                  </div>
              </div>
            </div>
        ';
        }
        print "</div>";
    }
?>
    </div>

    <!-- Loads the Footer-->
    <?php include 'include/footer.php'?>
  </body>

</html>
