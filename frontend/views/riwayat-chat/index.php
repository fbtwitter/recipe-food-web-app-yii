<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RiwayatChatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Chats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-chat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Chat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'RIWAYAT_ID',
            'RIWAYAT_PENGIRIM',
            'RIWAYAT_PENERIMA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
