<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Likes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="likes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'LIKE_ID')->textInput() ?>

    <?= $form->field($model, 'USER_USERNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RESEP_ID')->textInput() ?>

    <?= $form->field($model, 'LIKE_JUMLAH')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
