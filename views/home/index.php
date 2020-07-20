<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
if (Yii::$app->user->isGuest): ?>
<section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <div class="row agile-abt-info text-left">
            <div class="col-lg-6 agile-abt-info ">
                <h2>Добро пожаловать<br>
                </h2>
                <div class="info-sub-w3 pb-lg-4 pb-md-3 pb-sm-3 pb-3">
                    <p>Фитнес-центр «Южный» основан и стабильно работает с 2015 года. За многолетнюю историю
                        клуба множество постоянных клиентов добились высоких результатов в построении тела,
                        приобрели высокие силовые показатели и расширили функциональные возможности своего организма.
                    </p>
                </div>
                <div class="info-sub-w3">
                    <p>Фитнес-центр оборудован профессиональными импортными тренажёрами премиум-сегмента DHZ Fitness,
                        которые соответствуют самым высоким мировым стандартам и имеют TUV сертификацию.
                        Высокое качество оборудования делает тренировки максимально эффективными, а достижение
                        Ваших тренировочных целей безопасным и максимально комфортным.
                    </p>
                </div>

            </div>
            <div class="col-lg-6 abut-middle-grid">
                <div class="row text-center about-top-right mb-lg-4 mb-md-3 mb-sm-3">
                    <div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
                        <div class="white-shadow rounded">
                            <div class="white-left">
                                <span class="fab fa-slideshare banner-icon" aria-hidden="true"></span>
                            </div>
                            <div class="white-right">
                                <h4>Вес уходит</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
                        <div class="white-shadow rounded">
                            <div class="white-left">
                                <span class="fas fa-users banner-icon" aria-hidden="true"></span>
                            </div>
                            <div class="white-right">
                                <h4>Группа</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
                        <div class="white-shadow rounded">
                            <div class="white-left">
                                <span class="fas fa-bullhorn banner-icon"></span>
                            </div>
                            <div class="white-right">
                                <h4>Level Up</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center about-mid-right mb-lg-4 mb-md-3 mb-sm-3">
                    <div class="col-lg-6 col-md-6 col-sm-6 fit-about-agile-grid">
                        <div class="white-shadow rounded">
                            <div class="white-left">
                                <span class="fab fa-superpowers banner-icon" ></span>
                            </div>
                            <div class="white-right">
                                <h4>Прокачивай тело</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 fit-about-agile-grid">
                        <div class="white-shadow rounded">
                            <div class="white-left">
                                <span class="fas fa-bicycle banner-icon"></span>
                            </div>
                            <div class="white-right">
                                <h4>Кардио</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-center about-down-right">
                    <div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
                        <div class="white-shadow rounded">
                            <div class="white-left">
                                <span class="fab fa-cloudversify banner-icon"></span>
                            </div>
                            <div class="white-right">
                                <h4>Белковый план</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
                        <div class="white-shadow rounded">
                            <div class="white-left">
                                <span class="fab fa-whmcs banner-icon" aria-hidden="true"></span>
                            </div>
                            <div class="white-right">
                                <h4>Оставайся в форме</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
                        <div class="white-shadow rounded">
                            <div class="white-left">
                                <span class="fas fa-fire banner-icon" aria-hidden="true"></span>
                            </div>
                            <div class="white-right">
                                <h4>Сжигай калории</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service py-lg-4 py-md-3 py-sm-3 py-3 mb-5" id="service">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Наш сервис</h3>
        <div class="row service-abt-info text-left">

            <div class="col-lg-7 w3layouts-service-right">
                <div class="ser-list-using-agile">
                    <h4>Что мы предлагаем</h4>
                    <div class="info-sub-w3">
                        <p>Тренер составляет программу тренировок, подходящую конкретно Вам, консультирует по поводу
                            питания, а также на любые другие темы, связанные с фитнесом и построением тела.
                        </p>
                    </div>
                </div>
                <div class="row mt-lg-4 mt-md-3 mt-3">
                    <div class="col-md-6 col-sm-6 ser-w3l-jst-abt ">
                        <div class="ser-back-ground p-lg-4 p-md-4 p-sm-3 p-3 clo-ser-one">
                            <div class="row ">
                                <div class="col-md-4 ser-wthree-icon">
                                    <span class="fas fa-users banner-icon" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-8 ser-agile-para px-0">
                                    <h5>Тренеры</h5>
                                    <p>Вы сами можете выбрать себе профессионального тренера.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 ser-w3l-jst-abt">
                        <div class="ser-back-ground p-lg-4 p-md-4 p-sm-3 p-3 clo-ser-two">
                            <div class="row ">
                                <div class="col-md-4 ser-wthree-icon">
                                    <span class="fas fa-fire banner-icon" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-8 ser-agile-para px-0">
                                    <h5>Контроль </h5>
                                    <p>Консультации по питанию и режиму дня, для лучшего результата.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-lg-4 mt-md-3 mt-3">
                    <div class="col-md-6 col-sm-6 ser-w3l-jst-abt ">
                        <div class="ser-back-ground p-lg-4 p-md-4 p-sm-3 p-3 clo-ser-three">
                            <div class="row ">
                                <div class="col-md-4 ser-wthree-icon">
                                    <span class="fa fa-file-excel banner-icon" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-8 ser-agile-para px-0">
                                    <h5>Программа </h5>
                                    <p>Индивидуальная программа тренировок, храниться на серверах, для удобного взаимодействия. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 ser-w3l-jst-abt">
                        <div class="ser-back-ground p-lg-4 p-md-4 p-sm-3 p-3 clo-ser-four">
                            <div class="row ">
                                <div class="col-md-4 ser-wthree-icon">
                                    <span class="fab fa-whmcs banner-icon" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-8 ser-agile-para px-0">
                                    <h5>Калькулятор калорий </h5>
                                    <p>Расчет суточной нормы калорий, на основе индивидуальных расчетов.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ser-img text-center">
                <img src="/images/sc1.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>

