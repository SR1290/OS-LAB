<?php
include("db.php");

if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $sql = "INSERT INTO feedback(name,email,message) VALUES('$name','$email','$message')";

        if(mysqli_query($conn,$sql))
            {
                echo "<script> alert('FEEDBACK IS SUBMITTED'); </script>";
            }
            else{
                echo "Error".mysqli_error($conn);
            }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="post">
        <label>NAME : </label>
        <input type = "text" name = "name" required /><br><br>
        <label>EMAIL : </label>
        <input type = "text" name = "email" required /><br><br>
        <label>FEEDBACK : </label>
        <textarea name ="message" rows="5" cols="5"> </textarea><br><br>
        <button type="submit"  name="submit" >submit</button>



    </form>
    <a href="./view.php">view feedback</a>
</body>
</html>