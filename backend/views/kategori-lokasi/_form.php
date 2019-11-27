<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriLokasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-lokasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KATEGORI_LOKASI_ID')->textInput() ?>

    <?= $form->field($model, 'KATEGORI_LOKASI_NAMA')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
