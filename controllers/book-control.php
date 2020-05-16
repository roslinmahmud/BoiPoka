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
    function getUserName($id){
        $query = "select name from users where ID=$id";
        return executeQuery($query);
    }

    function getReviews($id){
        $query = "select * from reviews where BookID=$id";
        return executeQuery($query);
    }

?>