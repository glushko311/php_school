<?php

require_once __DIR__ . '/models/sql.php';
require_once __DIR__ . '/models/photo.php';

$res = getAll_photo();

var_dump($res);