<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <span class="header">LOGIN SUCCESSFUL</span>
        <?php
            if($_GET['email']==$_SESSION['email'] or $_GET['password']==$_SESSION['password']){
            echo "<span class='data'>Your Name is ". $_SESSION['name']. "</span> </br>";
            echo "<span class='data'>Your Email is \"". $_SESSION['email']. "\"</span> </br>";
            echo "<span class='data'>Your Password is \"". $_SESSION['password']. "\"</span> </br>";
            }else{
                header("Location:index.php?message=Incorrect%20Email%20or%20Password");
            }
        ?>
        <form action="logout.php" method='post'>
        <button type="submit">LOGOUT</button>
        </form>
    </div>
    
</body>
</html>