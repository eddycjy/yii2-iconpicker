<?php

namespace Iconpicker\Assets;

use Iconpicker\Widgets\IconpickerAsset;

class IoniconAsset extends IconpickerAsset
{
	public function init()
	{
		$this->css[] = 'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css';
		
		parent::init();
	}
}