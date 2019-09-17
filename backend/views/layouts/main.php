<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Мастерская Анны Водонос',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
    <?php
           if(!Yii::$app->user->isGuest && Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId())['admin']->name == 'admin') {
               ?>
               <div class="sidebar" id="sidebar">
                   <ul class="nav nav-list">
                       <li>
                           <a href="/fruit">
                               <i class="icon-question"></i>
                               <span class="menu-text">Фруктовые</span>
                           </a>
                       </li>
                       <li>
                           <a href="/driedfruit">
                               <i class="icon-question"></i>
                               <span class="menu-text">Сухофруктовые</span>
                           </a>
                       </li>

                       <li>
                           <a href="/meat">
                               <i class="icon-question"></i>
                               <span class="menu-text">Мясные</span>
                           </a>
                       </li>

                       <li>
                           <a href="/sweet">
                               <i class="icon-question"></i>
                               <span class="menu-text">Сладкие</span>
                           </a>
                       </li>

                       <li>
                           <a href="/nut">
                               <i class="icon-question"></i>
                               <span class="menu-text">Ореховые</span>
                           </a>
                       </li>


                       <li>
                           <a href="/box">
                               <i class="icon-question"></i>
                               <span class="menu-text">Боксы</span>
                           </a>
                       </li>
                       <li>
                           <a href="/strawberry">
                               <i class="icon-question"></i>
                               <span class="menu-text">Клубника в шоколаде</span>
                           </a>
                       </li>
                       <li>
                           <a href="/cook">
                               <i class="icon-question"></i>
                               <span class="menu-text">Пряники</span>
                           </a>
                       </li>
                   </ul>
                   <div class="sidebar-collapse" id="sidebar-collapse">
                       <i class="icon-double-angle-left"></i>
                   </div>
               </div>
               <?php
           }
                ?>

</div>

</div>
<?= Alert::widget() ?>
        <?= $content ?>

</div>
<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--        <p class="pull-left">&copy; --><?//= Html::encode(Yii::$app->name) ?><!-- --><?//= date('Y') ?><!--</p>-->
<!---->
<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
