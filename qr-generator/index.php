<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr - generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">Qr-Code Generator</div>
        <div class="alert"><?php echo $_GET['alert']; ?></div>
        <form action="/generator.php" method="post">
            <textarea name="texts" placeholder="Enter texts.." id="text"></textarea>
            <input type="text" name="img-name" placeholder="Eg: example.png" id="">
            <input type="submit" value="Generate">
        </form>
        <button type="submit"><a href="view.php">View</a></button>
    </div>
</body>
</html>