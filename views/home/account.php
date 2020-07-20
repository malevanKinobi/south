<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="container mt-5 mb-5">

    <h1 class="mb-2"><?=$userData['name']?></h1>
    <h3 class="mb-4">Настройка: </h3>
        <div class="row">
            <div class="col-lg-3 mb-3">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Информация о вас</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Информация о тренере</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Калькулятор калорий</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
                    <h4 id="list-item-1" class="mb-2">Информация о вас: </h4>
                    <hr>

                    <p><b>Имя:</b> <i><?=$userData['name']?></i></p>
                    <p><b>Пол:</b> <i><?=$userData['gender']?></i></p>
                    <p><b>Возраст:</b> <i><?=date('Y') - $userData['age']?></i></p>
                    <p><b>Вес:</b> <i><?=$userData['weight']?> кг</i></p>
                    <p><b>Рост:</b> <i><?=$userData['height']?> см</i></p>
                    <p><b>Личный тренер:</b> <i><?=$coach['name']?></i></p>

                    <hr>
                    <h4 id="list-item-2" class="mt-2">Информация о тренере</h4>
                    <hr>
                    <p><b>Имя:</b> <i><?=$coach['name']?></i></p>
                    <p><b>Номер телефона:</b> <i><?=$coach['phone']?></i></p>
                    <p><b>VK: </b> <i><a href="<?=$coach['vk']?>"><?=$coach['vk']?></a></i></p>
                    <p><b>E-Mail:</b> <i><a href="<?=$coach['email']?>"><?=$coach['email']?></a></i></p>
                    <hr>
                    <h4 id="list-item-3">Калькулятор калорий</h4>
                    <hr>
                    <?php
                    if (!empty($result)):
                    ?>
                    <h5 class="mb-3">Ваша норма потребления каллорий в сутки: <?=$result?> калл</h5>
                    <?endif;?>
                    <?php $form = ActiveForm::begin();?>

                    <?= $form->field($model, 'weight')->input('text', ['value' => $userData['weight']]) ?>

                    <?= $form->field($model, 'height')->input('text', ['value' => $userData['height']]) ?>

                    <?= $form->field($model, 'age')->input('text', ['value' => $userData['age']]) ?>

                    <?= $form->field($model, 'gender')->dropDownList([
                        '1' => 'Муж',
                        '0' => 'Жен',
                    ]);?>

                    <?= $form->field($model, 'active')->dropDownList([
                        '1' => 'минимальная активность',
                        '1.2' => 'слабая активность',
                        '1.3' => 'нагрузка 1–3 раза в неделю',
                        '1.6' => 'спорт 3–5 раз в неделю',
                        '1.7' => 'спорт ежедневно',
                        '1.9' => 'сильная нагрузка, тренировки 2 раза в сутки',
                    ]);?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

        </div>
</div>
</div>
</div>
<section class="statement py-lg-4 py-md-3 py-sm-3 py-3" id="statement">

    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <div class="w3ls-statement-list text-center">
            <h4>СТАНЬ САМОЙ СИЛЬНОЙ ЛИЧНОСТЬЮ<br>
                СОХРАНЯЙ СПОКОЙСТВИЕ И УСЕРДНО РАБОТАЙ</h4>
        </div>
    </div>
</section >

