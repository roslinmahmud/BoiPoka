<?php
    // Start Seession
    session_start();
    // Import submitReview() function 
    require '../controllers/review-control.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $result = submitReview($_REQUEST['review'], $_REQUEST['bookid'], $_SESSION['id']);
        if ($result) {
            print 'Successfully submitted!';
        }
        else{
            print 'Submission unsuccessful!';
        }
    }

?>