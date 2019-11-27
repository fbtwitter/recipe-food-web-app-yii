<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiwayatChatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayat-chat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'RIWAYAT_ID') ?>

    <?= $form->field($model, 'RIWAYAT_PENGIRIM') ?>

    <?= $form->field($model, 'RIWAYAT_PENERIMA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
