<?php

namespace dominus77\iconpicker\assets;

use yii\web\AssetBundle;

/**
 * Class IconPickerAsset
 * @package dominus77\iconpicker\assets
 */
class IconPickerAsset extends AssetBundle
{
    public static $publishPath = '@vendor/dominus77/iconpicker/assets/src';

    public $sourcePath;

    public $css = [];

    public $js = [];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/src';
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css[] = 'css/fontawesome-iconpicker' . $min . '.css';
        $this->js[] = 'js/fontawesome-iconpicker' . $min . '.js';
    }

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'dominus77\iconpicker\assets\FontAwesomeAsset'
    ];
}