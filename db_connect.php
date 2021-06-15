<?php
    $conn = mysqli_connect('localhost','gaurish','cc123','hellworld');
    // check connection
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }
?> 