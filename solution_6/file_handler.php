<?php
function fileHandler(){
    $types = ["image/png", "image/jpeg", "image/jpg", "image/gif"];
    if(in_array($_FILES['image']["type"], $types)){
        move_uploaded_file($_FILES['image']['tmp_name'], './gallery/'.$_FILES['image']['name']);
        header('Location: ./index.php?success=yes');
        exit;
    }
    header('Location: ./index.php?success=no');
    exit;

}
fileHandler();
