<?php
    require_once __DIR__ . '/sql.php';

    function getAll_photo(){
        return sendSql_query('SELECT name, path FROM t_image');
    }