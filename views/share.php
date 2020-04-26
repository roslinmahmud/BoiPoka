<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Share Book - BoiPoka | Book Sharing Platform</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png" >
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="favicon.ico" type="image/png" sizes="16x16">
</head>

<body>
  <!-- Loads the Header -->
  <?php include '../include/header.php'?>
  
  <!-- Loads the share-validate -->
  <?php include '../include/share-validate.php'?>

  <div class="container border border-light" style="width: 600px; margin-top: 10px;">
    <form method="POST" enctype="multipart/form-data">
      <h3>Share Book</h3>
      <?php
        print $shareStatus;
      ?>
      <table class="table table-sm table-borderless">

        <tr>
          <td rowspan="2">
            <img src="<?php print $upload_image ?>" id="preview" alt="..." class="img-thumbnail img-fluid" height="150px" width="200px">
          </td>
          <td style="width: 350px;">
            <div class="form-group">
              <label for="name">Book Name</label>
              <input type="text" class="form-control text-capitalize <?php print $booknameValidity;?>" value="<?php print $bookname?>" name="bookname" id="bookname" placeholder="Book Name" aria-describedby="booknameText" required>
              <small id="booknameText" class="invalid-feedback"><?php print $booknameErr;?></small>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="form-group">
              <label for="name">Author Name</label>
              <input type="text" class="form-control text-capitalize <?php print $authornameValidity;?>" value="<?php print $authorname?>" name="authorname" id="authorname" placeholder="Author Name" aria-describedby="authornameText" required>
              <small id="authornameText" class="invalid-feedback"><?php print $authornameErr;?></small>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="input-group" style="width: 205px;">
              <div class="custom-file">
                <input oninput="showImage()" type="file" name="bookImage" id="bookImage" required>
                <label class="custom-file-label" for="bookImage">Choose Cover</label>
              </div>
            </div>
          </td>
          <td>
            <div class="form-group">
              <label for="username">Price</label>
              <input type="text" class="form-control text-lowercase <?php print $priceValidity;?>" value="<?php print $price?>" name="price" id="price" placeholder="100.00৳" aria-describedby="priceText" required>
              <small id="priceText" class="invalid-feedback"><?php print $priceErr;?></small>
            </div>
          </td>
        </tr>

        <tr>
          <td>
          </td>
          <td>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="custom-select" id="category" name="category" required>
                <option selected disabled value="">Choose...</option>
                <?php
                  for ($i=0; $i < count($categories); $i++) { 
                    print "<option>".$categories[$i]."</option>";
                  }
                ?>
              </select>
              <small id="priceText" class="invalid-feedback">Please select a valid category.</small>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">Share</button>
            </div>
          </td>
        </tr>
      </table>
    </form>
  </div>

  <script>
    function showImage(){
      var preImage = document.getElementById("preview");
      var image = document.getElementById("bookImage");
      preImage.src = URL.createObjectURL(image.files[0]);
    }
  </script>

  <!-- Loads the Footer-->
  <?php include '../include/footer.php'?>
</body>

</html>