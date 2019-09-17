<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StrawberryModel */

$this->title = 'Create Strawberry Model';
$this->params['breadcrumbs'][] = ['label' => 'Strawberry Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="strawberry-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
