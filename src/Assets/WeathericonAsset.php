<?php

namespace Iconpicker\Assets;

use Iconpicker\Widgets\IconpickerAsset;

class WeathericonAsset extends IconpickerAsset
{
	public function init()
	{
		$this->css[] = 'https://cdnjs.cloudflare.com/ajax/libs/weather-icons/1.3.1/css/weather-icons.min.css';
		
		parent::init();
	}
}