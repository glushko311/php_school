<?php

    $allPhoto = getAll_photo();
?>

<!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
        <div style="width:1360px;margin:0 auto; padding: 10px" class="gallery">
            <?php
                foreach($allPhoto as $photo) :?>
                    <a href="/php_school/solution_8/models/single_photo.php?id=<?php echo $photo['id']?>">
                        <img src="<?php echo  $photo['path']; ?>" alt="11">
                    </a>

                <?php endforeach;
            ?>
        </div>

    </body>
</html>