<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KategoriMakananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Makanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-makanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kategori Makanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'KATEGORI_MAKANAN_ID',
            'KATEGORI_MAKANAN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
