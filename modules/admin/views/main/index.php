
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
        <div class="inner">
            <h3><?=$countNews?></h3>

            <p>Статьи</p>
        </div>
        <div class="icon">
            <i class="fa fa-text-width"></i>
        </div>
        <a href="<?=\yii\helpers\Url::to(['news/index'])?>" class="small-box-footer">Редактировать <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<?php
if (Yii::$app->user->identity->isAdmin()):
?>
<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-orange">
        <div class="inner">
            <h3><?=$countUser?></h3>

            <p>Клиенты</p>
        </div>
        <div class="icon">
            <i class="fa fa-users"></i>
        </div>
        <a href="<?=\yii\helpers\Url::to(['user/index'])?>" class="small-box-footer">Редактировать <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<?endif;?>