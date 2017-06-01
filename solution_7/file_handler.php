<?php
require_once __DIR__.'/function.php';

function fileHandler(){
    $types = ["image/png", "image/jpeg", "image/jpg", "image/gif"];
    if(in_array($_FILES['image']["type"], $types)){
        $insertQuery = 'INSERT INTO t_image (name) VALUES (\''. $_FILES['image']['name'].'\');';
        sendDbQuery($insertQuery);

        move_uploaded_file($_FILES['image']['tmp_name'], './gallery/'.$_FILES['image']['name']);
        header('Location: ./index.php?success=yes');
        exit;
    }
    header('Location: ./index.php?success=no');
    exit;

}
fileHandler();
