<?php

namespace dominus77\iconpicker\assets;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package dominus77\iconpicker\assets
 */
class FontAwesomeAsset extends AssetBundle
{
    public static $publishPath = '@vendor/fortawesome/font-awesome';

    public $sourcePath;

    public $css;

    public function init()
    {
        parent::init();
        $this->sourcePath = self::$publishPath;
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css = [
            'css/font-awesome' . $min . '.css'
        ];
    }
}