<?php
namespace App\Config;
/**
 * @Author: suifengtec
 * @Date:   2017-11-06 02:51:30
 * @Last Modified by:   suifengtec
 * @Last Modified time: 2017-11-06 03:14:16
 **/
/**
 * General Config for Slim App.
 */
class General {

	function get() {
		return [
			'settings' => [
				'displayErrorDetails' => true,
				'mustache' => [
					'views_dir' => __DIR__ . '/../../templates/mustache',
					'partials_dir' => __DIR__ . '/../../templates/mustache/partials',
					'cache_dir' => __DIR__ . '/../../cache/mustache',
				],

			],

		];
	}
}