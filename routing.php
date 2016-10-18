<?php

//ROUTING

$routs = [
    'guest-book',
    'form2'
];

if( $_SERVER['REQUEST_URI'] != '/' ) {
    $urlArray = explode('/', $_SERVER['REQUEST_URI']);
    //var_dump ($urlArray);
    $urlArray = array_filter($urlArray);
    //var_dump ($urlArray);
    $action = $urlArray[1];
    //var_dump ($action);
    //var_dump ($_SERVER['REQUEST_URI']);


    if( isset($urlArray[2]) ) {
        $subAction = $urlArray[2];
    }

    if( !in_array( $action, $routs ) ) {
        $action = null;
        $subAction = null;
    }
}
else {
    $action = 'main';
}
//var_dump ($action);




