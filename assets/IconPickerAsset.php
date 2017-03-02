<?php

namespace dominus77\iconpicker\assets;

use yii\web\AssetBundle;

/**
 * Class IconPickerAsset
 * @package dominus77\iconpicker\assets
 */
class IconPickerAsset extends AssetBundle
{
    public static $tinyPublishPath = '@vendor/cosmicdreams/fontawesome-iconpicker/dist';

    public $sourcePath;

    public $css = [];

    public $js = [];

    public function init()
    {
        $this->sourcePath = self::$tinyPublishPath;
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css[] = 'css/fontawesome-iconpicker' . $min . '.css';
        $this->js[] = 'js/fontawesome-iconpicker' . $min . '.js';
    }

    public $depends = [
        'yii\web\YiiAsset',
    ];
}