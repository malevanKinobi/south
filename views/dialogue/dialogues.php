<?php
use yii\helpers\Url;
 ?>

<div class="container mt-5" style="border: 5px solid #F5F5F5">
    <div class="row justify-content-center mt-4 mb-4">
        <div class="col-lg-11">

            <?php if (!empty($coach)):?>
            <ul class="list-unstyled">
                <li class="media">
                    <img src="/images/coaches/<?=$coach['photo']?>" width="50" height="50" class="mr-3" alt="...">
                    <div class="media-body" style="border-bottom: 5px solid #F5F5F5; border-top: 5px solid #F5F5F5;">
                        <h5 class="mt-0 mb-1"><?=$coach['name']?></h5>
                        <a href="<?=Url::to(['dialogue/dialogue', 'id' => $coach['id_e']])?>">Перейти к диалогу>>></a>
                    </div>
                </li>
            </ul>
            <?else:?>
            <h1>Нет активных диалогов...</h1>
            <?endif;?>
        </div>

    </div>

</div>

