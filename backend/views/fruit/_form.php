<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FruitModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fruit-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sale')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'describtion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

<!--    --><?//= $form->field($model, 'image')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
