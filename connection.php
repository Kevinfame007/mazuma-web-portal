<?php
    $conn = mysqli_connect("localhost", "root", "", "mazuma-web-portal");
    if ($conn) {
        die("Failed to connect to database " . mysqli_error($conn));
    }
?>