<?php
    // Import executeNonQuery(), executeQuery() functions
    require '../models/database-connect.php';

    function login($username, $password){
        $query = "select id from users where username='$username' and password='$password';";
        return executeQuery($query);
    }
?>