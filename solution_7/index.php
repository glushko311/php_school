<?php
    require __DIR__. '/function.php';


require 'views/load_file.php';
if(isset($_GET['success']) && $_GET['success'] == 'yes'){
    echo '<h4>Файл успешно загружен</h4>';

}elseif(isset($GET[['success']]) && $_GET['success'] == 'no'){
    echo '<h4>Произошла ошибка не удалось загрузить файл</h4>';
}
//removeImg('_n4Sd20hJsc.jpg');
printFiles(getPathArr('gallery'));


//var_dump(sendDbQuery('INSERT INTO `t_image` (`id`, `name`) VALUES (NULL, \'5.jpg\');'));
//var_dump(sendDbQuery('INSERT INTO `t_image` (`id`, `name`) VALUES (NULL, \'5.jpg\');'));