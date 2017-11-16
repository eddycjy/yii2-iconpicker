<?php

namespace Iconpicker\Assets;

use Iconpicker\Widgets\IconpickerAsset;

class TypiconAsset extends IconpickerAsset
{
	public function init()
	{
		$this->css[] = 'https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css';
		
		parent::init();
	}
}