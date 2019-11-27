<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\Query;

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

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'foto',
                'format' => 'html',
                'value' => function($data) {
                    return Html::img(Yii::getAlias('@fileUrl') . '/' . $data['RESEP_FOTO'], 
                    ['width' => '500px']);
                },
            ],
            'kATEGORILOKASI.KATEGORI_LOKASI_NAMA',
            'kATEGORIMAKANAN.KATEGORI_MAKANAN',
            'RESEP_JUDUL',
            'RESEP_DESKRIPSI',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
