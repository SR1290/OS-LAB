<?php
session_start();
include("db.php");

if (isset($_POST['login'])) {

    $username =$_POST['username'];
    $password =$_POST['password'];

    $sql = "SELECT * FROM userdb WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit();

    } else {

        echo "('Invalid Username or Password')";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Page</h2>

<form method="POST">

    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>