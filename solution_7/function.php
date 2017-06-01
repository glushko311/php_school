<?php
function getPathArr($dirname){

    $paths = sendDbQuery('SELECT name FROM t_image');

    $newPath = [];
     foreach($paths as $path){
         $newPath[] = './' . $dirname .'/'. $path['name'];
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

function sendDbQuery($query){
    $link = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($link, 'test1');

    $queryArray = [];
    $queryType = explode(' ', $query)[0];

    switch(true){
        case strtoupper($queryType) == 'SELECT':
            $res = mysqli_query($link, $query);

            while ($row = mysqli_fetch_assoc($res)){
                $queryArray[] = $row;
            }
            return $queryArray;
        break;
        case $queryType == 'INSERT':
            mysqli_query($link, $query);
            return 'INSERT';
        break;
        case $queryType == 'DELETE':
            mysqli_query($link, $query);
            return 'DELETE';
        break;
        default:
            return false;
    }

}

function removeImg($name){
    $query = 'DELETE FROM t_image WHERE t_image.name = \'$name\'';
    unlink(__DIR__.'/gallery/'.$name);
    sendDbQuery($query);
}