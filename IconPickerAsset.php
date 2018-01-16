<?php

namespace dominus77\iconpicker;

use yii\web\AssetBundle;

/**
 * Class IconPickerAsset
 * @package dominus77\iconpicker
 */
class IconPickerAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var array
     */
    public $css = [];

    /**
     * @var array
     */
    public $js = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = '@bower/fontawesome-iconpicker/dist';
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css[] = 'css/fontawesome-iconpicker' . $min . '.css';
        $this->js[] = 'js/fontawesome-iconpicker' . $min . '.js';
    }

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'dominus77\iconpicker\FontAwesomeAsset'
    ];
}
