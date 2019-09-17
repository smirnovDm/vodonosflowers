<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MeatModel */

$this->title = 'Create Meat Model';
$this->params['breadcrumbs'][] = ['label' => 'Meat Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meat-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
