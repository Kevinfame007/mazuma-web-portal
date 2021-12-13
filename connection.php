<?php
    $conn = mysqli_connect("localhost", "root", "", "mazumawebportal");
    if (!$conn) {
        die("Failed to connect to database " . mysqli_error($conn));
    }
?>