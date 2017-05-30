<?php
function getPathArr($dirname){
    $paths = scandir( './' . $dirname);
    $newPath = [];
     foreach($paths as $path){
         if($path=='.' || $path=='..'){
             continue;
         }
         $newPath[] = './' . $dirname .'/'. $path;
     }
    return $newPath;
}
function printFiles(array $paths){
    foreach($paths as $path):?>
        <img src="<?php echo $path ?>" alt="gallery">
    <?php endforeach;
}

function checkMimeType($paths){
    $f = fopen($paths, 'r');
    $mime_type = finfo_open(FILEINFO_MIME_TYPE);
    echo $mime_type;
    fclose($f);
}