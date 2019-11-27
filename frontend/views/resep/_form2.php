<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model frontend\models\Resep */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resep-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form2']); ?>

    <?= $form->field($model, 'KATEGORI_LOKASI_ID')->dropDownList($dropdownLokasi) ?>

    <div class="hide">
        <?= $form->field($model, 'USER_USERNAME')->textInput(['maxlength' => true, 'value' => Yii::$app->user->identity->username]) ?>
    </div>

    <?= $form->field($model, 'KATEGORI_MAKANAN_ID')->dropDownList($dropdownMakanan) ?>

    <?= $form->field($model, 'RESEP_JUDUL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Bahan </h4></div>
            <div class="panel-body">
                <?php DynamicFormWidget::begin([
                    'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                    'widgetBody' => '.container-items', // required: css class selector
                    'widgetItem' => '.item', // required: css class
                    'limit' => 20, // the maximum times, an element can be cloned (default 999)
                    'min' => 1, // 0 or 1 (default 1)
                    'insertButton' => '.add-item', // css class
                    'deleteButton' => '.remove-item', // css class
                    'model' => $modelsBahan[0],
                    'formId' => 'dynamic-form2',
                    'formFields' => [
                        'BAHAN_NAMA',
                    ],
                ]); ?>

                <div class="container-items"><!-- widgetContainer -->
                <?php foreach ($modelsBahan as $i => $modelBahan): ?>
                    <div class="item panel panel-default"><!-- widgetBody -->
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Bahan</h3>
                            <div class="pull-right">
                                <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                                <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <?php
                                // necessary for update action.
                                if (! $modelBahan->isNewRecord) {
                                    echo Html::activeHiddenInput($modelBahan, "[{$i}]BAHAN_ID");
                                }
                            ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <?= $form->field($modelBahan, "[{$i}]BAHAN_NAMA")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <?php DynamicFormWidget::end(); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Langkah </h4></div>
            <div class="panel-body">
                <?php DynamicFormWidget::begin([
                    'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                    'widgetBody' => '.container-items2', // required: css class selector
                    'widgetItem' => '.item2', // required: css class
                    'limit' => 20, // the maximum times, an element can be cloned (default 999)
                    'min' => 1, // 0 or 1 (default 1)
                    'insertButton' => '.add-item2', // css class
                    'deleteButton' => '.remove-item2', // css class
                    'model' => $modelsLangkah[0],
                    'formId' => 'dynamic-form2',
                    'formFields' => [
                        'LANGKAH_NO',
                        'LANGKAH_NAMA',
                    ],
                ]); ?>

                <div class="container-items2"><!-- widgetContainer -->
                <?php foreach ($modelsLangkah as $i => $modelLangkah): ?>
                    <div class="item2 panel panel-default"><!-- widgetBody -->
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Langkah</h3>
                            <div class="pull-right">
                                <button type="button" class="add-item2 btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                                <button type="button" class="remove-item2 btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <?php
                                // necessary for update action.
                                if (! $modelLangkah->isNewRecord) {
                                    echo Html::activeHiddenInput($modelLangkah, "[{$i}]LANGKAH_ID");
                                }
                            ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <?= $form->field($modelLangkah, "[{$i}]LANGKAH_NO")->textInput() ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= $form->field($modelLangkah, "[{$i}]LANGKAH_NAMA")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <?php DynamicFormWidget::end(); ?>
            </div>
        </div>
    </div>

    <?= $form->field($model, 'RESEP_DESKRIPSI')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
