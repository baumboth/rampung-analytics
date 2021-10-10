<?php
    $conn=mysqli_connect('localhost','root','12345','rampunganalytic-user');
        /* check connection */
        if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>