<?php
/*
    * @ ZippyShare Cracker
    * @ Version 1.0
    * @ Created by Agiel Asyari
*/

spl_autoload_register(function($class)
{
    $class = strtr($class, [
        'App\\' => '',
        '\\' => '/'
    ]);
    require "{$class}.php";
});