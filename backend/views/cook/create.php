<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CookModel */

$this->title = 'Create Cook Model';
$this->params['breadcrumbs'][] = ['label' => 'Cook Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cook-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
