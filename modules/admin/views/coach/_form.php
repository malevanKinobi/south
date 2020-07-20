<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Coach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coach-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_e')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>



    <fieldset>
        <legend>Загрузить изображение</legend>
        <?= $form->field($model, 'photo')->fileInput(); ?>
        <?php
        if (!empty($model->image)) {
            $img = Yii::getAlias('@webroot') . '/images/coach/' . $model->image;
            if (is_file($img)) {
                $url = Yii::getAlias('@web') . '/images/coach/' . $model->image;
                echo 'Уже загружено ', Html::a('изображение', $url, ['target' => '_blank']);
            }
        }
        ?>
    </fieldset>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
