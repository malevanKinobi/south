<?php
use yii\helpers\Html;
?>
<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Наши контакты</h3>
        <div class="agile-info-para">
            <div class="row contactright pb-lg-5 pb-md-4 pb-sm-3 pb-3">
                <div class="col-lg-4 col-md-4  text-center contact-address-grid">
                    <div class="footer_grid_left">
                        <div class="contact_footer_grid_left text-center mb-3">
                            <h5> Адрес</h5>
                        </div>
                        <p>ул. Белинского, 9 <br></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center contact-address-grid">
                    <div class="footer_grid_left">
                        <div class="contact_footer_grid_left text-center mb-3">
                            <h5>Телефон</h5>
                        </div>
                        <p>+7-929-329-05-66</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center contact-address-grid">
                    <div class="footer_grid_left">
                        <div class="contact_footer_grid_left text-center mb-3">
                            <h5>E-mail</h5>
                        </div>
                        <p><a href="infostasis@gmail.com">infostasis@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="row contact-wls-detail">
                <div class="col-lg-6 contact-form pb-lg-3 pb-2">
                    <?php $form = \yii\widgets\ActiveForm::begin([
                        'fieldConfig' => [
                            'template' => "{input} {error}",
                            ]
                    ])
                    ?>
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                            <div class="col-lg-6 col-md-6 form-group contact-forms">
                                <?=$form->field($model, 'name')
                                    ->input('text', ['class' => 'form-control', 'placeholder' => 'Имя'])?>

                            </div>
                            <div class="col-lg-6 col-md-6 form-group contact-forms">
                                <?=$form->field($model, 'email')
                                    ->input('email', ['class' => 'form-control', 'placeholder' => 'E-mail'])?>
                            </div>
                        </div>
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                            <div class="col-lg-6 col-md-6 form-group contact-forms">
                                <?=$form->field($model, 'phone')
                                    ->input('text', ['class' => 'form-control', 'placeholder' => 'Телефон'])?>
                            </div>
                            <div class="col-lg-6 col-md-6 form-group contact-forms">
                                <?=$form->field($model, 'description')
                                    ->input('text', ['class' => 'form-control', 'placeholder' => 'Тема'])?>
                            </div>
                        </div>
                        <div class="form-group contact-forms">
                            <?=$form->field($model, 'text')
                                ->textarea(['class' => 'form-control' , 'placeholder' => 'Сообщение'])?>
                        </div>
                    <?= Html::submitButton('Отправить', ['class' => 'btn sent-butnn btn-lg']) ?>
                    <?php $form = \yii\widgets\ActiveForm::end()?>
                </div>
                <div class="col-lg-6 address_mail_footer_grids">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A27d7912288044140ef912088c2ddaf01a1b32e884019a0092c4a67eb13fc34b5&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
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
