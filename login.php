<?php

    session_start();

    if(isset($_POST['username'])){
        
        include('connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM usertbl WHERE username = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_now_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'admin') {
                header('Location: admin_page.php');
            }

            if ($_SESSION['userlevel'] == 'user') {
                header('Location: user_page.php');
            } else {
                echo "<script>alert('Username หรือ Password ไม่ถูกต้อง');</script>";
            }

        } else {
            header('Location: index.php');
        }

    }


?>