<?php

use app\modules\admin\models\Coach;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DataU */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-u-form">
<?php
//    $allCoach = Coach::find()->indexBy('id')->asArray()->all();
//
//    $coach =  \yii\helpers\ArrayHelper::map($allCoach, 'id', 'name');
//    debug($coach,1);
    ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

<!--    --><?//= $form->field($model, 'coach_sub_id')->textInput() ?>

<!--    --><?//= $form->field($model, 'coach_sub_id')->dropDownList($coach);?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList([
        'Муж' => 'Муж',
        'Жен' => 'Жен',
    ]);?>
    <?= $form->field($model, 'age')->input('text') ?>
    <?= $form->field($model, 'weight')->input('text') ?>
<!---->
    <?= $form->field($model, 'height')->input('text') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
