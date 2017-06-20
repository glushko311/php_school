<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 16.06.2017
 * Time: 12:53
 */
?>
<h1>Лог файл</h1>
<?php for($i = count($items)-1; $i>=0; $i--) :?>
    <p><?php echo $items[$i]; ?></p>
<?php endfor; ?>
