<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DriedfruitModel */

$this->title = 'Update Driedfruit Model: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Driedfruit Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="driedfruit-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
