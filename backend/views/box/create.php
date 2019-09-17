<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BoxModel */

$this->title = 'Create Box Model';
$this->params['breadcrumbs'][] = ['label' => 'Box Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
