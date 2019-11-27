<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ResepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resep';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-index">

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1><?= Html::encode($this->title) ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <p>
        <?= Html::a('Create Resep', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'RESEP_ID',
            'KATEGORI_LOKASI_ID',
            'USER_USERNAME',
            'KATEGORI_MAKANAN_ID',
            'RESEP_JUDUL',
            'RESEP_FOTO',
            'RESEP_DESKRIPSI',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
