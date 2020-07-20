<?php
use yii\helpers\Url;
?>
<div class="container">
    <div class="row justify-content-center">

        <div class="card mt-5 mb-5" style="max-width: 640px";>
            <img  src="/images/news/<?=$article['image']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$article['description']?></h5>
                <p class="card-text"><?=$article['content']?></p>
                <p class="card-text"><small class="text-muted"><?=$article['username']?> | <?=$article['date']?></small></p>
                <br>
                <a href="<?=Url::home()?>"><--Назад</a>
            </div>
        </div>
    </div>

</div>






