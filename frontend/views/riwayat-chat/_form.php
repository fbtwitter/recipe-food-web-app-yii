<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiwayatChat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayat-chat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RIWAYAT_ID')->textInput() ?>

    <?= $form->field($model, 'RIWAYAT_PENGIRIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RIWAYAT_PENERIMA')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
