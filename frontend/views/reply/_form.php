<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reply */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reply-form">

    <?php $form = ActiveForm::begin(['id' => $model->formName()]); ?>

    <div class="hide">
        <?= $form->field($model, 'REPLY_ID')->textInput() ?>
    </div>

    <div class="hide">
        <?= $form->field($model, 'REVIEW_ID')->textInput() ?>
    </div>

    <?= $form->field($model, 'REPLY_BALASAN')->textInput(['placeholder' => "Berikan komentar balasanmu"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
    // $script = <<< JS
    // $('form${$model->formName()}').on('beforeSubmit', function(e)
    // {
    //     var \$form = $(this);
    //     $.post(
    //         \$form.attr("action"). // serialize Yii2 form
    //         \$form.serialize()
    //     )
    //         .done(function(result)
    //         {
    //             if(result.message == 'Success')
    //             {
    //                 $(document).find('#secondmodal').modal('hide');
    //                 $.pjax.reload({container:'#commodity-grid'});
    //             } else {
    //                 $(\$form).trigger("reset");
    //                 $("#message").html(result.message);
    //             }
    //         }).fail(function()
    //         {
    //             console.log("server error");
    //         });
    //         return false;
    // });

    // JS;
    // $this->registerJS($script);
?>