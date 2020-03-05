<?php
    $name = $email = $username = $number = $address = $password = $cpassword = "";
    $nameErr = $usernameErr = $numberErr = $addressErr = $passwordErr = $cpasswordErr = "";
    $nameValidity = $emailValidity = $usernameValidity = $numberValidity = $addressValidity = $passwordValidity = $cpasswordValidity = "";
    $valid = true;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Validating Name
        if(isset($_REQUEST['name'])){
            $name = $_REQUEST['name'];
            if(ctype_space($name)){
                $nameValidity = 'is-invalid';
                $nameErr = 'Name is required!';
                $valid = false;
            }
            else{
                $nameValidity = 'is-valid';
                $valid = true;
            }
        }
        else{
            $name = $_REQUEST['name'];
            $nameValidity = 'is-invalid';
            $valid = false;
        }
        // Validating Email
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
            if(ctype_space($email)){
                $emailValidity = 'is-invalid';
                $emailErr = "Email is required";
                $valid = false;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailValidity = 'is-invalid';
                $emailErr = "Invalid email format!";
                $valid = false;
            }
            else{
                $emailValidity = 'is-valid';
                $valid = true;
            }
        }
        else{
            $email = $_REQUEST['email'];
            $emailValidity = 'is-invalid';
            $valid = false;
        }
        // Validating Username
        if(isset($_REQUEST['username'])){
            $username = $_REQUEST['username'];
            if(ctype_space($username)){
                $usernameValidity = 'is-invalid';
                $usernameErr = 'Username is required!';
                $valid = false;
            }
            else{
                $usernameValidity = 'is-valid';
                $valid = true;
            }
        }
        else{
            $username = $_REQUEST['username'];
            $usernameValidity = 'is-invalid';
            $valid = false;
        }
        // Validating Moblile number
        if(!empty($_REQUEST['number'])){
            $number = $_REQUEST['number'];
            if(!ctype_space($number)){
                $pattern = '/\+[0-9]{2}+[0-9]{11}/s';
                if(!preg_match($pattern, $number)){
                    $numberValidity = 'is-invalid';
                    $numberErr = 'Invalid mobile number';
                    $valid = false;
                }
                else{
                    $numberValidity = 'is-valid';
                    $valid = true;
                }
            }
            else{
                $numberValidity = 'is-valid';
                $valid = true;
            }
        }
        else{
            $number = $_REQUEST['number'];
            $numberValidity = 'is-valid';
            $valid = true;
        }
        // Validating Address
        if(isset($_REQUEST['address'])){
            $address = $_REQUEST['address'];
            if(ctype_space($address)){
                $addressValidity = 'is-invalid';
                $addressErr = "Address is required";
                $valid = false;
            }
            else{
                $addressValidity = 'is-valid';
                $valid = true;
            }
        }
        else{
            $address = $_REQUEST['address'];
            $addressValidity = 'is-invalid';
            $valid = false;
        }
        // Validating Password
        if(isset($_REQUEST['password']) and $_REQUEST['cpassword']){
            $password = $_REQUEST['password'];
            $cpassword = $_REQUEST['cpassword'];
            if(ctype_space($password)){
                $passwordValidity = 'is-invalid';
                $passwordErr = "Password is required!";
                $valid = false;
            }
            if(ctype_space($cpassword)){
                $cpasswordValidity = 'is-invalid';
                $cpasswordErr = "Confirm Password is required!";
                $valid = false;

            }
            if(strcmp($password, $cpassword) != 0){
                $passwordValidity = 'is-invalid';
                $cpasswordValidity = 'is-invalid';
                $passwordErr = "Password do not match!";
                $valid = false;
            }
            else{
                $passwordValidity = 'is-valid';
                $cpasswordValidity = 'is-valid';
                $valid = true;
            }
        }
        else{
            $password = $_REQUEST['password'];
            $cpassword = $_REQUEST['cpassword'];
            $valid = false;
        }
    }
?>