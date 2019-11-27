<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="hide">
    <?= $form->field($model, 'USER_ID')->textInput() ?>
    </div>

    <?= $form->field($model, 'USER_NAMA_LENGKAP')->textInput(['maxlength' => true]) ?>

    <div class="hide">
    <?= $form->field($model, 'USER_USERNAME')->textInput(['maxlength' => true]) ?>
    </div>

    <?= $form->field($model, 'USER_PASSWORD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'USER_EMAIL')->textInput(['maxlength' => true]) ?>

    <div class="hide">
    <?= $form->field($model, 'user_role_model_id')->textInput() ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
