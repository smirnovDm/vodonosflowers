<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AreaModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="area-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country_id')->textInput() ?>

    <?= $form->field($model, 'state_id')->dropDownList($arrState, ['prompt' => '']) ?>

    <?= $form->field($model, 'nameRu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameUa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
