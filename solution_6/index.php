<?php
    require __DIR__. '/function.php';


require 'views/load_file.php';
if(isset($_GET['success']) && $_GET['success'] == 'yes'){
    echo '<h4>Файл успешно загружен</h4>';
}elseif(isset($GET[['success']]) && $_GET['success'] == 'no'){
    echo '<h4>Произошла ошибка не удалось загрузить файл</h4>';
}
printFiles(getPathArr('gallery'));