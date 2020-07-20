<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DataU */

$this->title = 'Create Data U';
$this->params['breadcrumbs'][] = ['label' => 'Data Us', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-u-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
