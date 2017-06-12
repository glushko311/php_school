<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 09.06.2017
 * Time: 14:42
 */
?>

<div class="news">
    <?php if(!empty($items[0])) :?>
        <h2><?php echo $items[0]->title; ?></h2>
        <p><?php echo $items[0]->text; ?>
    <?php else :?>
        <h2>Новость не найдена</h2>
    <?php endif?>
</div>