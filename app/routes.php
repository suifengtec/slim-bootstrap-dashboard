<?php
namespace App;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * @Author: suifengtec
 * @Date:   2017-11-06 03:00:08
 * @Last Modified by:   suifengtec
 * @Last Modified time: 2017-11-06 15:39:06
 **/

/*
only for test
 */
$app->get('/test', function (Request $request, Response $response, array $args) {

	return $response->write('test');

});
$app->get('/dashboard/test-1/', function (Request $request, Response $response, array $args) {

	$args['page_title'] = '测试页面1';
	$args['bool_1'] = true;
	$args['bool_2'] = false;
	$args['html_1'] = '<a href="mailto:joe@example.com?subject=feedback" "email me">email me</a>';
	$args['arr_1'] = [

		'aa' => 'AAA',
		'bb' => 'BBB',
		'cc' => 'CCC',

	];
	$person1 = new \stdClass();
	$person1->username = 'suifengtec';
	$person1->url = 'http://coolwp.com';
	$person2 = new \stdClass();
	$person2->username = 'Github';
	$person2->url = 'https://Github.com';

	$args['people'] = [

		$person1, $person2,
	];

	return $this->view->render($response, 'd_test-1.mustache', $args);

});

$app->get('/', function (Request $request, Response $response, array $args) {
	return $response->withRedirect('/dashboard/');

})->setName('dashboard_home');
$app->get('/dashboard/', function (Request $request, Response $response, array $args) {

	$args['page_title'] = '概览';
	return $this->view->render($response, 'd_index.mustache', $args);

})->setName('dashboard_index');

$app->get('/dashboard/charts', function (Request $request, Response $response, array $args) {

	$args['page_title'] = '图表';
	return $this->view->render($response, 'd_charts.mustache', $args);

})->setName('dashboard_charts');

$app->get('/dashboard/tables', function (Request $request, Response $response, array $args) {

	$args['page_title'] = '表格';
	return $this->view->render($response, 'd_tables.mustache', $args);

})->setName('dashboard_tables');

$app->get('/dashboard/navbar', function (Request $request, Response $response, array $args) {

	$args['page_title'] = 'Navbar';
	return $this->view->render($response, 'd_navbar.mustache', $args);

})->setName('dashboard_navbar');

$app->get('/dashboard/signup', function (Request $request, Response $response, array $args) {

	$args['page_title'] = '注册';

	$args['url_signin'] = $this->router->pathFor('dashboard_signin');
	$args['url_forgot_password'] = $this->router->pathFor('dashboard_forgot_password');
	$args['url_signup_handler'] = $this->router->pathFor('url_signup_handler');
	return $this->view->render($response, 'd_signup.mustache', $args);

})->setName('dashboard_signup');

$app->get('/dashboard/signin', function (Request $request, Response $response, array $args) {

	$args['page_title'] = '登录';
	$args['url_signup'] = $this->router->pathFor('dashboard_signup');
	$args['url_signin_handler'] = $this->router->pathFor('url_signin_handler');

	$args['url_forgot_password'] = $this->router->pathFor('dashboard_forgot_password');

	return $this->view->render($response, 'd_signin.mustache', $args);

})->setName('dashboard_signin');

$app->post('/signin/', function (Request $request, Response $response, array $args) {

	$content_type = 'application/json;charset=utf-8';

	$r = json_encode([

		'success' => false,
		'action' => 'signin',
		'msg' => 'balabala...',

	]);

	return $response->withStatus(201)
		->withHeader('Content-type', $content_type)
		->write($r);
})->setName('url_signin_handler');

$app->post('/signup/', function (Request $request, Response $response, array $args) {

	$content_type = 'application/json;charset=utf-8';

	$r = json_encode([

		'success' => false,
		'action' => 'signup',
		'msg' => 'balabala...',

	]);

	return $response->withStatus(201)
		->withHeader('Content-type', $content_type)
		->write($r);
})->setName('url_signup_handler');

$app->get('/dashboard/forgot-password', function (Request $request, Response $response, array $args) {

	$args['page_title'] = '忘记密码';
	$args['url_signup'] = $this->router->pathFor('dashboard_signup');
	$args['url_signin'] = $this->router->pathFor('dashboard_signin');
	return $this->view->render($response, 'd_forgot-password.mustache', $args);

})->setName('dashboard_forgot_password');

$app->get('/dashboard/blank', function (Request $request, Response $response, array $args) {

	$args['page_title'] = '空白页面';
	return $this->view->render($response, 'd_blank.mustache', $args);

})->setName('dashboard_blank');