<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FruitModel */

$this->title = 'Update Fruit Model: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fruit Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fruit-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
