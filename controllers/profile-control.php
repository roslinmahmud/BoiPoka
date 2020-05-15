<?php
    // Import executeNonQuery(), executeQuery() functions
    require_once '../models/database-connect.php';
    function get_profile_info($id){
        $query = "select * from users where id=$id";
        return executeQuery($query);
    }

    

?>