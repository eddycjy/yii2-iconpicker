<?php

namespace Iconpicker\Assets;

use Iconpicker\Widgets\IconpickerAsset;

class MapiconAsset extends IconpickerAsset
{
	public function init()
	{
		$this->css[] = 'icon-fonts/map-icons-2.1.0/css/map-icons.min.css';
		
		parent::init();
	}
}