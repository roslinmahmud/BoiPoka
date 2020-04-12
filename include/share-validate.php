<?php
    $bookname = $authorname = $price = "";
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

        $dir = dirname(getcwd())."\\img\\book\\";
        $img = basename($_FILES['bookImage']['name']);
        
        //move_uploaded_file($_FILES['bookImage']['tmp_name'], $dir.$img);
    }
?>