<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NutModel */

$this->title = 'Create Nut Model';
$this->params['breadcrumbs'][] = ['label' => 'Nut Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nut-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
