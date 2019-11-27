<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BahanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bahan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahan-index">

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
        <?= Html::a('Create Bahan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'BAHAN_ID',
            'RESEP_ID',
            'BAHAN_NAMA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
