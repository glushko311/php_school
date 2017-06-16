<?php

    switch($code){
        case 404 :
            header("HTTP/1.0 404 Not Found");
            break;
        case 403 :
            header("HTTP/1.0 403 Forbidden");
            break;
        default :
         header("HTTP/1.0 500 Internal Server Error");
    }

    if($className == 'NewsModel' && $code == 404){
        $message = 'Новость с таким id не найдена';
    }


?>

<h1> Запрошенные вами материалы недоступны </h1>
<h2>Произошла ошибка <?php echo $code ?></h2>
<h2><?php echo $message ?></h2>
<h2>За разъяснением обратитесь к разработчику</h2>
