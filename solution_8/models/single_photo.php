<?php
require_once __DIR__ . '/sql.php';

function getSingle_photo($id){
    $id = (int)$id;
    return sendSql_query('SELECT id,name,path,num_of_views FROM t_image WHERE t_image.id ='.$id);
}
function setNum_of_views($id, $num){
    return sendSql_query('UPDATE t_image SET num_of_views = \''.$num.'\' WHERE t_image.id = '.$id.';');
}


function singlePhoto_main(){
    if(isset($_GET['id']) && !empty($data = getSingle_photo($_GET['id']))){
        $id = $data[0]['id'];
        $name = $data[0]['name'];
        $path = $data[0]['path'];
        $num_of_views = $data[0]['num_of_views']+1;

        setNum_of_views($id, $num_of_views);
        header('Location: /php_school/solution_8/views/single_photo.php?name='.$name.'&path='.$path.'&num='.$num_of_views);
        die;
    }else{
        header('Location: /php_school/solution_8/index.php?error=photo_not_found');
        die;
    }
}

singlePhoto_main();
