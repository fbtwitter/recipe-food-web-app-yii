<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LikesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Likes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="likes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Likes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'LIKE_ID',
            'USER_USERNAME',
            'RESEP_ID',
            'LIKE_JUMLAH',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
