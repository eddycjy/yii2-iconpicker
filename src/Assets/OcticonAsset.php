<?php

namespace Iconpicker\Assets;

use Iconpicker\Widgets\IconpickerAsset;

class OcticonAsset extends IconpickerAsset
{
	public function init()
	{
		$this->css[] = 'https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css';
		
		parent::init();
	}
}