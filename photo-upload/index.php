<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <span class="header">Upload Photo</span>
        <div class="alert-box"><?php echo $_GET['message']; ?></div>
        <div class="alert-box-upload"><?php echo $_GET['success']; ?></div>
        <form action="/upload.php" method="post" enctype="multipart/form-data">
            <label for="img">Image File</label>
            <input type="file" name="img" id="img" class="image">
            <label for="folder">Image Folder Name</label>
            <input type="text" name="folder-name" id="folder">
            <input type="submit" value="Upload">
        </form>
    </div>
</body>

</html>