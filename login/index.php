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
        <span class="header">L O G I N</span>
        <?php echo '<span class="user-alert">'. $_GET['message']. '</span>' ?>
        <?php echo '<span class="logout-alert">'. $_GET['logoutmsg']. '</span>' ?>
        <form action="/login_data.php" method="get" class="form-field">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-input" required>
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="" class="form-input" required>
            <input type="submit" value="LOGIN">
        </form>
    </div>
    
</body>
</html>