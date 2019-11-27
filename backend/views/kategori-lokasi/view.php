<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KategoriLokasi */

$this->title = $model->KATEGORI_LOKASI_ID;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Lokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kategori-lokasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->KATEGORI_LOKASI_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->KATEGORI_LOKASI_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'KATEGORI_LOKASI_ID',
            'KATEGORI_LOKASI_NAMA',
        ],
    ]) ?>

</div>
