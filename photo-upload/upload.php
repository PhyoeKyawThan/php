<?php

require 'getExtention.php';
$stor_dir = $_POST["folder-name"];
$fileName = basename($_FILES['img']['name']);
$stor_path = $stor_dir . '/' . basename($_FILES['img']['name']);
$is_exist  = file_exists($stor_path);
$file_extention = getExten($fileName);
$tem_file = $_FILES['img']['tmp_name'];

if(!is_dir($stor_dir)){
    mkdir($stor_dir);
}
if(!$is_exist){
    if($file_extention == 'jpg' or $file_extention == 'png' or $file_extention == 'jpeg'){
        if(move_uploaded_file($tem_file, $stor_path)){
            header('Location:index.php?success='.rawurldecode('Uploaded Successfully'));
        }else{
            header('Location:index.php?message='.rawurldecode('Error while uploading'));
        }
    }else{
        header('Location:index.php?message='.rawurldecode('Upload Photo Only!!'));
    }
}else{
    header('Location:index.php?message='.rawurldecode('File Already exists'));
}

?>