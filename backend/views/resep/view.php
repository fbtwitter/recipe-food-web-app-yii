<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Resep */

$this->title = $model->RESEP_ID;
$this->params['breadcrumbs'][] = ['label' => 'Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resep-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->RESEP_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->RESEP_ID], [
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
            'RESEP_ID',
            'KATEGORI_LOKASI_ID',
            'USER_USERNAME',
            'KATEGORI_MAKANAN_ID',
            'RESEP_JUDUL',
            'RESEP_FOTO',
            'RESEP_DESKRIPSI:ntext',
        ],
    ]) ?>

</div>
