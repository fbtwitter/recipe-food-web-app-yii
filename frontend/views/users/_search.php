<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'USER_ID') ?>

    <?= $form->field($model, 'USER_NAMA_LENGKAP') ?>

    <?= $form->field($model, 'USER_USERNAME') ?>

    <?= $form->field($model, 'USER_PASSWORD') ?>

    <?= $form->field($model, 'USER_FOTO') ?>

    <?php // echo $form->field($model, 'USER_EMAIL') ?>

    <?php // echo $form->field($model, 'user_role_model_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
