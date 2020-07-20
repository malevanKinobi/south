<?php
use yii\helpers\Url;
?>
<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">О нас</h3>
        <div class="abt-inner-one pb-lg-3 pb-3 text-center">
            <div class=" abut-inner-right">
                <h4>Профессионалы своего дела</h4>
            </div>
            <div class="abut-inner-left mt-lg-4 mt-md-3 mt-2">
                <p> Широкий выбор направлений предоставляет возможность клиенту подобрать именно ту фитнес-программу, подходящую
                    конкретно ему, исходя из пола, возраста, состояния здоровья и общей физической подготовки клиента.
                    Сотрудникам фитнес-центра необходимо делать акцент на индивидуальный подход к каждому, предлагая клиенту
                    рассмотреть весь спектр предоставляемых услуг. <br>Фитнес-центр «Южный» основан и стабильно работает с 2015 года.
                    За многолетнюю историю клуба множество постоянных клиентов добились высоких результатов
                    в построении тела, приобрели высокие силовые показатели и расширили функциональные возможности своего организма.</p>
            </div>
        </div>
    </div>
</section>

<section class="team py-lg-4 py-md-3 py-sm-3 py-3 mb-5">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <?php

        if (empty($dataCoach)):?>
        <h3 class="title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Наши тренеры</h3>
        <div class="row">
            <?php foreach ($coaches as $coach): ?>

                <div class="col-lg-4 team-content text-center">

                    <img class="rounded-circle" src="/images/coaches/<?=$coach['photo']?>" width="140" height="140">
                    <h2 style="color: white"><?=$coach['name']?></h2>
                    <span class="pt-2">Фитнес тренер</span>
                    <?php
                    if (!Yii::$app->user->isGuest):
                    ?>
                    <div class="outs-agile-buttn mt-lg-3 mt-2 mb-3">
                        <a href="<?=Url::to(['home/set','id' => $coach['id_e']])?>">Подписаться</a>
                    </div>
                    <?endif;?>
                </div>
            <?endforeach;?>
        </div>
        <?php elseif (!empty($dataCoach)):?>
        <h3 class="title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Ваш тренер</h3>
        <div class="row">
                <div class="col-lg-12 team-content text-center">
                    <img class="rounded-circle" src="/images/coaches/<?=$dataCoach['photo']?>" width="140" height="140">
                    <h2 style="color: white"><?=$dataCoach['name']?></h2>
                    <span class="pt-2">Фитнес тренер</span>
                    <?php
                    if (!Yii::$app->user->isGuest):
                    ?>
                    <div class="outs-agile-buttn mt-lg-3 mt-2 mb-3">
                        <a href="<?=Url::to(['dialogue/dialogues'])?>">Написать</a>
                        <a href="<?=Url::to(['home/unset','id' => $dataCoach['id_e']])?>">Отписаться</a>
                    </div>
                    <?endif;?>
                </div>
            <?endif;?>
        </div>
    </div>
</section>
<section class="statement py-lg-4 py-md-3 py-sm-3 py-3" id="statement">

    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <div class="w3ls-statement-list text-center">
            <h4>СТАНЬ САМОЙ СИЛЬНОЙ ЛИЧНОСТЬЮ<br>
                СОХРАНЯЙ СПОКОЙСТВИЕ И УСЕРДНО РАБОТАЙ</h4>
        </div>
    </div>
</section >

