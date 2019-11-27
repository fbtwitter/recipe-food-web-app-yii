<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ChatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CHAT_ID') ?>

    <?= $form->field($model, 'CHAT_PENGIRIM') ?>

    <?= $form->field($model, 'CHAT_PENERIMA') ?>

    <?= $form->field($model, 'CHAT_ISI') ?>

    <?= $form->field($model, 'CHAT_WAKTU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
