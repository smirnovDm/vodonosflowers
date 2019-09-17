<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StateSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Области';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alias',
            //'country_id',
            'nameRu',
            'nameua',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
