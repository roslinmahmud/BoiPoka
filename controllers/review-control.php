<?php
    // Import executeNonQuery(), executeQuery() functions
    require_once '../models/database-connect.php';

    function submitReview($Review, $BookID, $ID){
        $query = "INSERT INTO reviews (Review, BookID, ID) VALUES ('$Review', '$BookID', '$ID')";
        return executeNonQuery($query);
    }
?>