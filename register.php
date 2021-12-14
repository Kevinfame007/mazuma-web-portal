<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $userlevel = $_POST['userlevel'];

        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username) {

            echo "<script>alert('Username already exists');</script>";
            header('Location: register.php');

        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO usertbl (id, username, password, firstname, lastname, userlevel)
                        VALUE ('$id', '$username', '$passwordenc', '$firstname', '$lastname', '$userlevel')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "<script>alert('Insert user successfully');</script>";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "<script>alert('Someting wrong');</script>";
                header("Location: index.php");
            }
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="id">Id</label>
        <input type="text" name="id" placeholder="Enter your id" required>
        <br>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
        <br>
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" placeholder="Enter your firstname" required>
        <br>
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" placeholder="Enter your lastname" required>
        <br>
        <label for="userlevel">Position</label>
        <input type="text" name="userlevel" placeholder="Enter your userlevel" required>
        <br>
        <input type="submit" name="submit" value="Submit">
    
    </form>

    <a href="index.php">Go back to index</a>
    
</body>
</html>