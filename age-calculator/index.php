<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Age</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <span class="topic">Welcome To Age Calculator</span>
            <form action="" method="post">
                <label for="birth-date">Input your birthday date.</label>
                <input type="date" name="birth-date" id="birth-date"/>
                <input type="submit" value="Calculate">
            </form>
    <span class="display-age">Your age in 
        <?php 
        echo date("d/m/Y"). " is "; 
        include 'calculate.php';
        ?>
    </span>
    </div>
</body>
</html>