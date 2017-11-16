# yii2-iconpicker

# Requirements

- PHP >= 5.4.0
- Composer
- Yii2

# Installation

``` sh
composer require eddycjy/yii2-iconpicker "@dev"
```


# Usage

Config view/form

``` php
<?= $form->field($model, 'icon')->widget(\Iconpicker\Widgets\Iconpicker::className()) ?>
```

or widget

``` php
<?= \Iconpicker\Widgets\Iconpicker::widget([]) ?>
```

or config advanced ueditor reference [Docs](http://victor-valencia.github.io/bootstrap-iconpicker/)

``` php
<?= \Iconpicker\Widgets\Iconpicker::widget([
    'options' => [
        'align' => 'center',
        'arrowClass' => 'btn-primary',
        'arrowPrevIconClass' => 'glyphicon glyphicon-arrow-left',
        'arrowNextIconClass' => 'glyphicon glyphicon-arrow-right',
        'cols' => 4,
        'footer' => true,
        'header' => true,
        'icon' => '',
        'iconset' => 'fontawesome',
        'labelHeader' => '{0} / {1}',
        'labelFooter' => '{0} - {1} of {2}',
        'placement' => 'bottom',
        'rows' => 4,
        'search' => true,
        'searchText' => 'Search icon',
        'selectedClass' => 'btn-warning',
        'unselectedClass' => 'btn-default',
    ],
]) ?>
```

# License

MIT