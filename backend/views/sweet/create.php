<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SweetModel */

$this->title = 'Create Sweet Model';
$this->params['breadcrumbs'][] = ['label' => 'Sweet Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sweet-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
