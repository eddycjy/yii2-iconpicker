<?php

namespace Iconpicker\Assets;

use Iconpicker\Widgets\IconpickerAsset;

class ElusiveiconAsset extends IconpickerAsset
{
	public function init()
	{
		$this->css[] = 'icon-fonts/elusive-icons-2.0.0/css/elusive-icons.min.css';
		
		parent::init();
	}
}