<?php
$test = <<<JS
function show()  
        {  
            $.ajax({  
                type: 'post',
                url: "http://south/admin/dialogue/test",  
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

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="box box-success">
                <div class="box-header">
                    <i class="fa fa-comments-o"></i>
                    <h3 class="box-title">Chat</h3>
                </div>
                <div class="box-body chat" id="chat-box">


                        <div id="content">

                        </div>

                </div>

                <div class="box-footer">
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
    </div>
</div>
