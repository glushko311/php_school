<?php

?>

<div class="news">
    <h2 class="title"><?php if(!empty($title)){echo $title;}?></h2>
    <div class="image">
        <img src="<?php if(!empty($image)){echo $image; }?>" alt="">
    </div>
    <div class="text_block">
        <p><?php if(!empty($text)){echo $text;}?></p>
    </div>
    <div class="vote">
        <p><?php echo 'Рейтинг новости '.$vote; ?></p>
    </div>
</div>

