<?php
    session_start();
    session_unset();
    header("Location: /BoiPoka/login.php");
?>