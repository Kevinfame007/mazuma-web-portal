<?php

    session_start();

    if(isset($_POST['username'])){
        
        include_once "connection.php";

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM usertbl WHERE username = '$username' AND password = '$passwordenc'";

        // id, username, password, firstname, lastname, userlevel

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            // echo $_SESSION['username'];

            

            if ($_SESSION['userlevel'] == 'admin') {
                header('Location: admin_page.php');
            }

            if ($_SESSION['userlevel'] == 'user') {
                header('Location: user_page.php');
            } else {
                echo "<script>alert('Username หรือ Password ไม่ถูกต้อง');</script>";
            }

            if ($_SESSION['username'] == $row['username']) {
                echo "<script>alert('Username หรือ Password ไม่ถูกต้อง');</script>";
                header('Location: admin_page.php');
            }

        } else {
            header('Location: login.php');
        }

    }


?>