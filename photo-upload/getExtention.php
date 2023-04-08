<?php

function getExten($fileName): string
{
    $index = 0;
    $exten = '';
    //get index of dot
    for ($i = 0; $i < strlen($fileName); $i++) {
        if ($fileName[$i] == '.') {
            $index = $i + 1;
            break;
        }
    }
    //get extention
    for ($index; $index < strlen($fileName); $index++) {
        $exten .=  $fileName[$index];
    }
    return $exten;
}
