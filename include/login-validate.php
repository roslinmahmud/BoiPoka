
<?php
    // Import login() function
    require("../controllers/login-control.php");

    if(isset($_SESSION['username'])){
        header("Location: /BoiPoka/");
    }

    $authenticationError = "";
    $username = $password = $cpassword = "";
    $usernameErr = $passwordErr = "";
    $usernameValidity = $passwordValidity = "";
    $valid = true;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
            }
        }
        else{
            $username = $_REQUEST['username'];
            $usernameValidity = 'is-invalid';
            $valid = false;
        }
        // Validating Password
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];
            if(ctype_space($password)){
                $passwordValidity = 'is-invalid';
                $passwordErr = "Password is required!";
                $valid = false;
            }
            else{
                $passwordValidity = 'is-valid';
            }
        }
        else{
            $password = $_REQUEST['password'];
            $valid = false;
        }
    }
    else{
        $valid = false;
    }

    if($valid){
        $result = login($username, $password);
        if($row = $result->fetch_assoc()){
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $username;
            header("Location: /BoiPoka/");
        }
        else{
            $authenticationError = '<div class="alert alert-danger" role="alert">Invalid username/password </div>';
        }
    }
?>