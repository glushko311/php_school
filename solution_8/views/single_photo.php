<?php
if(!empty($_GET['name']) && !empty($_GET['path'])){
    $name = $_GET['name'];
    $path = $_GET['path'];
    $num = $_GET['num'];
}
?>
<!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
        <div class="container">
            <img src="<?php echo  '../'.$path; ?>" alt="<?php echo  $name; ?>">
            <h3><?php echo  $name; ?> </h3>
            <h3><i>Просмотров: <?php echo $num; ?></i></h3>
        </div>
    </body>
</html>