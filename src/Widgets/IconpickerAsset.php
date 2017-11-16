<?php

namespace Iconpicker\Widgets;

use yii\web\AssetBundle;

class IconpickerAsset extends AssetBundle
{
	public $css = [
		'dist/css/bootstrap-iconpicker.css',
	];

	public $js = [
		'dist/js/bootstrap-iconpicker-iconset-all.js',
		'dist/js/bootstrap-iconpicker.js'
	];


	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];

	public function init()
	{
		$this->sourcePath = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'Static';
	}
}