<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriMakanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-makanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KATEGORI_MAKANAN_ID')->textInput() ?>

    <?= $form->field($model, 'KATEGORI_MAKANAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>