<?php
    // Import getBookData() function 
    require '../controllers/search-control.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $result = getBookList($_REQUEST['query']);
        if ($result->num_rows > 0) {
            print '<div class="list-group">';
            while($data = $result->fetch_assoc()){
            print'
                <a class="list-group-item list-group-item-action" href="book?id='.$data['BookID'].'">'.$data['BookName'].'</a>
            ';
            }
            print "</div>";
        }
    }

?>