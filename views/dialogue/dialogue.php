<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
$js = <<<JS
$(window).load(function () {
      $('html, body, .container').animate({scrollTop: $('#anchor').offset().top}, 1);
      return false;
});

JS;

//$this->registerJs($js);

$test = <<<JS
function show()  
        {  
            $.ajax({  
                type: 'post',
                url: "test",  
                cache: false,  
                success: function(html){  
                    return $("#content").html(html);  
                }  
            });  
        }  
        $(window).on('load', function(){
           $( document ).scrollTop(0);
        });
        $(document).ready(function(){
			setInterval(show, 1500);
			// show();
		});
JS;
$this->registerJs($test);

?>
<div id="content">

</div>

<div class="container mb-5" style="border: 5px solid #F5F5F5">
    <div class="row">
        <div class="col-lg-12">
            <?php Pjax::begin()?>
            <?php $form = ActiveForm::begin([
                    'id' => 'contact-form',
                    'options' => [
                            'data' => ['pjax' => true],
                    ],
                    'enableClientValidation' => true,
            ]);?>
            <?= $form->field($model, 'message')->textarea(['class' => 'form-control', 'rows'=>6])?>
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-secondary mb-2', 'id' => 'test'])?>
            <?php ActiveForm::end();?>
            <?php Pjax::end()?>
        </div>

    </div>
</div>


<?php
$css = <<<CSS
.anyClass {
    height: 600px;
    overflow-y: scroll;
}

CSS;
//$this->registerCss($css);



?>
