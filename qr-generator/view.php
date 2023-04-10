<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qrs</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        h2{
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .collection{
            display: inline-block;  
        }

        .name{
            text-align: center;
        }

        .img{
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <h2>Yours Qrs are here</h2>
    <div class="collection">
        
    <?php
        foreach(glob('./qr-codes/*.*') as $file){
            echo "<div class='img'><img src='".$file."' alt=".basename($file)."><div class='name'>".basename($file)."</div></div>";
        }
    ?>
    </div>
</body>
</html>