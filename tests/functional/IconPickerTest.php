<?php

namespace functional;

use functional\models\Demo;
use dominus77\iconpicker\IconPicker;

/**
 * Class IconPickerTest
 * @package functional
 */
class IconPickerTest extends TestCase
{
    public function testIconPickerWidget()
    {
        $model = new Demo();
        $widget = IconPicker::widget([
            'name' => 'icon',
            'model' => $model,
        ]);
        self::assertContains('', $widget);
    }

    public function testIconPickerForm()
    {
        $model = new Demo();
        $view = $this->getView();
        $content = $view->renderFile('@functional/views/form.php', ['model' => $model]);
        self::assertContains('<input type="text" id="demo-icon" class="form-control icp" name="Demo[icon]">', $content);
    }
}
