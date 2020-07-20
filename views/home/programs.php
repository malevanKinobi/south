<!--service-->

<section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Актуальные программы тренировок</h3>
        <div class="row agile-service-grid pt-lg-4 pt-md-4 pt-3">
            <?php
            foreach ($programs as $program):
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 w3layouts-service-list text-center">
                <div class="white-shadow">
                    <div class="text-wls-ser-bake">
                        <span class="fas fa-fire banner-icon"></span>
                    </div>
                    <div class="ser-inner-info">
                        <h4><?=$program['prog_name']?></h4>
                        <p>Дата окончания: <?=$program['date']?></p>
                        <p>Описание программы: <?=mb_substr($program['description'], 0, 150)?>...</p>
                    </div>
                    <div class="outs-agile-buttn mt-lg-3 mt-2">
                        <a href="<?=\yii\helpers\Url::to(['home/download', 'id' => $program['id']])?>">Скачать</a>
                    </div>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>

<section class="statement py-lg-4 py-md-3 py-sm-3 py-3" id="statement">

    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <div class="w3ls-statement-list text-center">
            <h4>СТАНЬ САМОЙ СИЛЬНОЙ ЛИЧНОСТЬЮ<br>
                СОХРАНЯЙ СПОКОЙСТВИЕ И УСЕРДНО РАБОТАЙ</h4>
        </div>
    </div>
</section >
