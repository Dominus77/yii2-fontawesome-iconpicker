<?php

namespace tests;

use tests\models\Post;
use dominus77\iconpicker\IconPicker;
use yii\widgets\ActiveForm;

/**
 * Class IconPickerTest
 * @package tests
 */
class IconPickerTest extends TestCase
{
    /**
     * @inheritdoc
     */
    public function testIconPickerWidget()
    {
        $model = new Post();
        $widget = IconPicker::widget([
            'name' => 'icon',
            'model' => $model,
        ]);
        $this->assertContains('', $widget);
    }

    /**
     * @inheritdoc
     */
    public function testIconPickerForm()
    {
        $model = new Post();
        $form = ActiveForm::begin();
        $field = $form->field($model, 'icon')->widget(IconPicker::className(), [
            'options' => [
                'class' => 'form-control icp'
            ],
            'clientOptions' => [
                'title' => 'Font Awesome Icon'
            ]
        ]);
        ActiveForm::end();
        $this->assertEquals($field->attribute, 'icon');
    }
}
