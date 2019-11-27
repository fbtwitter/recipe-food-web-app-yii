<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\LangkahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="langkah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'LANGKAH_ID') ?>

    <?= $form->field($model, 'RESEP_ID') ?>

    <?= $form->field($model, 'LANGKAH_NO') ?>

    <?= $form->field($model, 'LANGKAH_NAMA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
