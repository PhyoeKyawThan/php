<?php
//upload file path
$file_path = "uploads/". basename($_FILES['txtFile']['name']);
$file_size = $_FILES['txtFile']['size'];
$is_fileExist = file_exists($file_path);
$tempFile = $_FILES['txtFile']['tmp_name'];

//check_request
if(isset($_POST)){
    //check file size
    if($file_size > 500000){
        echo "File is too large to upload";
    }else if($is_fileExist){//check if it alreade exists
        echo "File already exists";
    }else{
        if(move_uploaded_file($tempFile, $file_path)){
            echo "Your ". htmlspecialchars( basename($_FILES['txtFile']['name'])) . " has been uploaded!";
        }else{
            echo "Oops! Something went wrong, File upload fail";
        }
    }
}


?>