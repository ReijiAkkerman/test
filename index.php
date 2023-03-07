<?php
    $path_args = explode('/', $_SERVER['REQUEST_URI']);

    switch($path_args[1]) {
        case '':
            include "app/control/main.php";
            break;
        case 'companies':
            include "app/control/main.php";
            break;
    }