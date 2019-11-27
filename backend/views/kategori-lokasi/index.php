<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KategoriLokasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Lokasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-lokasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kategori Lokasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'KATEGORI_LOKASI_ID',
            'KATEGORI_LOKASI_NAMA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