</section>

<?php elseif (!Yii::$app->user->isGuest): ?>

<section class="events py-lg-4 py-md-3 py-sm-3 py-3" id="events">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Статьи</h3>
        <div class="row">
        <?php
        foreach ($news as $new):
        ?>
            <div class="card mb-3 ml-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/images/news/<?=$new['image']?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><?=$new['title']?></h3>
                            <h5 class="card-title"><?=$new['description']?></h5>
                            <p class="card-text"><?=mb_substr($new['content'], 0, 150)?>...</p>
                            <br>
                            <a href="<?=Url::to(['home/article', 'id' => $new['id']])?>" class="btn btn-primary">Читать...</a>

                            <br><br>
                            <p class="card-text"><small class="text-muted"><?=$new['username']?> | <?=$new['date']?></small></p>
                        </div>
                    </div>
                </div>
            </div>

        <?endforeach;?>
        </div>

</section>

<!--пагинация-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <?= LinkPager::widget([
                'pagination' => $pages,
                'hideOnSinglePage' => true,
                'maxButtonCount' => 3,

                // Настройки контейнера пагинации
                'options' => [
                    'tag' => 'div',
                    'class' => 'pagination pagination-sm',
                    'id' => 'pager-container',
                ],

                // Настройки классов css для ссылок
                'linkOptions' => ['class' => 'page-link'],
                'activePageCssClass' => 'page-item active',
                'disabledPageCssClass' => 'mydisable',

                // Настройки для навигационных ссылок
                'prevPageCssClass' => 'mypre',
                'nextPageCssClass' => 'mynext',
                'firstPageCssClass' => 'myfirst',
                'lastPageCssClass' => 'mylast',


            ]) ?>
        </div>
    </div>
</div>
<?endif;?>

<!--МОТИВАЦИЯ-->
<section class="statement py-lg-4 py-md-3 py-sm-3 py-3" id="statement">

    <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
        <div class="w3ls-statement-list text-center">
            <h4>СТАНЬ САМОЙ СИЛЬНОЙ ЛИЧНОСТЬЮ<br>
                СОХРАНЯЙ СПОКОЙСТВИЕ И УСЕРДНО РАБОТАЙ</h4>
        </div>
    </div>
</section >


