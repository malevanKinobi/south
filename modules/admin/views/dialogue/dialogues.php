<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Диалоги</h3>
                </div>
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        <?php foreach ($users as $user):?>
                        <li class="item">
                            <div class="product-info">
                                <a href="<?=\yii\helpers\Url::to(['dialogue/dialogue', 'id' => $user['user_id']])?>" class="product-title"><?=$user['name']?></a>
                            </div>
                        </li>
                        <?endforeach;?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>