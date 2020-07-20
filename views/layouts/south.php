<?php


use app\assets\AppAsset;
use yii\helpers\Html;

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
<div class="header-outs" id="home">
    <div class="header-w3layouts">

        <div class="headr-title">
            <div class="hedder-up">
                <h1><a class="navbar-brand" href="<?=\yii\helpers\Url::home()?>">South-Gum</a></h1>

            </div>
            <div class="header-call">
                <span class="fas fa-phone-volume brand-icon"></span>
                <h4>+7-929-329-05-66</h4>
            </div>
            <div class="clearfix"></div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                <ul class="navbar-nav nav-pills nav-fill">
                    <li class="nav-item <?=active("/home/index")?>">
                        <a class="nav-link" href="<?=\yii\helpers\Url::home()?>">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?=active("/home/about")?>">
                        <a href="<?=\yii\helpers\Url::to(['home/about'])?>" class="nav-link ">О нас</a>
                    </li>
                    <?php if (!Yii::$app->user->isGuest): ?>
                        <li class="nav-item <?=active("/home/programs")?>">
                            <a href="<?=\yii\helpers\Url::to(['home/programs'])?>" class="nav-link ">Программы</a>
                        </li>


                        <li class="nav-item <?=active("/home/account")?>">
                            <a href="<?=\yii\helpers\Url::to(['home/account'])?>" class="nav-link">Личный кабинет</a>
                        </li>
                        <?php
                        if (!empty(\app\models\Dialogue::findDialogue())):
                        ?>
                        <li class="nav-item <?=active("/dialogue/dialogues")?>">
                            <a href="<?=\yii\helpers\Url::to(['dialogue/dialogues'])?>" class="nav-link">Сообщения</a>
                        </li>
                        <?endif;?>

                    <?endif;?>



                    <li class="nav-item <?=active("/home/contact")?>">
                        <a href="<?=\yii\helpers\Url::to(['home/contact'])?>" class="nav-link">Контакты</a>
                    </li>
                    <?php if (Yii::$app->user->isGuest): ?>
                        <li class="nav-item <?=active("/auth/login")?>">
                            <a href="<?= \yii\helpers\Url::to(['auth/login'])?>" class="nav-link">Войти</a>
                        </li>
                    <?else: ?>
                    <li class="nav-item <?=active("/auth/logout")?>">
                        <a href="<?= \yii\helpers\Url::to(['auth/logout'])?>" class="nav-link"> Выход <i>(<?=Yii::$app->user->identity->username?>)</i> </a>
                    </li>
                    <?endif;?>
                </ul>
            </div>

        </nav>


    </div>

    <div class="inner_page-banner one-img">
    </div>

    <div class="using-border py-3">
        <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
                <li>
                    <a href="#"><?=\yii\helpers\Url::current()?></a>

                </li>

            </ul>
        </div>
    </div>

    <div class="clearfix"></div>
</div>

<?=$content?>


<?php
$coach = \app\models\Coach::getCurrentCoach();
if (\yii\helpers\Url::to() !== '/dialogue/dialogue?id='. $coach['id_e']):
?>
<section class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <div class="row footer-agile-grids text-center">
            <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                <h4>О нас</h4>
                <div class="abt-footer">
                    <p>Сотрудникам фитнес-центра необходимо делать акцент на индивидуальный подход к каждому,
                        предлагая клиенту рассмотреть весь спектр предоставляемых услуг...</p>
                    <h5><a href="<?=\yii\helpers\Url::to(['home/about'])?>">Читать...</a></h5>
                </div>
                <div class="bottom-social pt-3">
                    <ul>
                        <li>
                            <a href="https://vk.com/eltsov_bb">
                                <span class="fab fa-vk"></span>
                            </a>
                        </li>
                        <li>
                            <a href="infostasis@gmail.com">
                                <span class="fab fa-google-plus-g"></span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                <h4> Часы работы</h4>
                <div class="wls-hours-list">
                    <ul>
                        <li class="d-flex">Понедельник   <span class="time ml-auto"> 9:00-22:00</span></li>
                        <li class="d-flex">Вторник  <span class="time ml-auto"> 9:00-22:00</span></li>
                        <li class="d-flex">Среда <span class="time ml-auto"> 9:00-22:00</span></li>
                        <li class="d-flex">Четверг <span class="time ml-auto"> 9:00-22:00</span></li>
                        <li class="d-flex">Пятница   <span class="time ml-auto"> 9:00-22:00</span></li>
                        <li class="d-flex">Суббота <span class="time ml-auto"> 10:00-15:00</span></li>
                        <li class="d-flex">Воскресенье   <span class="time ml-auto"> 10:00-15:00</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                <h4>Навигация</h4>
                <nav class="border-line">
                    <ul class="nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=\yii\helpers\Url::home()?>">Главная <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['home/about'])?>" class="nav-link ">О нас</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['home/contact'])?>" class="nav-link">Контакты</a>
                        </li>
                        <?php
                        if (!Yii::$app->user->isGuest):
                        ?>
                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['home/programs'])?>" class="nav-link ">Программы</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?=\yii\helpers\Url::to(['home/account'])?>" class="nav-link ">Личный кабинет</a>
                        </li>
                        <?endif;?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<?endif;?>
<footer>
    <p>©<?=date('Y')?> South Gum</p>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
