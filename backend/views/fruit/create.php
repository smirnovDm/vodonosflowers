<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FruitModel */

$this->title = 'Создай фруктовый букет';
$this->params['breadcrumbs'][] = ['label' => 'Fruit Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fruit-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
