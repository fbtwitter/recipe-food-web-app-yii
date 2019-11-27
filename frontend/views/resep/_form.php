<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model frontend\models\Resep */
/* @var $form yii\widgets\ActiveForm */
?>
<p>
    <?= Html::a('Update Resep', ['create'], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Update Bahan', ['/bahan/index', 'id' => $model->RESEP_ID], ['class' => 'btn btn-success']) ?>
    <?= Html::a('Update Langkah', ['/langkah/index', 'id' => $model->RESEP_ID], ['class' => 'btn btn-success']) ?>
</p>
<div class="resep-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($model, 'KATEGORI_LOKASI_ID')->textInput() ?>

    <?= $form->field($model, 'USER_USERNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KATEGORI_MAKANAN_ID')->textInput() ?>

    <?= $form->field($model, 'RESEP_JUDUL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'RESEP_DESKRIPSI')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
