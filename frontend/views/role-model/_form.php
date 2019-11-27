<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RoleModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="role-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'role_model_nama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
