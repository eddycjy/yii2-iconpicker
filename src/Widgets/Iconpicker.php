<?php

namespace Iconpicker\Widgets;

use yii\web\View;
use yii\helpers\Html;
use yii\widgets\InputWidget;

class Iconpicker extends InputWidget
{
	public $id;

	public $options = [];

	public $htmlOptions = []; 

	public $pickerClass = '';

	public $htmlIdPrefix = '';

	private $defaulthtmlIdPrefix = 'iconpicker_';

	private $defaultPickerClass = 'btn btn-default';

	private $clientOptions = [];

	private $defaultOptions = [
		'align'		 			=> 'center',
		'arrowClass' 			=> 'btn-primary',
		'arrowPrevIconClass' 	=> 'glyphicon glyphicon-arrow-left',
		'arrowNextIconClass' 	=> 'glyphicon glyphicon-arrow-right',
		'cols'    				=> 4,
		'footer'  				=> true,
		'header'  				=> true,
		'icon'	  				=> '',
		'iconset' 				=> 'fontawesome',
		'labelHeader' 			=> '{0} / {1}',
		'labelFooter' 			=> '{0} - {1} of {2}',
		'placement' 			=> 'bottom',
		'rows' 					=> 4,
		'search' 				=> true,
		'searchText' 			=> 'Search icon',
		'selectedClass' 		=> 'btn-warning',
		'unselectedClass' 		=> 'btn-default',
	];

	public function init()
	{
		$this->clientOptions = array_merge($this->defaultOptions, $this->options);

		if(empty($this->id) && $this->hasModel()) {
			$this->id = Html::getInputId($this->model, $this->attribute);
		}

		if(empty($this->htmlOptions['id'])) {
			if(empty($this->htmlIdPrefix)) {
				$this->htmlIdPrefix = $this->defaulthtmlIdPrefix;
			}

			$this->htmlOptions['id'] = $this->htmlIdPrefix . $this->getId();
		}

		if(empty($this->pickerClass)) {
			$this->pickerClass = $this->defaultPickerClass;
		}

		if($this->hasModel()) {
			$this->clientOptions['icon'] = $this->model->{$this->attribute};
		}

		parent::init();
	}

	public function run()
	{
		$this->registerScript($this->getAssetNamespace());

		if ($this->hasModel()) {
            $inputHidden = Html::activeHiddenInput($this->model, $this->attribute, $this->htmlOptions);
        } else {
            $inputHidden = Html::hiddenInput($this->name, $this->value, $this->htmlOptions);
        }

        $iconpickerButton = Html::button('', [
        	'id'    => $this->id,
        	'class' => $this->pickerClass,
        ]);
      
        return Html::tag('div', $iconpickerButton . $inputHidden, []);
	}

	protected function getAssetNamespace()
	{
		return 'Iconpicker\\Assets' . '\\' . ucfirst($this->clientOptions['iconset']) . 'Asset';
	}

	protected function registerScript($namespace)
	{
		$namespace::register($this->view);

		$script[] = "$('#" . $this->id . "').iconpicker(" . json_encode($this->clientOptions) . ");";
		$script[] = "$('#" . $this->id . "').on('change', function(e) { $('#" . $this->htmlOptions['id'] . "').val(e.icon);})";;

		$this->view->registerJs(implode("\n", $script), View::POS_READY);
	}

}