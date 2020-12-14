<?php

set_exception_handler('exception_handler');

function exception_handler($exception): void
{
    error_log($exception->getMessage());

    if (!(APP_ENV === 'production' || APP_ENV === 'prod')) {
        echo 'Uncaught exception: ' , $exception->getMessage(), "\n";
        exit();
    }

    header('Location: /errors/500.html');
    exit();
}
