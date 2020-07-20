<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Информация о клиентах';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-u-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить информацию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'coach_sub_id',
            'name',
            'gender',
            'age',
            'weight',
            'height',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
