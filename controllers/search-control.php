<?php
    // Import executeNonQuery(), executeQuery() functions
    require_once '../models/database-connect.php';

    function getBookList($search){
        $query = "select BookID, BookName from books where BookName LIKE '%".$search."%'";
        return executeQuery($query);
    }
?>