<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Resep */

$this->title = 'Create Resep';
$this->params['breadcrumbs'][] = ['label' => 'Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsBahan' => $modelsBahan,
        'modelsLangkah' => $modelsLangkah,
        'dropdownLokasi' => $dropdownLokasi,
        'dropdownMakanan' => $dropdownMakanan,
    ]) ?>

</div>
