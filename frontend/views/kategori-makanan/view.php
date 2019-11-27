<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\KategoriMakanan */

$this->title = $model->KATEGORI_MAKANAN_ID;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Makanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kategori-makanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->KATEGORI_MAKANAN_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->KATEGORI_MAKANAN_ID], [
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
            'KATEGORI_MAKANAN_ID',
            'KATEGORI_MAKANAN',
        ],
    ]) ?>

</div>
