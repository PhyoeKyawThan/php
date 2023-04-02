<?php
session_start();
?>

<!-- clear session aftr logout -->
<?php

session_unset();
session_destroy();
header("Location:index.php?logoutmsg=Logout%20Success");
?>
