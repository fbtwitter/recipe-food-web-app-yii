<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriMakanan */

$this->title = 'Update Kategori Makanan: ' . $model->KATEGORI_MAKANAN_ID;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Makanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KATEGORI_MAKANAN_ID, 'url' => ['view', 'id' => $model->KATEGORI_MAKANAN_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-makanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
