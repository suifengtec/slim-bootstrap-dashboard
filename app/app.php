<?php
namespace App;

use App\Config\General;

/**
 * @Author: suifengtec
 * @Date:   2017-11-06 02:54:42
 * @Last Modified by:   suifengtec
 * @Last Modified time: 2017-11-06 03:15:23
 **/
date_default_timezone_set('PRC');
session_start();

require __DIR__ . DIRECTORY_SEPARATOR . '../vendor/autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'Config/General.php';
$cfgG = new Config\General;
$app = new \Slim\App($cfgG->get());
