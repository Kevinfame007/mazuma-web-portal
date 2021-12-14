<?php 

    $conn = mysqli_connect("localhost", "root", "", "mazumawebportal");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }

?>