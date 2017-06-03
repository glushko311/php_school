<?php
    require_once __DIR__ . '/sql.php';

    function getAll_photo(){
        return sendSql_query('SELECT id, name, path FROM t_image ORDER BY t_image.num_of_views DESC ');
    }

