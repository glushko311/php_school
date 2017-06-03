<?php

    require_once __DIR__ . '/sql.php';

    function checkFileType(){
        $fileType = ['image/jpg', 'image/png', 'image/gif', 'image/jpeg'];
        $flag = false;

        foreach($fileType as $type){
            if($_FILES['img']['type'] === $type){
                $flag = true;
            }
        }

        return $flag;
    }

    function addMain(){
        if(!empty($_FILES['img']) && $_POST['fileName']){
            if(checkFileType()){
                if(move_uploaded_file($_FILES['img']['tmp_name'],'../images/' . $_FILES['img']['name'])){
                    $name = $_POST['fileName'];
                    $path = 'images/' . $_FILES['img']['name'];
                    $query = 'INSERT INTO t_image ( name, path) VALUES (\''.$name.'\', \''.$path.'\');';



                    sendSql_query($query);
                    header('Location: /php_school/solution_8/index.php?error=false');
                    die;
                }

            }else{
                header('Location: /php_school/solution_8/index.php?error=invalid_type');
                die;
            }

        }else{
            header('Location: /php_school/solution_8/index.php?error=not_load');
            die;
        }
    }

addMain();

