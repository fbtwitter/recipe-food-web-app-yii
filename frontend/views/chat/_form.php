<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Chat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CHAT_ID')->textInput() ?>

    <?= $form->field($model, 'CHAT_PENGIRIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CHAT_PENERIMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CHAT_ISI')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CHAT_WAKTU')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
