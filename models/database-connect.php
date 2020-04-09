<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "boipoka";

    $connection = new mysqli($host, $username, $password, $dbname);

    function executeQuery($query){
        global $connection;
        $result = $connection->query($query);
        return $result;
    }

    function executeNonQuery($query){
        global $connection;
        $result = $connection->query($query);
        return $result;
    }

?>