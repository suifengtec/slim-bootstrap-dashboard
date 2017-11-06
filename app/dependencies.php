<?php
namespace App;

/**
 * @Author: suifengtec
 * @Date:   2017-11-06 03:07:07
 * @Last Modified by:   suifengtec
 * @Last Modified time: 2017-11-06 03:27:49
 **/

// 获取注入容器
$container = $app->getContainer();

// 注入
$container['view'] = function ($c) {

	$cfg = $c->get('settings')['mustache'];
	$view = new \Slim\Views\Mustache([
		'cache' => $cfg['cache_dir'],
		'loader' => new \Mustache_Loader_FilesystemLoader($cfg['views_dir']),
		'partials_loader' => new \Mustache_Loader_FilesystemLoader($cfg['partials_dir']),
		'displayErrorDetails' => true,
	]);
	return $view;
};