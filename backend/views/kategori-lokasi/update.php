<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriLokasi */

$this->title = 'Update Kategori Lokasi: ' . $model->KATEGORI_LOKASI_ID;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Lokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KATEGORI_LOKASI_ID, 'url' => ['view', 'id' => $model->KATEGORI_LOKASI_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-lokasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
