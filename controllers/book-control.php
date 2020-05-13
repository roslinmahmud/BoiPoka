<?php
    // Import executeNonQuery(), executeQuery() functions
    require_once '../models/database-connect.php';

    function getBookData($id){
        $query = "select * from books where BookID=$id";
        return executeQuery($query);
    }

    function getUser($id){
        $query = "select * from users where ID=$id";
        return executeQuery($query);
    }

?>