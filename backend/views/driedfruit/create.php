<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DriedfruitModel */

$this->title = 'Создай сухофруктовый букет';
$this->params['breadcrumbs'][] = ['label' => 'Driedfruit Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driedfruit-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
