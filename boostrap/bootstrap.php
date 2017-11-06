<?php

/**
 * @Author: suifengtec
 * @Date:   2017-11-06 02:57:50
 * @Last Modified by:   suifengtec
 * @Last Modified time: 2017-11-06 03:07:02
 **/
require __DIR__ . DIRECTORY_SEPARATOR . '../app/app.php';
require __DIR__ . DIRECTORY_SEPARATOR . '../app/routes.php';
require __DIR__ . DIRECTORY_SEPARATOR . '../app/dependencies.php';
require __DIR__ . DIRECTORY_SEPARATOR . '../app/middleware.php';
$app->run();