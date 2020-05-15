<?php
    // Import executeNonQuery(), executeQuery() functions
    require_once '../models/database-connect.php';
   

    function update($id, $name, $email, $username, $number, $address, $password)
    {
        
        $query="UPDATE users SET name='$name', email='$email', username='$username', number='$number', address='$address', password='$password' 
        where id=$id";
        return executeNonQuery($query);
    }

?>