<?php
session_start();

if (!isset($_SESSION['username'])) {

    header("Location: login.php");
    exit();

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard Page</h1>

<h3>Welcome </h3>
 <?php 
 echo $_SESSION['username']; 
 ?>

<a href="logout.php">Logout</a>

</body>
</html>