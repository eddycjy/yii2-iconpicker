<?php

namespace Iconpicker\Assets;

use Iconpicker\Widgets\IconpickerAsset;

class FontawesomeAsset extends IconpickerAsset
{
	public function init()
	{
		$this->css[] = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
		
		parent::init();
	}
}