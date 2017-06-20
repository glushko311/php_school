<?php
/**
 * Created by PhpStorm.
 * User: Шалена Жирафа
 * Date: 09.06.2017
 * Time: 14:03
 */

if(!empty($items)) :
    foreach( $items as $item): ?>
        <div class="news">
            <h2><?php echo $item->title ?></h2>
            <p><?php echo $item->text ?></p>
        </div>

        <?php
    endforeach;
else :?>

    <h2>Новости отсутствуют</h2>

    <?php
endif;

?>
