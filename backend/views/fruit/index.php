<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\FruitModel;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FruitSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Каталог фруктовых букетов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fruit-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'price',
            'sale',
            'describtion:ntext',
            'status',
            [
                    'format' => 'html',
                    'label' => 'Image',
                    'value' => function($data){
                        return Html::img($data->getImage(), ['width' => 200, 'height' => 250,]);
                    }
            ],
            //'image:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
