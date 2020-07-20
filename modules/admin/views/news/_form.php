<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

<!--    --><?//= $form->field($model, 'date')->textInput() ?>

<!--    --><?//= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <fieldset>
        <legend>Загрузить изображение</legend>
        <?= $form->field($model, 'image')->fileInput(); ?>
        <?php
        if (!empty($model->image)) {
            $img = Yii::getAlias('@webroot') . '/images/news/' . $model->image;
            if (is_file($img)) {
                $url = Yii::getAlias('@web') . '/images/news/' . $model->image;
                echo 'Уже загружено ', Html::a('изображение', $url, ['target' => '_blank']);
            }
        }
        ?>
    </fieldset>
<!--    --><?//= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
