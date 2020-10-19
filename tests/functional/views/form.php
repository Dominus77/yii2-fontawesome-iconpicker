<?php

use dominus77\iconpicker\IconPicker;
use functional\models\Demo;
use yii\widgets\ActiveForm;

/** @var $this yii\web\View */
/** @var $model Demo */
?>

<div class="test-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'icon')->widget(IconPicker::class, [
        'options' => [
            'class' => 'form-control icp'
        ],
        'clientOptions' => [
            'title' => 'Font Awesome Icon'
        ]
    ]) ?>
    <?php ActiveForm::end(); ?>
</div>
