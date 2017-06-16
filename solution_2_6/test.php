<?php
$mass = array('title'=>'Привет Мир','text'=>'Привееет всем всем всем');
foreach ($mass as $key => $value){
    $varName = $key;

    $$varName = $value;



}
echo  $title;
echo '<br>';
echo $text;