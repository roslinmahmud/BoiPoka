<?php
    // Import executeNonQuery(), executeQuery() functions
    require '../models/database-connect.php';

    function register($name, $email, $username, $number, $address, $password){
        $query = "INSERT INTO users (name, email, username, password, number, address)
        VALUES ('$name', '$email', '$username', '$password', '$number', '$address');";
        return executeNonQuery($query);
    }
?>