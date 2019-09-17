<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AreaSearcModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Area Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Area Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'country_id',
            'state_id',
            'nameRu',
            'nameUa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
