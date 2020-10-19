<?php

namespace dominus77\iconpicker;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package dominus77\iconpicker
 */
class FontAwesomeAsset extends AssetBundle
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
     * @inheritdoc
     */
    public function init()
    {
        set_time_limit(0);
        parent::init();
        $this->sourcePath = '@vendor/fortawesome/font-awesome';
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css = [
            'css/all' . $min . '.css'
        ];
    }
}
