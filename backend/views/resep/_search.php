<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResepSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resep-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'RESEP_ID') ?>

    <?= $form->field($model, 'KATEGORI_LOKASI_ID') ?>

    <?= $form->field($model, 'USER_USERNAME') ?>

    <?= $form->field($model, 'KATEGORI_MAKANAN_ID') ?>

    <?= $form->field($model, 'RESEP_JUDUL') ?>

    <?php // echo $form->field($model, 'RESEP_FOTO') ?>

    <?php // echo $form->field($model, 'RESEP_DESKRIPSI') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
