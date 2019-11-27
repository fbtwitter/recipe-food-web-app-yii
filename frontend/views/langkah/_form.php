<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Langkah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="langkah-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="hide">
        <?= $form->field($model, 'LANGKAH_ID')->textInput() ?>
    </div>
    
    <div class="hide">
        <?= $form->field($model, 'RESEP_ID')->textInput() ?>
    </div>

    <?= $form->field($model, 'LANGKAH_NO')->textInput() ?>

    <?= $form->field($model, 'LANGKAH_NAMA')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
