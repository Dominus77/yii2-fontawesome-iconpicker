<?php

namespace dominus77\iconpicker;

use yii\web\AssetBundle;

/**
 * Class IconPickerAsset
 * @package dominus77\iconpicker
 */
class IconPickerAsset extends AssetBundle
{
    public $sourcePath;

    public $css = [];

    public $js = [];

    public function init()
    {
        $this->sourcePath = '@bower/fontawesome-iconpicker/dist';
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css[] = 'css/fontawesome-iconpicker' . $min . '.css';
        $this->js[] = 'js/fontawesome-iconpicker' . $min . '.js';
    }

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'dominus77\iconpicker\FontAwesomeAsset'
    ];
}