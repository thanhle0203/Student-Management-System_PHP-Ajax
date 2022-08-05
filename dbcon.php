<?php
    $conn = mysqli_connect("localhost","root","","student-management-system");

    if(!$conn) {
        die('Connect Failed'. mysqli_connect_error());
    }
    
?>