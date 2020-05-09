<?php
    // Import executeNonQuery(), executeQuery() functions
    require_once 'models/database-connect.php';

    function getBookData(){
        $query = "select * from books";
        return executeQuery($query);
    }

?>