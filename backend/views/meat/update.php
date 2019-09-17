<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MeatModel */

$this->title = 'Update Meat Model: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Meat Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meat-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
