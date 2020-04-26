<?php

    // Import share() function
    require("../controllers/share-control.php");
    $shareStatus = "";
    $categories = array("Art", "Academic", "Biography", "Business", "Children's", "Christian", "Classics", "Comics", "Contemporary", "Cookbooks", "Crime", "Ebooks", "Fantasy", "Fiction", "Graphic", "Novels", "Historical", "Fiction", "History", "Horror", "Humor", "and", "Comedy", "Manga", "Memoir", "Music", "Mystery", "Nonfiction", "Paranormal", "Philosophy", "Poetry", "Psychology", "Religion", "Romance", "Science", "Science", "Fiction", "Self", "Help", "Suspense", "Spirituality", "Sports", "Thriller", "Travel");
    $bookname = $authorname = $price = $category = "";
    $booknameErr = $authornameErr = $priceErr = "";
    $booknameValidity = $authornameValidity = $priceValidity = "";
    $upload_image= "img/book/blank.png";
    $valid = true;

    if(isset($_POST['submit'])){
        // Validating Book Name
        if(isset($_REQUEST['bookname'])){
            $bookname = $_POST['bookname'];
            if(ctype_space($bookname)){
                $booknameValidity = 'is-invalid';
                $booknameErr = 'Book Name is required!';
                $valid = false;
            }
            else{
                $booknameValidity = 'is-valid';
            }
        }
        // Validating Book Name
        if(isset($_REQUEST['authorname'])){
            $authorname = $_POST['authorname'];
            if(ctype_space($authorname)){
                $authornameValidity = 'is-invalid';
                $authornameErr = 'Author Name is required!';
                $valid = false;
            }
            else{
                $authornameValidity = 'is-valid';
            }
        }

        // Validating Price
        if(isset($_REQUEST['price'])){
            $price = $_POST['price'];
            if(!is_numeric($price)){
                $priceValidity = 'is-invalid';
                $priceErr = 'Invalid Price given!';
                $valid = false;
            }
            else{
                $priceValidity = 'is-valid';
            }
        }

        // Validating Category
        if(isset($_REQUEST['category'])){
            $category = $_REQUEST['category'];
        }
        else{
            $valid = false;
        }

        // Validating Cover-Image
        $dir = dirname(getcwd())."\\img\\book\\";
        $img = basename($_FILES['bookImage']['name']);

        if(!empty($_FILES['bookImage']['tmp_name'])){
            $check = getimagesize($_FILES['bookImage']['tmp_name']);
            if(!$check){
                $valid = false;
            }
        }
        else{
            $valid = false;
        }
        
    }
    else{
        $valid = false;
    }

    if($valid){
        if(share($bookname, $authorname, $price, $category, $_SESSION['username'].'_'.$img, $_SESSION['id'])){
            $shareStatus = '<div class="alert alert-success" role="alert">Share successful!</div>';
            move_uploaded_file($_FILES['bookImage']['tmp_name'], $dir.$_SESSION['username'].'_'.$img);
        }
        else{
            $shareStatus = '<div class="alert alert-danger" role="alert">Share unsuccessful. Invalid data given!</div>';
        }
    }
    else{
        $shareStatus = '<div class="alert alert-danger" role="alert">Share unsuccessful. Invalid data given!</div>';
    }
?>