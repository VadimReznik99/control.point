<?php

// Бизнес логика приложения

if( !$action ) {
    header("HTTP/1.1 404 Not Found");
    include "templates/404.view.php";
}

include "controllers/main.controller.php";
include "controllers/guest-book.controller.php";
include "controllers/form2.controller.php";

// admin controllers




