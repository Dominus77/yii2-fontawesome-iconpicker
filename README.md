# yii2-fontawesome-iconpicker

[![Latest Stable Version](https://poser.pugx.org/dominus77/yii2-fontawesome-iconpicker/v/stable)](https://packagist.org/packages/dominus77/yii2-fontawesome-iconpicker)
[![License](https://poser.pugx.org/dominus77/yii2-fontawesome-iconpicker/license)](https://github.com/Dominus77/yii2-fontawesome-iconpicker/blob/master/LICENSE.md)
[![Total Downloads](https://poser.pugx.org/dominus77/yii2-fontawesome-iconpicker/downloads)](https://packagist.org/packages/dominus77/yii2-fontawesome-iconpicker)

Renders a [Font Awesome Icon Picker](https://farbelous.github.io/fontawesome-iconpicker/) widget for Yii2.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require dominus77/yii2-fontawesome-iconpicker "*"
```

or add

```
"dominus77/yii2-fontawesome-iconpicker": "*"
```

to the require section of your `composer.json` file.

## Usage

Once the extension is installed, simply use it in your code by  :

```
<?php
...
use dominus77\iconpicker\IconPicker;
...
?>

<?= $form->field($model, 'icon')->widget(IconPicker::className(), []); ?>

```

Client Options:
```
<?= $form->field($model, 'icon')->widget(IconPicker::className(), [
    'clientOptions' => [
        'title' => 'Font Awesome Icon', // Popover title (optional) only if specified in the template
        'selected' => false, // use this value as the current item and ignore the original
        'defaultValue' => false, // use this value as the current item if input or element value is empty
        'placement' => 'bottom', // (has some issues with auto and CSS). auto, top, bottom, left, right
        'collision' => 'none', // If true, the popover will be repositioned to another position when collapses with the window borders
        'animation' => true, // fade in/out on show/hide ?
        //hide iconpicker automatically when a value is picked. it is ignored if mustAccept is not false and the accept button is visible
        'hideOnSelect' => false,
        'showFooter' => false,
        'searchInFooter' => false, // If true, the search will be added to the footer instead of the title'
        'mustAccept' => false, // only applicable when there's an iconpicker-btn-accept button in the popover footer
        'selectedCustomClass' => 'bg-primary', // Appends this class when to the selected item
        //'icons' => [], // list of icon classes (declared at the bottom of this script for maintainability)
        'fullClassFormatter' => new \yii\web\JsExpression("function(val){return 'fa ' + val;}"),
        'input' => 'input,.iconpicker-input', // children input selector
        'inputSearch' => false, // use the input as a search box too?
        'container' => false, //  Appends the popover to a specific element. If not set, the selected element or element parent is used
        'component' => '.input-group-addon,.iconpicker-component', // children component jQuery selector or object, relative to the container element
        // Plugin templates:
        'templates' => [
            'popover' => '<div class="iconpicker-popover popover"><div class="arrow"></div><div class="popover-title"></div><div class="popover-content"></div></div>',
            'footer' => '<div class="popover-footer"></div>',
            'buttons' => '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button> <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
            'search' => '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
            'iconpicker' => '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
            'iconpickerItem' => '<a role="button" href="#" class="iconpicker-item"><i></i></a>',
        ],
    ],
]); ?>
```
## Further Information
Please, check the [Font Awesome Icon Picker](https://github.com/farbelous/fontawesome-iconpicker)

## License
The BSD License (BSD). Please see [License File](https://github.com/Dominus77/yii2-fontawesome-iconpicker/blob/master/LICENSE.md) for more information.
