<?php

use app\modules\admin\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Programs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programs-form">

    <?php
//        $allUsers = User::find()->where(['!=', 'role', 5])->andWhere(['!=', 'role', 10])->indexBy('id')->asArray()->all();
//        $defaultUsers =  \yii\helpers\ArrayHelper::getColumn($allUsers, 'id');
//        $users = \app\models\UserData::find()->asArray()->where(['in', 'user_id', $defaultUsers])->all();
//        $user =  \yii\helpers\ArrayHelper::map($users, 'user_id', 'name');
        $allUsers = \app\modules\admin\models\DataU::find()
        ->where(['coach_sub_id' => Yii::$app->user->getId()])->all();
        $user =  \yii\helpers\ArrayHelper::map($allUsers, 'user_id', 'name');
    ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList($user);?>

    <?= $form->field($model, 'prog_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->input('date') ?>

    <?= $form->field($model, 'file_name')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
