<?php

namespace dominus77\iconpicker;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Class IconPicker
 * @package dominus77\iconpicker
 */
class IconPicker extends InputWidget
{
    /**
     * Options plugin
     * @var array
     * @see https://farbelous.github.io/fontawesome-iconpicker/
     */
    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
        $this->registerClientScript();
    }

    /**
     * Publish resource
     */
    protected function registerClientScript()
    {
        $js = [];
        $view = $this->getView();
        IconPickerAsset::register($view);
        $id = $this->options['id'];
        $options = Json::encode($this->clientOptions);
        $js[] = "$('#{$id}').iconpicker($options);";
        $view->registerJs(implode("\n", $js));
    }
}
