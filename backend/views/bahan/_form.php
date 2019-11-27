<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bahan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bahan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'BAHAN_ID')->textInput() ?>

    <?= $form->field($model, 'RESEP_ID')->textInput() ?>

    <?= $form->field($model, 'BAHAN_NAMA')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
